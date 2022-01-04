<!DOCTYPE html>
<html dir="rtl" lang="ar">
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
	<title>الرئيسية</title>

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
								
							<li><a href="tel:+201200007010" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text ts-text-ar">+201200007010</span></a></li>
							<li><a href="#" class="si-email"><span class="ts-icon"><i class="icon-line-heart"></i></span><span class="ts-text ts-text-ar">تابعنا</span></a></li>
							<li><a href="mailto:HR@Mashpremiere.net" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text ts-text-ar">HR@Mashpremiere.net</span></a></li>
							</ul>
						<!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto">

						<!-- Top Social
						============================================= -->
						<ul id="top-social">
							<li><a href="https://www.facebook.com/MashPremiere/" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text ts-text-ar">فيسبوك</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text ts-text-ar">تويتر</span></a></li>
							<li class="d-none d-sm-flex"><a href="https://www.youtube.com/channel/UC-y-GnyUg4AKogTqj1TXCMw" class="si-pinterest"><span class="ts-icon"><i class="icon-line-youtube"></i></span><span class="ts-text ts-text-ar">يوتيوب</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text ts-text-ar">انستجرام</span></a></li>
						</ul><!-- #top-social end -->

					</div>

				</div>

			</div>
		</div><!-- #top-bar end -->


				<div class="header-row">

			<!-- Logo
			============================================= -->
			<div id="logo">
				<a href="{{route('front_index_ar')}}" class="standard-logo" data-dark-logo="images/logo-dark.png">المعمل الدوائي</a>
				<a href="{{route('front_index_ar')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png">المعمل الدوائي</a>
			</div><!-- #logo end -->
			
			<div id="primary-menu-trigger">
				<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
			</div>

			<!-- Primary Navigation
			============================================= -->
			<nav class="primary-menu">

				<ul class="menu-container">
					<li class="menu-item">
						<a class="menu-link" href="{{route('front_index_ar')}}"><div>الرئيسية</div></a>
					</li>
					<li class="menu-item">
						<a class="menu-link" href="{{route('front_about_us_ar')}}"><div>معلومات عنا</div></a>
					</li>

					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_products_ar')}}"><div>المنتجات</div></a>
					</li>
					
					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_blogs_ar')}}"><div>المقالات</div></a>
					</li>
				
					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_covid_19_ar')}}"><div>كوفيد-19</div></a>
					</li>

					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_careers_ar')}}"><div>الوظائف</div></a>
					</li>

					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_contactus_ar')}}"><div>اتصل بنا</div></a>
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
							<li  class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="{{asset('front/images/slider/rev/ken-1-thumb.jpg')}}" data-delay="10000"  data-saveperformance="off" data-title="Responsive Design">
								<!-- MAIN IMAGE -->
								<img src="{{asset('front/images/slider/rev/ken-1.jpg')}}"  alt="kenburns1" data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->
								<div dir="ltr">
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
										data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;">أهلاً بك في المعمل الدوائي</div>

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
										data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;">نحن الأفضل فلا تبحث عن آخرون</div>

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
										data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 650px; white-space: normal;">الرواد في هذا المجال بشهادات الجودة المعتمدة</div>

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
										data-endeasing="Power4.easeIn" style="z-index: 3;"><a href="Events.html" class="button button-border button-white button-light button-large button-rounded text-end m-0"><span>تواصل معنا</span> <i class="icon-angle-right"></i></a></div>
									</div>
							</li>
							<!-- SLIDE  -->
							<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="{{asset('front/images/slider/rev/ken-2-thumb.jpg')}}" data-delay="10000"  data-saveperformance="off"  data-title="Unlimited Possibilities">
								<!-- MAIN IMAGE -->
								<img src="{{asset('front/images/slider/rev/ken-2.jpg')}}"  alt="kenburns6" data-bgposition="center bottom" data-bgpositionend="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->
								<div dir="ltr">
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
									</div>
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
				<h2>معلومات عنا</h2>
				<h4>
					المعمل الدوائي من صفوة الشركات الطبية التي يديرها أميز المستشارون في المجال الطبي
					.</h4>
				<p class="lead" style="text-transform: lowercase;">
				 .المعمل الدوائي من الشركات الرائدة في المجال الدوائي في مصر وتطمح لتطوير وتحسين جودة الخدمات لمنطقة الشرق الأوسط وأفريقيا من خلال التصنيع المحلي التطوير الدوائي والريادة في أفكار المجال الدوائي علي مستوي العالم 
				</p>
				<a href="About Us.html" class="btn btn-outline btn-roundeded unique-btn" style="background-color: #273b76;color: #FFF;">للمزيد من المعلومات</a>
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
									<h4>بيان المهمة  </h4>
									</div>
								<p style="padding: 15px;" > تهدف شركة الأدوية الخاصة بنا إلى تحسين نوعية الحياة لمنطقة الشرق الأوسط وشمال إفريقيا بأكملها وإفريقيا ، من خلال التصنيع المحلي وتطوير أحدث الابتكارات في صناعة الأدوية في جميع أنحاء العالم.</p>
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
									<h4>رؤيتنا</h4>
								</div>
								<p style=";padding: 15px;">قيادة صناعة الأدوية في مصر من خلال التغيير والابتكار لتصبح شركة دولية تقدم رعاية صحية أفضل لمزيد من المرضى حول العالم.</p>
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
									<h4>قيمنا</h4>
								</div>
								<p style="padding: 15px;">التركيز على الجودة والحداثة وشغفنا بوضع المريض أولاً هي أهم ركائز فلسفتنا. <br>
								توفير بيئة عمل آمنة ومليئة بالتحديات لجميع أفراد عائلة.<br>
