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

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{asset('front/include/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('front/include/rs-plugin/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('front/include/rs-plugin/css/navigation.css')}}">

	<!-- Document Title
	============================================= -->
	<title>Home</title>

	<style>

		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Poppins', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Poppins', sans-serif;
		}
		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>

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
								<li class="nav-item dropdown">
									<a class="dropdown-item text-black" id="index_en" href="javascript:void(0)">
										<img src="https://wq3.com/uploads/language-icons/16327053281384740823.png"> English
									</a>
									<a class="dropdown-item text-black" id="index_ar" href="javascript:void(0)">
										<img src="https://wq3.com/uploads/language-icons/1632078760571914258.png"> Arabic
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
				<a href="{{route('front_index')}}" class="standard-logo" data-dark-logo="images/logo-dark.png">DRUG LAP</a>
				<a href="{{route('front_index')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png">DRUG LAP</a>
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

		<section id="slider" class="slider-element revslider-wrap include-header h-auto">
			<div class="slider-inner">

				<!--
				#################################
					- THEMEPUNCH BANNER -
				#################################
				-->
				<div id="rev_slider_679_1_wrapper" class="rev_slider_wrapper fullwidth-container"  style="padding:0px;">
					<!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
					<div id="rev_slider_679_1" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
						<ul>    <!-- SLIDE  -->
							<li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="{{asset('front/images/slider/rev/ken-1-thumb.jpg')}}" data-delay="10000"  data-saveperformance="off" data-title="Responsive Design">
								<!-- MAIN IMAGE -->
								<img src="{{asset('front/images/slider/rev/ken-1.jpg')}}"  alt="kenburns1" data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text text-uppercase"
								data-x="middle" data-hoffset="0"
								data-y="top" data-voffset="215"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;">Picture Perfect on Every Device Bcoz</div>

								<div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
								data-x="middle" data-hoffset="0"
								data-y="top" data-voffset="230"
								data-fontsize="['60','50','40','34']"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;">It's Completely Responsive</div>

								<div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
								data-x="middle" data-hoffset="0"
								data-y="top" data-voffset="340"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-width="['650','650','480','360']"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-textAlign="center"
								data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 650px; white-space: normal;">We have created a Design that looks Awesome, performs Brilliantly &amp; senses Orientations.</div>

								<div class="tp-caption customin ltl tp-resizeme"
								data-x="middle" data-hoffset="0"
								data-y="top" data-voffset="450"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;"><a href="Events.html" class="button button-border button-white button-light button-large button-rounded text-end m-0"><span>BOOK NOW</span> <i class="icon-angle-right"></i></a></div>

							</li>
							<!-- SLIDE  -->
							<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="{{asset('front/images/slider/rev/ken-2-thumb.jpg')}}" data-delay="10000"  data-saveperformance="off"  data-title="Unlimited Possibilities">
								<!-- MAIN IMAGE -->
								<img src="{{asset('front/images/slider/rev/ken-2.jpg')}}"  alt="kenburns6" data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text text-uppercase"
								data-x="middle" data-hoffset="0"
								data-y="top" data-voffset="215"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; color: #333; white-space: nowrap;">Why Choose Canvas?</div>

								<div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
								data-x="middle" data-hoffset="0"
								data-y="top" data-voffset="230"
								data-fontsize="['60','50','40','34']"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; color: #333; white-space: nowrap;">Unlimited Possibilities</div>

								<div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
								data-x="middle" data-hoffset="0"
								data-y="top" data-voffset="340"
								data-width="['650','650','480','360']"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-textAlign="center"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; color: #333; max-width: 650px; white-space: normal;">Create whatever you require for your Business to bloom with Tons of Customization Possibilities.</div>

								<div class="tp-caption customin ltl tp-resizeme"
								data-x="middle" data-hoffset="0"
								data-y="top" data-voffset="450"
								data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;"><a href="Events.html" class="button button-border button-large button-rounded text-end m-0"><span>BOOK NOW</span><i class="icon-angle-right"></i></a></div>

							</li>
						</ul>
					</div>
				</div><!-- END REVOLUTION SLIDER -->

			</div>
		</section>


		<section id='contentDeleted' style="height: 600px; background-color: #FFF;" data-animate="fadeOut"> </section> 
		<!-- this section to fix some early loading problem cause animation on about section to be done without reaching it-->

