<header id="header">
		<div class="container box_1170 main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="{{URL('/blog/index')}}"><img src="{{asset('/img/logo.png')}}" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container"> 
					<ul class="nav-menu">
						<li class="menu-active"><a href="{{URL('/blog/index')}}">Home</a></li>
						<li><a href="{{URL('/blog/category')}}">Category</a></li>
						<li><a href="{{URL('/blog/archive')}}">Archive</a></li>
						<li class="menu-has-children"><a href="">Pages</a>
							<ul>
								<li><a href="{{URL('/blog/elements')}}">Elements</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="{{URL('/blog/blog-details')}}">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="{{URL('/blog/contact')}}">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>