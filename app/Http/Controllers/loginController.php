<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
        public function store(Request $request){
            $this->validate($request, [
                'email' => 'required',
                'password' => 'required',
            ]);
            // Invalid login credentials bug
            if(!auth()->attempt($request->only('email', 'password'))){
                return back()->with('status', 'Invalid Login credentials');
            }
            return redirect('/');
           }
}