<!-- start of About Us section -->
<section>
	<div class="container about-us-ext">
		<div class="row">

			<div class="col-lg-4 m-b-60">
				<h2>About Us</h2>
				<h4>DRUG LAP is an Elite corporate pharmaceutical with experienced consultants
					.</h4>
				<p class="lead" style="text-transform: lowercase;">
					DRUG LAP is a leading pharmaceutical company in the Egyptian market aiming to improve the quality of life for the whole MENA Region and Africa, through the local manufacturing and development of the latest innovations in the worldwide pharmaceutical industry.</p>
				<a href="About Us.html" class="btn btn-outline btn-roundeded unique-btn" style="background-color: #273b76;color: #FFF;">More About Us</a>
			</div>

			<div class="col-lg-7 offset-1 m-t-40">
				<div class="row">
						<!-- features box -->
						<div class="col-sm-12 col-lg-6 fbox-color-aboutus " data-animate="fadeInDown" >
							<div class="feature-box fbox-effect ">
								<div class="fbox-icon">
									<a href="About Us.html"><i class="icon-line-book-open i-alt"></i></a>
								</div>
								<div class="fbox-content-fix">
									<h4>Mission Statement </h4>
									</div>
								<p style="text-align: left;padding: 15px;" > Our pharmaceutical company is aiming to improve the quality of life for the whole MENA Region and Africa, through the local manufacturing and development of the latest innovations in the worldwide pharmaceutical industry.</p>
							</div>
						</div>
						<!-- end: features box -->

						<!-- features box -->
						<div class="col-sm-12 col-lg-6 fbox-color-aboutus " data-animate="fadeInLeft" >
							<div class="feature-box fbox-effect">
								<div class="fbox-icon">
									<a href="About Us.html"><i class="icon-eye i-alt"></i></a>
								</div>
								<div class="fbox-content-fix">
									<h4>Our Vision</h4>
								</div>
								<p style="text-align: left;padding: 15px;">Leading the pharmaceutical industry in Egypt through change and innovation to become an international company, delivering better healthcare to more patients around the world.</p>
							</div>
						</div>
						<!-- end: features box -->

						<!-- features box -->
						<div class="col-sm-12 col-lg-6">
							<div class="feature-box fbox-effect fbox-color-aboutus " data-animate="fadeInUp" >
								<div class="fbox-icon">
									<a href="About Us.html"><i class="icon-star21 i-alt"></i></a>
								</div>
								<div class="fbox-content-fix">
									<h4> Our Values </h4>
								</div>
								<p style="text-align: left;padding: 15px;">A focus on quality, modernity, and our passion for putting the patient first are the most important pillars of our philosophy. Providing a safe and challenging working environment for all the Mash Premiere family.
									Giving back to the community by starting charitable initiatives that bring about noticeable positive change.</p>
							</div>
						</div>
						<!-- end: features box -->

					<!-- features box -->
					<div class="col-sm-12 col-lg-6 fbox-color-aboutus " data-animate="fadeInRight" >
						<div class="feature-box fbox-effect">
							<div class="fbox-icon">
								<a href="About Us.html"><i class="icon-line-check-circle i-alt"></i></a>
							</div>
							<div class="fbox-content-fix">
								<h4>Why Choose Us</h4>
							</div>
							<p style="text-align: left;padding: 15px;">One of the fastest growing pharmaceutical companies in the MENA region as per IQVIA reports.
								A perfect place for career development and growth opportunities with more than 100 products in market and 150 more in pipelines covering all therapeutic classes.</p>
						</div>
					</div>
					<!-- end: features box -->
				</div>
			</div>
		</div>
	</div>
