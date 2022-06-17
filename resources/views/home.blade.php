@extends('Layout.app')
@section('title', 'Gossiper.Com| The world best news')
@section('maincontent')
<!-- BANNER -->
<section class="banner_sec">
	<div class="center">
		
		<h1>AkipoGlobal</h1>

		<h2>Buy Confidently, <br> <span>GUARANTEED</span></h2>
		<br>
		<p>AkipoGlobal is an independent Big Cocoa merchants, providing added protection for shoppers and instilling trust and confidence in online stores.</p>
                
	</div>
</section>
		<!-- BANNER -->
<div>
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
	<div class="speech">
		<h3>Count on us for your Cocoa Bean <br> Raw Cashew Nuts and <br> Palm Kernel seeds shipments</h3>
			<div class="style"></div>
		<p>The world’s obsession with chocolate means a constant demand
			for cocoa beans, butter, powder and other cocoa derivatives. Bringing these sought-after but sensitive goods from one side of the planet
			to the other requires speed, precision and local knowledge.
			Our expert team will make sure that you have the right equipment
			and support in the right place at the right time – every time.</p>

			<div class="speech_container">
				<div>
					<ul>
						<li>
									<a href=""><i class="fa fa-spinner" aria-hidden="true"></i></a>
							</li>
							<h4>Continuous investments <br> in greener technologies </h4>
					</ul>
				</div>
				<div>
					<ul>
						<li>
									<a href=""><i class="fa fa-balance-scale"></i></a>
							</li>
							<h4>Scalable <br> solutions</h4>
					</ul>
				</div>
				<div>
					<ul>
						<li>
									<a href=""><i class="fa fa-truck"></i></a>
							</li>
							<h4>Wide range of equipment <br> and transport methods</h4>
					</ul>
				</div>
				
			</div>
	</div>

		<div class="grid_container">
				<div class="first">
					<img src="/images/img-2.jpg" alt="workers_image">
				</div>

				<div class="second">
					<h3 class="center">Reason to buy from AkipoGlobal</h3>
					<br>
					<p class="center">Cocoa beans need to be shipped shortly after harvest, as extended storage can result in losses due to the high relative humidity
						in the tropics. With more than 50 years of experience in shipping cocoa,
						AkipoGlobal can advise you on the best shipment options
						for your containerised cargo.
					</p>
				</div>
		</div>
		<div class="grid_container">
				

				<div class="second">
					<h3 class="center">Companies and Structure</h3>
					<br>
					<p class="center">The Nigerian cocoa sector is dominated by smallholder farmers numbering at 300,000 – 350,000 with some commercial plantations. 
						The average cultivated area is 1,400,000 hectares. Cocoa is our number one exportable product (not including oil). The local processing industry is growing fast. This increases employment within the sector and therewith our capacity of a wide variety of processed cocoa products.
					</p>
				</div>
				<div class="first">
					<img src="/images/cocoa10.jpeg" alt="workers_image">
				</div>
		</div>
		<div class="grid_container">
				<div class="first">
					<img src="/images/img-4.jpg" alt="workers_image">
				</div>

				<div class="second">
					<h3 class="center">Global Experts <br> and Reliable</h3>
					<br>
					<p class="center">Our operations have been carefully organized at every level including a stable captal base, conservative risk managemen
						and dilligent cooperate governance, further reinforced by financing facilities strucured with the first class cooperate and investment banking institutions AKIPO HERITAGE GLOBAL LTD.
						position itself as a reliable and credible counterparty commited to developing longstanding strategic partnership Cocoa is our number one exportable product (not including oil). The local processing industry is growing fast. This increases employment within the sector and therewith our capacity of a wide variety of processed cocoa products.
					</p>
				</div>
			
		</div>
		<!-- BODY -->
		

		<!-- the products session ends right here -->
		<div class="speech">
		<h1>Because you need more <br> than port-to-port services</h1>
			<div class="style"></div>
		<p>Looking for extra storage, inland transportation or support <br>
				with customs paperwork? We’ve got you covered.</p>

			<div class="speech_container">
				<div>
					<ul>
						<li>
									<a href=""><i class="fa fa-database" aria-hidden="true"></i></a>
							</li>
							<h4>Intermodal <br> transportation</h4>
					</ul>
				</div>
				<div>
					<ul>
						<li>
									<a href=""><i class="fa fa-building" aria-hidden="true"></i></a>
							</li>
							<h4>Warehousing and <br> Storage</h4>
					</ul>
				</div>
				<div>
					<ul>
						<li>
									<a href=""><i class="fa fa-window-maximize"></i></a>
							</li>
							<h4>Smart containers</h4>
					</ul>
				</div>
				
			</div>
	</div>
</div>

		<!-- BODY -->
@endsection

