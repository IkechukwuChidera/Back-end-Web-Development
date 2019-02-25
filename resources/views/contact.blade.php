
@extends('layout.master')
@section('content')
<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Contact</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="contact-page spad pt-0">
		<div class="container">
			<div class="map-section">
				<div class="contact-info-warp">
					<div class="contact-info">
						<h4>Address</h4>
						<p>40 Baria Street 133/2, NewYork City, US</p>
					</div>
					<div class="contact-info">
						<h4>Phone</h4>
						<p>(+88) 111 555 666</p>
					</div>
					<div class="contact-info">
						<h4>Email</h4>
						<p>infodeercreative@gmail.com</p>
					</div>
					<div class="contact-info">
						<h4>Working time</h4>
						<p>Monday - Friday: 08 AM - 06 PM</p>
					</div>
				</div>
				<!-- Google map -->
				<div class="map" id="map-canvas"></div>
			</div>
			<div class="contact-form spad pb-0">
				<div class="section-title text-center">
					<h3>GET IN TOUCH</h3>
					<p>Contact us for best deals and offer</p>
				</div>
				<form class="comment-form --contact">
					<div class="row">
						<div class="col-lg-4">
							<input type="text" placeholder="Your Name">
						</div>
						<div class="col-lg-4">
							<input type="text" placeholder="Your Email">
						</div>
						<div class="col-lg-4">
							<input type="text" placeholder="Subject">
						</div>
						<div class="col-lg-12">
							<textarea placeholder="Message"></textarea>
							<div class="text-center">
								<button class="site-btn">SUBMIT</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3>NEWSLETTER</h3>
					<p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
				</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn">SUBSCRIBE</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/logo-light.png" alt="">
						<p>orem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</p>
						<div class="social pt-1">
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">USEFUL LINK</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="">About us</a></li>
							<li><a href="">Services</a></li>
							<li><a href="">Events</a></li>
							<li><a href="">Features</a></li>
						</ul>
						<ul>
							<li><a href="">Policy</a></li>
							<li><a href="">Term</a></li>
							<li><a href="">Help</a></li>
							<li><a href="">FAQs</a></li>
							<li><a href="">Site map</a></li>
						</ul>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">RECENT POST</h6>
					<ul class="recent-post">
						<li>
							<p>Snackable study:How to break <br> up your master's degree</p>
							<span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
						</li>
						<li>
							<p>Open University plans major <br> cuts to number of staff</p>
							<span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
						</li>
					</ul>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> 40 Baria Street 133/2, NewYork City,US</p></li>
						<li><p><i class="fa fa-phone"></i> (+88) 111 555 666</p></li>
						<li><p><i class="fa fa-envelope"></i> infodeercreative@gmail.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Monday - Friday, 08:00AM - 06:00 PM</p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!-- Footer section end-->

@endsection
