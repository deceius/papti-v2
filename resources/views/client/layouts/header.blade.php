<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Playfair+Display:700,700i,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/assets/style.css" type="text/css" />
	<link rel="stylesheet" href="/assets/css/dark.css" type="text/css" />

	<link rel="stylesheet" href="/assets/css/interior-design.css" type="text/css" />
	<link rel="stylesheet" href="/assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/assets/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/assets/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="/assets/css/fonts.css" type="text/css" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="/assets/include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/assets/include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="/assets/include/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!-- Document Title
	============================================= -->
	<title>PAPTI</title>

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
        .carousel-control-next{
            filter: invert(100%);
        }
        .carousel-control-prev /*, .carousel-indicators */ {
            filter: invert(100%);
        }


	</style>

</head>

<body class="stretched">


	<div class="body-overlay"></div>
	<div id="side-panel">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget clearfix">




				<h4>Contact Us</h4>

				<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

					<div class="form-process">
						<div class="css3-spinner">
							<div class="css3-spinner-scaler"></div>
						</div>
					</div>

					<div class="col-md-12 form-group">
						<input placeholder="Full Name" type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
					</div>

					<div class="col-md-12 form-group">
						<input placeholder="E-mail" type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
					</div>

					<div class="clear"></div>

					<div class="col-12 form-group">
						<input placeholder="Phone No." type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
					</div>
                    <div class="col-12 form-group">
                        <label for="template-contactform-service">Inquiry Item</label>
                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                            <option value="">-- Select One --</option>
                            <option value="About our Products">About our Products</option>
                            <option value="Recruitment / Hiring">Recruitment / Hiring</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
					<div class="col-12 form-group">
						<label class="nott" for="template-contactform-message">Message <small>*</small></label>
						<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
					</div>

					<div class="col-12 form-group d-none">
						<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
					</div>

					<div class="col-12 form-group align-text-right">
						<button class="button button-rounded button-large m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
					</div>

					<input type="hidden" name="prefix" value="template-contactform-">

				</form>

			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="header-size-md " data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-0">
							<a  href="{{ url('/') }}" class="standard-logo"><img src="/assets/images/papti/papti-logo.png" alt="Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">
							<div id="side-panel-trigger" style="padding-left: 4px;">
								<a href="{{  url('/jp') }}" class="d-none d-lg-block text-dark"><i class="icon-line-globe"></i>&nbsp;JP</a>
							</div><!-- #top-search end -->

								|&nbsp;
								<div id="side-panel-trigger"  class=" side-panel-trigger">
									<a href="#" class="d-none d-lg-block text-dark"><i class="icon-comment2"></i></a>
								</div><!-- #top-search end -->


						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="{{ url('/') }}"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('/en/about') }}"><div>About</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('/en/product') }}"><div>Products</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('/en/technology') }}"><div>Technology</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('/en/careers') }}"><div>Recruitment</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('/en/contact') }}"><div>Contact</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->


        @yield('content')

</body>
</html>
