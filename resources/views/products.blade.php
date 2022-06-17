@extends('Layout.app')
@section('title', 'Gossiper.Com| The world best news')
@section('maincontent')
<!-- BANNER -->
		<!-- BANNER -->

		<!-- BODY -->
		<div class="home_body">
			<div class="container">
				<div class="latest_post">
					<div class="latest_post_top">
						<h1 class="latest_post_h1 brdr_line">Products</h1>
					</div>
					<div class="row">
				@if(count($blog) >0)
					@foreach($blog as $b)
						<div class="col-12 col-md-6 col-lg-4">
							<a href="/blog/{{$b->slug}}">
								<div class="home_card">
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">	
										@if(count($b->cat) >0)
											<ul class="home_card_bottom_text_ul">
											@foreach($b->cat as $c)
												<li>
													<a href="/blog/{{$b->slug}}">{{$c->categoryName}}</a>
												</li>
												@endforeach
											</ul>
										@endif
											<a href="/blog/{{$b->slug}}">
												<h2 class="home_card_h2">{{$b->title}}</h2>
											</a>
											<p class="post_p">{{$b->post_excerpt}}</p>
										</div>
									</div>
								</div>
							</a>
						</div>
					@endforeach
				@endif
					</div>
					<div class="text-center">
						<botton>
							<a href="/Blogs"> View All</a>
						</botton>
					</div>
				</div>
			</div>
		</div>
		<!-- BODY -->
@endsection

