<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Blog;
use Illuminate\View\View;
// use Illuminate\Support\Facades\View;

class blogController extends Controller
{
    public function index(Request $request){
        $categories = category::select('id', 'categoryName', 'iconImage')->get();
        $blogs =Blog::orderBy('id', 'desc')->with(['cat', 'user'])->limit(6)->get(['id','title','post_excerpt', 'slug','featuredImage', 'user_id', 'created_at']);
        return view('home')->with(['categories' =>$categories, 'blog' => $blogs]);
        // Ne chapter start from here
    }
    public function blogSingle(Request $request, $slug){
        $blogs =Blog::where('slug', $slug)->with(['cat', 'user', 'tag'])->first(['id','title','featuredImage', 'user_id', 'post']);
        $category_ids = [];
        foreach($blogs->cat as $cat){
            array_push($category_ids, $cat->id);
        };
        $relativeBlog = Blog::with('user')->where('id', '!=', $blogs->id)->whereHas('cat', function($q) use($category_ids){
            $q->whereIn('category_id', $category_ids);
        })->limit(5)->orderBy('id', 'desc')->get(['id','title','slug','featuredImage', 'user_id']);
        return view('blogsingle')->with(['blog' => $blogs, 'relativeBlog' => $relativeBlog]);
    }
    public function compose(View $view){
        $cat = category::select('id', 'categoryName', 'iconImage')->get(['id', 'categoryName', 'iconImage']);
        $view->with('cat', $cat);
    }
    public function categoryIndex(Request $request, $categoryName, $id)
    {
        $blogs = Blog::with('user')->whereHas('cat', function($q) use($id){
            $q->where('category_id', $id);
        })->orderBy('id', 'desc')->select('id','title','slug','featuredImage', 'user_id')->paginate(1);
        return view('category')->with(['categoryName' => $categoryName, 'blog' => $blogs, ]);
    }
    public function tagIndex(Request $request, $tagName, $id)
    {
        $blogs = Blog::with('user')->whereHas('tag', function($q) use($id){
            $q->where('tags_id', $id);
        })->orderBy('id', 'desc')->select('id','title','slug','featuredImage', 'user_id')->paginate(1);
        return view('tag')->with(['tagName' => $tagName, 'blog' => $blogs, ]);
    }
    public function allBlogs(Request $request)
    {
        # code...
        $blogs =Blog::orderBy('id', 'desc')->with(['cat', 'user'])->select('id','title','post_excerpt', 'slug','featuredImage', 'user_id')->paginate(2);
        return view('blogs')->with(['blog' => $blogs]);
    }
    public function seachAll(Request $request)
    {
        # code...
        $str = $request->str;
        $blogs =Blog::orderBy('id', 'desc')->with(['cat', 'user'])->select('id','title','post_excerpt', 'slug','featuredImage', 'user_id');
        $blogs->when($str!='', function($q) use($str){
              $q->where('title', 'LIKE', "%{$str}%")
              ->orwhereHas('cat', function($q) use($str){
                  $q->where('categoryName', $str);
              })
              ->orwhereHas('tag', function($q) use($str){
                  $q->where('tagName', $str);
              });
        });
        $blogs = $blogs->paginate(1);
        $blogs = $blogs->appends($request->all());
        return view('blogs')->with(['blog' => $blogs]);
        // if(!$str) return $blogs->get();
        //     $blogs->where('title', 'LIKE', "%{$str}%")
        //           ->orwhereHas('cat', function($q) use($str){
        //               $q->where('categoryName', $str);
        //           })
        //           ->orwhereHas('tag', function($q) use($str){
        //               $q->where('tagName', $str);
        //           });

        // return view('blogs')->with(['blog' => $blogs]);
    }
    public function products(){
        $blogs =Blog::orderBy('id', 'desc')->with(['cat', 'user'])->select('id','title','post_excerpt', 'slug','featuredImage', 'user_id')->paginate(2);
        return view('products')->with(['blog' => $blogs]);
    }
    public function gallery(){
        return view('gallery');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
}