</section> <!-- end of about us section -->


		<!-- counter
		============================================= -->
		<section id="content" class="counter-fix">
			<div class="content-wrap">
				<div class="container clearfix">

				

					<div class="row col-mb-50">
						<div class="col-sm-6 col-lg-6 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-virus"></i>
							<div class="counter  " style="color: #ed2f2a;"><span data-from="100" data-to="500000" data-refresh-interval="50" data-speed="2000"></span></div>
							<h5>Tested For & Cured From Hepatitis C Virus</h5>
						</div>

						<div class="col-sm-6 col-lg-3 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-line-users"></i>
							<div class="counter  " style="color: #ed2f2a;"><span data-from="100" data-to="1200" data-refresh-interval="50" data-speed="2500"></span></div>
							<h5>Employees </h5>
						</div>

						<div class="col-sm-6 col-lg-3 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-pill"></i>
							<div class="counter  " style="color: #ed2f2a;"><span data-from="100" data-to="110" data-refresh-interval="50" data-speed="3500"></span></div>
							<h5>Products</h5>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #counter end -->



	<!-- Products
		============================================= -->
		<section id="events">
			<div class="content-wrap pb-0">
				<div class="container">
					<div class="fancy-title title-center title-border topmargin">
						<h3>Products</h3>
					</div>
					<div id="oc-events" class="owl-carousel events-carousel carousel-widget" data-pagi="false" data-items-md="1" data-items-lg="2" data-items-xl="2">

						<div class="oc-item row">
							<div class="entry event mb-3 col-lg-6">
								<div class="grid-inner row align-items-center g-0 p-4">
									<div class="col-md-12 mb-md-0">
										<a href="#" class="entry-image">
											<img src="{{asset('front/images/acivirx-400-copy.png')}}" alt="Inventore voluptates velit totam ipsa">
										</a>
									</div>
									<div class="col-md-12">
										<div class="entry-title title-xs">
											<h3 class="text-center"><a href="#">Acivirax 400mg Tablet</a></h3>
										</div>
										<div class="entry-content">
											<a href="#" class="btn btn-infoss btn-sm unique-btn">More</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">WhatsApp</a>
										</div>
									</div>
								</div>
							</div>
							<div class="entry event mb-3 col-lg-6">
								<div class="grid-inner row align-items-center g-0 p-4">
									<div class="col-md-12 mb-md-0">
										<a href="#" class="entry-image">
											<img src="{{asset('front/images/acivirx-400-copy.png')}}" alt="Inventore voluptates velit totam ipsa">
										</a>
									</div>
									<div class="col-md-12 ">
										<div class="entry-title title-xs">
											<h3 class="text-center"><a href="#">Acivirax 400mg Tablet</a></h3>
										</div>
										<div class="entry-content">
											<a href="#" class="btn btn-infoss btn-sm">More</a> <a href="#" class="btn btn-dangerss btn-sm">WhatsApp</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="oc-item row">
							<div class="entry event mb-3 col-lg-6">
								<div class="grid-inner row align-items-center g-0 p-4">
									<div class="col-md-12 mb-md-0">
										<a href="#" class="entry-image">
											<img src="{{asset('front/images/acivirx-400-copy.png')}}" alt="Inventore voluptates velit totam ipsa">
										</a>
									</div>
									<div class="col-md-12">
										<div class="entry-title title-xs">
											<h3 class="text-center"><a href="#">Acivirax 400mg Tablet</a></h3>
										</div>
										<div class="entry-content">
											<a href="#" class="btn btn-infoss btn-sm unique-btn">More</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">WhatsApp</a>
										</div>
									</div>
								</div>
							</div>
							<div class="entry event mb-3 col-lg-6">
								<div class="grid-inner row align-items-center g-0 p-4">
									<div class="col-md-12 mb-md-0">
										<a href="#" class="entry-image">
											<img src="{{asset('front/images/acivirx-400-copy.png')}}" alt="Inventore voluptates velit totam ipsa">
										</a>
									</div>
									<div class="col-md-12 ">
										<div class="entry-title title-xs">
											<h3 class="text-center"><a href="#">Acivirax 400mg Tablet</a></h3>
										</div>
										<div class="entry-content">
											<a href="#" class="btn btn-infoss btn-sm">More</a> <a href="#" class="btn btn-dangerss btn-sm">WhatsApp</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="oc-item row">
							<div class="entry event mb-3 col-lg-6">
								<div class="grid-inner row align-items-center g-0 p-4">
									<div class="col-md-12 mb-md-0">
										<a href="#" class="entry-image">
											<img src="{{asset('front/images/acivirx-400-copy.png')}}" alt="Inventore voluptates velit totam ipsa">
										</a>
									</div>
									<div class="col-md-12">
										<div class="entry-title title-xs">
											<h3 class="text-center"><a href="#">Acivirax 400mg Tablet</a></h3>
										</div>
										<div class="entry-content">
											<a href="#" class="btn btn-infoss btn-sm unique-btn">More</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">WhatsApp</a>
										</div>
									</div>
								</div>
							</div>
							<div class="entry event mb-3 col-lg-6">
								<div class="grid-inner row align-items-center g-0 p-4">
									<div class="col-md-12 mb-md-0">
										<a href="#" class="entry-image">
											<img src="{{asset('front/images/acivirx-400-copy.png')}}" alt="Inventore voluptates velit totam ipsa">
										</a>
									</div>
									<div class="col-md-12 ">
										<div class="entry-title title-xs">
											<h3 class="text-center"><a href="#">Acivirax 400mg Tablet</a></h3>
										</div>
										<div class="entry-content">
											<a href="#" class="btn btn-infoss btn-sm">More</a> <a href="#" class="btn btn-dangerss btn-sm">WhatsApp</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="oc-item row">
							<div class="entry event mb-3 col-lg-6">
								<div class="grid-inner row align-items-center g-0 p-4">
									<div class="col-md-12 mb-md-0">
										<a href="#" class="entry-image">
											<img src="{{asset('front/images/acivirx-400-copy.png')}}" alt="Inventore voluptates velit totam ipsa">
										</a>
									</div>
									<div class="col-md-12">
										<div class="entry-title title-xs">
											<h3 class="text-center"><a href="#">Acivirax 400mg Tablet</a></h3>
										</div>
										<div class="entry-content">
											<a href="#" class="btn btn-infoss btn-sm unique-btn">More</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">WhatsApp</a>
										</div>
									</div>
								</div>
							</div>
							<div class="entry event mb-3 col-lg-6">
								<div class="grid-inner row align-items-center g-0 p-4">
									<div class="col-md-12 mb-md-0">
										<a href="#" class="entry-image">
											<img src="{{asset('front/images/acivirx-400-copy.png')}}" alt="Inventore voluptates velit totam ipsa">
										</a>
									</div>
									<div class="col-md-12 ">
										<div class="entry-title title-xs">
											<h3 class="text-center"><a href="#">Acivirax 400mg Tablet</a></h3>
										</div>
										<div class="entry-content">
											<a href="#" class="btn btn-infoss btn-sm">More</a> <a href="#" class="btn btn-dangerss btn-sm">WhatsApp</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section><!-- #events end -->

	<!-- testimonials
		============================================= -->
		<section id="content" class="testimonials-edit-">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="fslider testimonial testimonial-full " data-animation="fade" data-arrows="false">
						<h3 style="text-align:center;">WHAT PEOPLE SAY</h3>
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-content">
										<p>They contacted us when rooms were available close to our work site. Their rates are always the best and they stand behind their commitment. On one occasion, we had an issue at the time of check-in. It ended up being the hotel had overbooked. We contacted Check In Now and it was immediately resolved, along with courtesy calls to us inquiring about our situation and comfort.</p>
										<div class="xon">
											JIMMY CHIN
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-content">
										<p>Resolution Labs would definitely recommend contacting Check In Now anytime there is a need for accommodations.</br> They will be there for you-guaranteed!</p>
										<div class="xon">
											BILL BRYSON
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #testimonials end -->

