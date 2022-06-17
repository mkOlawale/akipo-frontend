<!-- blogsingle -->
@extends('Layout.app')
@section('title', $blog->title)
@section('maincontent')
<!-- BANNER -->
<div class="blog_banner">
			
</div>
            <!-- BANNER -->
    <div class="blog_post_sec_all">
			<div class="container">
				<div class="row">
					<div class="cl-12 col-md-12 col-lg-9">
						<div class="blog_post_left">
							<div class="blog_post_sec">
								<div class="blog_post_top">
                                @if(count($blog->cat) >0)
											<ul class="blog_post_top_ul">
											@foreach($blog->cat as $c)
                                                 <li>
											        <a href="blog.html">{{$c->categoryName}}</a>
										        </li>
										        <li>{{$c->created_at->diffForHumans()}}</li>
												@endforeach
											</ul>
										@endif
								</div>
								<div class="blog_post">
                                     <h1 class="blog_post_h1">{{$blog->title}}</h1>
									</div>
                                 {!!$blog->post!!}			
									<div class="riview_post">
										<ul class="riview_post_ul">
											<li><i class="far fa-thumbs-up"></i>i Like this products</li>
											<li><i class="far fa-share-square"></i>Whatsapp</li>
										</ul>
									</div>	
								</div>	
							</div>
							<!--WRITE COMMENT BOX -->
								<div class="cmnt_frm mar_t30">
									<h2 class="post_dtls_title2 pad_b20">Leave A Comment</h2>
								<div class="cmnt_frm_all">
									<div class="row">
										<div class="col-12 col-md-6 col-lg-6">
											<div class="cmnt_input">
												<p>NAME</p>
												<input type="text" placeholder="Enter your name">
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="cmnt_input">
												<p>E-MAIL</p>
												<input type="text" placeholder="Enter your E-MAIL">
											</div>
										</div>
										<div class="col-12 col-md-12 col-lg-12">
											<div class="cmnt_input">
												<p class="mar_b10">MESSAGE</p>
												<textarea placeholder="Type your comment" name="message" required=""></textarea>
											</div>
										</div>
										<div class="dtls_frm_btn mar_t20">
											<button class="btn1">send message</button>
										</div>
									</div>
								</div>
							</div>
							<!--WRITE COMMENT BOX -->
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-3">
						
							<div class="post_tags">
								<h3 class="post_tags_h3">Popular Tags</h3>
                                    @if(count($blog->tag) >0)
											<ul class="post_tags_ul">
											@foreach($blog->tag as $t)
												<li>
													<a href="/tag/{{$t->tagName}}/{{$t->id}}">{{$t->tagName}}</a>
												</li>
												@endforeach
											</ul>
										@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection