<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="UP Agency" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('front/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('css')
	<!-- Document Title
	============================================= -->
	<title>Pharma</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

			<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container">
	<!-- Top Bar
		============================================= -->
		<div id="top-bar">
			<div class="container clearfix top-bar-fix">

				<div class="row justify-content-between">
					<div class="col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						
							<ul id="top-social" class="lefty">
							<li class="lang-switch">
									<a  id="index_en" href="javascript:void(0)">
										<img src="https://wq3.com/uploads/language-icons/16327053281384740823.png"> En
									</a>
									<a  id="index_ar" href="javascript:void(0)">
										<img src="https://wq3.com/uploads/language-icons/1632078760571914258.png"> Ar
									</a>				
								</li>
								<li><a href="tel:+201200007010" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+201200007010</span></a></li>
								<li><a href="#" class="si-email"><span class="ts-icon"><i class="icon-line-heart"></i></span><span class="ts-text">Follow Us</span></a></li>
								<li><a href="mailto:HR@Mashpremiere.net" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">HR@Mashpremiere.net</span></a></li>
							</ul>
						<!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto">

						<!-- Top Social
						============================================= -->
						<ul id="top-social">
							<li><a href="https://www.facebook.com/MashPremiere/" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li class="d-none d-sm-flex"><a href="https://www.youtube.com/channel/UC-y-GnyUg4AKogTqj1TXCMw" class="si-pinterest"><span class="ts-icon"><i class="icon-line-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
						</ul><!-- #top-social end -->

					</div>

				</div>

			</div>
		</div><!-- #top-bar end -->


				<div class="header-row">

			<!-- Logo
			============================================= -->
			<div id="logo">
				<a href="{{route('front_index')}}" class="standard-logo" data-dark-logo="{{asset('front/images/logo-dark.png')}}">DRUG LAP</a>
				<a href="{{route('front_index')}}" class="retina-logo" data-dark-logo="{{asset('front/images/logo-dark@2x.png')}}">DRUG LAP</a>
			</div><!-- #logo end -->
			
			<div id="primary-menu-trigger">
				<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
			</div>

			<!-- Primary Navigation
			============================================= -->
			<nav class="primary-menu">

				<ul class="menu-container">
					<li class="menu-item">
						<a class="menu-link" href="{{route('front_index')}}"><div>Home</div></a>
					</li>
					<li class="menu-item">
						<a class="menu-link" href="{{route('front_about_us')}}"><div>About Us</div></a>
					</li>

					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_products')}}"><div>Products</div></a>
					</li>
					
					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_blogs')}}"><div>Blogs</div></a>
					</li>
				
					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_covid_19')}}"><div>Covid 19</div></a>
					</li>

					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_careers')}}"><div>Careers</div></a>
					</li>

					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_contactus')}}"><div>Contact Us</div></a>
					</li>
				</ul>

			</nav><!-- #primary-menu end -->
				</div>
			</div>
		</div>
		<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
			<!-- Page Title
		============================================= -->
		@yield('body')

<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-6">

							<div class="widget clearfix">

								<h2> DRUG LAP </h2>

								<p style="font-weight: bold;">BE OUR GUEST</p>

								<div class="py-2" style="background: url('{{asset('front/images/world-map.png')}}') no-repeat center center;">
									<div class="row col-mb-30">
										<div class="col-6">
											<address class="mb-0">
												<span title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Headquarter:</strong></span><br>
												100 S. Ashely Drive, Suite 600, Tampa FL 33602
											</address>
										</div>
										<div class="col-6">
											<span title="Phone Number"><strong>Phone:</strong></span> 888-808-0988<br>
											<span title="Email Address"><strong>Email:</strong></span> xxxxxxxx@xxx.com<br>
											<span title="Fax"><strong>Support:</strong></span> xxxxxxxx@xxx.com
										</div>
									</div>
								</div>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

							</div>

						</div>

						<div class="col-sm-6 col-lg-3">

							<div class="widget clearfix">
								<h4>Recent Blogs </h4>

								<div class="posts-sm row col-mb-30" id="post-list-footer">
									<div class="entry col-12">
										<div class="grid-inner row">
											<div class="col">
												<div class="entry-title">
													<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
												</div>
												<div class="entry-meta">
													<ul>
														<li>10th July 2021</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12">
										<div class="grid-inner row">
											<div class="col">
												<div class="entry-title">
													<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
												</div>
												<div class="entry-meta">
													<ul>
														<li>10th July 2021</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12">
										<div class="grid-inner row">
											<div class="col">
												<div class="entry-title">
													<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
												</div>
												<div class="entry-meta">
													<ul>
														<li>10th July 2021</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>

						<div class="col-sm-6 col-lg-3">

							<div class="widget quick-contact-widget form-widget clearfix">

								<h4>Send Message</h4>

								<div class="form-result"></div>

								<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form mb-0">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="input-group mx-auto">
										<div class="input-group-text"><i class="icon-user"></i></div>
										<input type="text" class="required form-control" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
									</div>
									<div class="input-group mx-auto">
										<div class="input-group-text"><i class="icon-email2"></i></div>
										<input type="text" class="required form-control email" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
									</div>
									<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
									<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<input type="hidden" name="prefix" value="quick-contact-form-">
									<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-outline btn-roundeded" style="background-color: #273b76;color: #FFF;" value="submit">Send Email</button>

								</form>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">
					<div class="w-100 text-center">
						Copyrights &copy; 2020 All Rights Reserved by UP Agency.
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('front/js/jquery.js')}}"></script>
	<script src="{{asset('front/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('front/js/functions.js')}}"></script>
    @yield('scripts')
	<script>
		$(document).on('click', '#index_en', function(){
			// console.log("Output;");  
			// console.log(location.hostname);
			// console.log(document.domain);
			//alert(window.location.hostname)

			// console.log("document.URL : "+document.URL);
			// console.log("document.location.href : "+document.location.href);
			// console.log("document.location.origin : "+document.location.origin);
			// console.log("document.location.hostname : "+document.location.hostname);
			// console.log("document.location.host : "+document.location.host);
			// console.log("document.location.pathname : "+document.location.pathname);
			// console.log(document.location.origin + document.location.pathname.replace('ar','en'))
			window.location.href = document.location.origin + document.location.pathname.replace('ar','en')

		})
		$(document).on('click', '#index_ar', function(){
			// console.log("Output;");  
			// console.log(location.hostname);
			// console.log(document.domain);
			// alert(window.location.hostname)

			 //console.log("document.URL : "+document.URL);
			// console.log("document.location.href : "+document.location.href);
			// console.log("document.location.origin : "+document.location.origin);
			// console.log("document.location.hostname : "+document.location.hostname);
			// console.log("document.location.host : "+document.location.host);
			// console.log("document.location.pathname : "+document.location.pathname);
			window.location.href = document.location.origin + document.location.pathname.replace('en','ar')
		})
		
	</script>
</body>
</html>

	
