<div style="position: relative;" class="nav-menu">
								<div class="logo">
									<a href="/"> AKIPOGLOBAL</a>
								</div>
								<div>
										<search></search>
								</div>
								<div id="mySidenav" class="sidenav">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
									<div class="nav-link">
									<a href="/">Home</a>
									<a href="{{ route('products') }}">Products</a>
									<a href="{{ route('gallery') }}">Gallery</a>
									<a href="{{ route('about') }}">About</a>
									<a href="{{ route('contact') }}">Contact</a>
									
									</div>
									
									</div>
									<span style="font-size:30px;cursor:pointer" class="openbtn" onclick="openNav()">☰
									</span>
		</div>
		<script>
			function openNav() {
			document.getElementById("mySidenav")
			.style.width="250px";
			}

			function closeNav() {
			document.getElementById("mySidenav")
			.style.width = "0";
			}
		</script>