<!-- logos
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
					<div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="20" data-nav="false" data-pagi="true" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/1.png')}}" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/2.png')}}" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/3.png')}}" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/4.png')}}" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/5.png')}}" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/6.png')}}" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/7.png')}}" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/8.png')}}" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/9.png')}}" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="{{asset('front/images/clients/10.png')}}" alt="Clients"></a></div>

					</div>
				</div>
			</div>
		</section><!-- #logos end -->
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

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{asset('front/include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('front/include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

	<script src="{{asset('front/include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
	<script src="{{asset('front/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{asset('front/include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script src="{{asset('front/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{asset('front/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script src="{{asset('front/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script src="{{asset('front/include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script src="{{asset('front/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>

	<script>
		var tpj=jQuery;
		var revapi31;
		var $ = jQuery.noConflict();
		
		tpj(document).ready(function() {
            var mainJs= '{{asset('front/include/rs-plugin/js/')}}'+'/';
            console.log(mainJs);
			if(tpj("#rev_slider_679_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_679_1");
			}else{
				revapi31 = tpj("#rev_slider_679_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:mainJs,
					sliderLayout:"fullwidth",
					dottedOverlay:"none",
					delay:16000,
					hideThumbs:200,
					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:5,
					navigation: {
	                    keyboardNavigation: "on",
	                    keyboard_direction: "horizontal",
	                    mouseScrollNavigation: "off",
	                    onHoverStop: "off",
	                    touch: {
	                        touchenabled: "on",
	                        swipe_threshold: 75,
	                        swipe_min_touches: 1,
	                        swipe_direction: "horizontal",
	                        drag_block_vertical: false
	                    },
	                    arrows: {
	                        style: "hades",
	                        enable: true,
	                        hide_onmobile: false,
	                        hide_onleave: false,
	                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
	                        left: {
	                            h_align: "left",
	                            v_align: "center",
	                            h_offset: 10,
	                            v_offset: 0
	                        },
	                        right: {
	                            h_align: "right",
	                            v_align: "center",
	                            h_offset: 10,
	                            v_offset: 0
	                        }
	                    },
	                },
					responsiveLevels:[1140,1024,778,480],
					visibilityLevels:[1140,1024,778,480],
					gridwidth:[1140,1024,778,480],
					gridheight:[700,768,960,720],
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}

            revapi31.on("revolution.slide.onloaded",function (e) {
				setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 200 );
			});

			revapi31.on("revolution.slide.onchange",function (e,data) {
				SEMICOLON.slider.revolutionSliderMenu();
			});
		});	/*ready*/
	</script>

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
			window.location.href = document.location.origin

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
			window.location.href = document.location.origin + "/ar";
		})
		
	</script>

</body>
</html>

	
