<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Booking Tour</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Styles-->
	<link rel="stylesheet" href="{{ mix('/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ mix('/assets/css/style2.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/bookingForm.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap-datepicker.min.css') }}">
	<link rel="stylesheet" href="{{ mix('/assets/css/superfish.css') }}">
	<link rel="stylesheet" href="{{ mix('/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ "/bower_components/font-awesome/css/all.css" }}">

	<link rel="stylesheet" href="{{ "/bower_components/icomoon-bower/style.css" }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/effects.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/cs-select.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/cs-skin-border.css') }}">

	<!-- JavaScript-->
	<script src="{{ asset("bower_components/jquery/dist/jquery.min.js") }}"></script>
	<script src="{{ mix('/assets/js/all-js.js') }}"></script>
	<script src="{{ mix('/assets/js/main.js') }}"></script>
	<script src="{{ mix('/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ mix('/assets/js/modernizr-2.6.2.min.js') }}"></script>
</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Travel</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active"><a href="{{ route('home') }}">{{ trans('messages.home') }}</a></li>
								<li>
									<a href="{{ route('tours.index') }}" class="fh5co-sub-ddown">{{
										trans('messages.destinations') }}</a>
									<ul class="fh5co-sub-menu">
										<li><a href="#">{{ trans('messages.north') }}</a></li>
										<li><a href="#">{{ trans('messages.central') }}</a></li>
										<li><a href="#">{{ trans('messages.south') }}</a></li>
									</ul>
								</li>
								<li><a href="#">{{ trans('messages.blog') }}</a></li>
								<li><a href="#">{{ trans('messages.contact') }}</a></li>
								@if (Route::has('login'))
									@auth
									<li><a href="{{ url('/dashboard') }}"
										class="text-sm text-gray-700 underline">Dashboard</a></li>
									@else
									<li><a href="{{ route('login') }}"
										class="text-sm text-gray-700 underline">{{ trans('messages.signin') }}</a></li>

									@if (Route::has('register'))
									<li><a href="{{ route('register') }}"
										class="ml-4 text-sm text-gray-700 underline">{{ trans('messages.signup') }}</a></li>
									@endif
									@endauth
								@endif
								<li class="nav-item-dropdown">
									<a href="#" class="fh5co-sub-ddown"><i class="fas fa-globe-americas"></i></a>
									<ul class="fh5co-sub-menu">
										<li>
											<a href="{{route('language',['en'])}}">
												<img src="{{ asset('assets/images/flag/us-icon.jpg') }}" width="25" height="25" alt="">
												English (US)
											</a>
										</li>
										<li>
											<a href="{{route('language',['vi'])}}">
												<img src="{{ asset('assets/images/flag/vietnamese.png') }}" width="25" height="25" alt="">
												Vietnamese
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		<div class="container">
			@if (session('success'))
				<div class="alert alert-success">
					<i class="fa fa-thumbs-up"></i>
					<h2>{{session('success')}}</h2>
				</div>
    		@endif
		</div>

		<!-- end:header-top -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active">
											<a href="#" aria-controls="Tours" role="tab" data-toggle="tab">{{
												trans('messages.find_tour') }}</a>
										</li>
									</ul>
									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="flights">
											<div class="row">
												<div class="col-xs-12 col-xs-6 mt">
													<div class="input-field">
														<label for="destination">{{ trans('messages.destination')
															}}:</label>
														<input type="text" class="form-control" id="from-place"
															placeholder="DaNang" />
													</div>
												</div>
												<div class="col-sm-12 mt">
													<section>
														<label for="category">{{ trans('messages.category') }}:</label>
														<select class="cs-select cs-skin-border">
															<option value="leisure" disabled selected>{{
																trans('messages.leisure') }}</option>
															<option value="adventure">{{ trans('messages.adventure') }}
															</option>
															<option value="diving">{{ trans('messages.diving') }}
															</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-start">{{ trans('messages.when') }}:</label>
														<input type="text" class="form-control" id="date-start"
															placeholder="mm/dd/yyyy" />
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="duration">{{ trans('messages.duration') }}:</label>
														<input type="text" class="form-control" id="from-place"
															placeholder="Any" />
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="min_price">{{ trans('messages.min_price')
															}}:</label>
														<input type="text" class="form-control" id="from-place"
															placeholder="00.0" />
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="max_price">{{ trans('messages.max_price')
															}}:</label>
														<input type="text" class="form-control" id="from-place"
															placeholder="00.0" />
													</div>
												</div>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block"
														value="{{ trans('messages.search') }}">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<p>{{ trans('messages.tour_travel') }}</p>
									<h2>{{ trans('messages.summer') }}</h2>
									<h3>{{ trans('messages.promotion') }}</h3>
									<span class="price">$199</span>
									<p><a class="btn btn-primary btn-lg" href="#">{{ trans('messages.get_started')
											}}</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@yield('content')
	<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>{{ trans('messages.happy_clients') }}</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>"{{ trans('messages.feedback1') }}"</p>
						</blockquote>
						<p class="author">Thao Vy</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>"{{ trans('messages.feedback2') }}"</p>
						</blockquote>
						<p class="author">Sun</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>{{ trans('messages.feedback3') }}</p>
						</blockquote>
						<p class="author">Nami</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div id="footer">
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>{{ trans('messages.about_travel') }}</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>{{ trans('messages.top_tour') }}</h3>
						<ul>
							<li><a href="#">Manila</a></li>
							<li><a href="#">Dubai</a></li>
							<li><a href="#">Bangkok</a></li>
							<li><a href="#">Tokyo</a></li>
							<li><a href="#">New York</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>{{ trans('messages.interest') }}</h3>
						<ul>
							<li><a href="#">Beaches</a></li>
							<li><a href="#">Family Travel</a></li>
							<li><a href="#">Budget Travel</a></li>
							<li><a href="#">Food &amp; Drink</a></li>
							<li><a href="#">Honeymoon and Romance</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>{{ trans('messages.best_places') }}</h3>
						<ul>
							<li><a href="#">Boracay Beach</a></li>
							<li><a href="#">Dubai</a></li>
							<li><a href="#">Singapore</a></li>
							<li><a href="#">Hongkong</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>{{ trans('messages.affordable') }}</h3>
						<ul>
							<li><a href="#">Food &amp; Drink</a></li>
							<li><a href="#">Fare Flights</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p class="fh5co-social-icons">
							<a href="#"><i class="icon-twitter2"></i></a>
							<a href="#"><i class="icon-facebook2"></i></a>
							<a href="#"><i class="icon-instagram"></i></a>
							<a href="#"><i class="icon-dribbble2"></i></a>
							<a href="#"><i class="icon-youtube"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>