رد الجميل للمجتمع من خلال البدء في مبادرات خيرية تحدث تغييرًا إيجابيًا ملحوظًا.</p>
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
								<h4>لماذا تختارنا</h4>
							</div>
							<p style="padding: 15px;">
							واحدة من أسرع شركات الأدوية نموًا في منطقة الشرق الأوسط وشمال إفريقيا وفقًا لتقارير IQVIA. مكان مثالي للتطوير الوظيفي وفرص النمو مع أكثر من 100 منتج في السوق و 150 منتجًا آخر في خطوط الأنابيب التي تغطي جميع الفئات العلاجية.
							</p>
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
							<h5>تم اختباره وعلاجه من فيروس التهاب الكبد سي</h5>
						</div>

						<div class="col-sm-6 col-lg-3 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-line-users"></i>
							<div class="counter  " style="color: #ed2f2a;"><span data-from="100" data-to="1200" data-refresh-interval="50" data-speed="2500"></span></div>
							<h5>الموظفين </h5>
						</div>

						<div class="col-sm-6 col-lg-3 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-pill"></i>
							<div class="counter  " style="color: #ed2f2a;"><span data-from="100" data-to="110" data-refresh-interval="50" data-speed="3500"></span></div>
							<h5>منتجات</h5>
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
						<h3>المنتجات</h3>
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
											<a href="#" class="btn btn-infoss btn-sm unique-btn">للمزيد</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">واتساب</a>
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
											<a href="#" class="btn btn-infoss btn-sm unique-btn">للمزيد</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">واتساب</a>
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
										<a href="#" class="btn btn-infoss btn-sm unique-btn">للمزيد</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">واتساب</a>
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
										<a href="#" class="btn btn-infoss btn-sm unique-btn">للمزيد</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">واتساب</a>
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
										<a href="#" class="btn btn-infoss btn-sm unique-btn">للمزيد</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">واتساب</a>
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
										<a href="#" class="btn btn-infoss btn-sm unique-btn">للمزيد</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">واتساب</a>
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
										<a href="#" class="btn btn-infoss btn-sm unique-btn">للمزيد</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">واتساب</a>
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
										<a href="#" class="btn btn-infoss btn-sm unique-btn">للمزيد</a> <a href="#" class="btn btn-dangerss btn-sm unique-btn2">واتساب</a>
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
						<h3 style="text-align:center;">آراء المستخدمين</h3>
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-content">
										<p>
										اتصلوا بنا عندما كانت الغرف متاحة بالقرب من موقع عملنا. معدلاتهم هي الأفضل دائمًا وهم يقفون وراء التزامهم. في إحدى المناسبات ، واجهتنا مشكلة في وقت تسجيل الوصول. انتهى الأمر بكون الفندق قد زاد من الحجز. اتصلنا بـ المعمل الدوائي وتم حل المشكلة على الفور ، إلى جانب مكالمات مجاملة لنا للاستفسار عن حالتنا وراحتنا.
										</p>
										<div class="xon">
											حسن سيد
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-content">
										<p>
										اتصلوا بنا عندما كانت الغرف متاحة بالقرب من موقع عملنا. معدلاتهم هي الأفضل دائمًا وهم يقفون وراء التزامهم. في إحدى المناسبات ، واجهتنا مشكلة في وقت تسجيل الوصول. انتهى الأمر بكون الفندق قد زاد من الحجز. اتصلنا بـ المعمل الدوائي وتم حل المشكلة على الفور ، إلى جانب مكالمات مجاملة لنا للاستفسار عن حالتنا وراحتنا.

										</p>
										<div class="xon">
											محسن محمد
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

								<h2> المعمل الدوائي </h2>

								<p style="font-weight: bold;">كن ضيفنا</p>

								<div class="py-2" style="background: url('{{asset('front/images/world-map.png')}}') no-repeat center center;">
									<div class="row col-mb-30">
										<div class="col-6">
											<address class="mb-0">
												<span title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>المقر:</strong></span><br>
												5 شارع حسنين هيكل , مدينة نصر , القاهرة
											</address>
										</div>
										<div class="col-6">
											<span title="Phone Number"><strong>رقم الهاتف:</strong></span> 888-808-0988<br>
											<span title="Email Address"><strong>البريد الإلكتروني:</strong></span> xxxxxxxx@xxx.com<br>
											<span title="Fax"><strong>الدعم:</strong></span> xxxxxxxx@xxx.com
										</div>
									</div>
								</div>
								<ul style="float:right">
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
								</ul>
							</div>

						</div>

						<div class="col-sm-6 col-lg-3">

							<div class="widget clearfix">
								<h4>آخر المقالات  </h4>

								<div class="posts-sm row col-mb-30" id="post-list-footer">
									<div class="entry col-12">
										<div class="grid-inner row">
											<div class="col">
												<div class="entry-title">
													<h4><a href="#">المقالة الأولي</a></h4>
												</div>
												<div>
													<ul>
														<li>10 يوليو 2020</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12">
										<div class="grid-inner row">
											<div class="col">
												<div class="entry-title">
													<h4><a href="#">المقالة الثانية</a></h4>
												</div>
												<div>
													<ul>
														<li>10 يوليو 2020</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12">
										<div class="grid-inner row">
											<div class="col">
												<div class="entry-title">
													<h4><a href="#">المقالة الثالثة</a></h4>
												</div>
												<div>
													<ul>
														<li>10 يوليو 2020</li>
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

								<h4>تواصل معنا</h4>

								<div class="form-result"></div>

								<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form mb-0">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="input-group mx-auto">
										<div class="input-group-text"><i class="icon-user"></i></div>
										<input type="text" class="required form-control" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="الإسم بالكامل" />
									</div>
									<div class="input-group mx-auto">
										<div class="input-group-text"><i class="icon-email2"></i></div>
										<input type="text" class="required form-control email" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="البريد الإلكتروني" />
									</div>
									<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="رسالتك"></textarea>
									<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<input type="hidden" name="prefix" value="quick-contact-form-">
									<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-outline btn-roundeded" style="background-color: #273b76;color: #FFF;" value="ارسل">Send Email</button>

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
						جميع الحقوق محفوظة &copy; لعام 2020 لشركة اب اجينسي	
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

</body>
</html>

	
