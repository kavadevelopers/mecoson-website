<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- REQUIRED META TAGS -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- FAVICON -->
		<link rel="icon" type="image/png" href="{{ url('themes/logos/favicon.png') }}">
		<!-- TITLE -->
		<title>{{ isset($_title) ? $_title.' | ':'' }}{{ CommonHelper::setting('app_name') }}</title>
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<!-- BOOTSTRAP MIN CSS --> 
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/bootstrap.min.css') }}">
		<!-- OWL THEME DEFAULT MIN CSS --> 
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/owl.theme.default.min.css') }}">
		<!-- OWL CAROUSEL MIN CSS --> 
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/owl.carousel.min.css') }}">
		<!-- MAGNIFIC POPUP MIN CSS --> 
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/magnific-popup.min.css') }}">
		<!-- ANIMATE MIN CSS --> 
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/animate.min.css') }}">
		<!-- BOXICONS CSS --> 
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/boxicons.min.css') }}"> 
		<!-- FLATICON CSS --> 
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/flaticon.css') }}">
		<!-- MEANMENU MIN CSS -->
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/meanmenu.min.css') }}">
		<!-- NICE SELECT MIN CSS -->
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/nice-select.min.css') }}">
		<!-- ODOMETER MIN CSS-->
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/odometer.min.css') }}">
		<!-- AOS CSS -->
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/aos.css') }}">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/style.css') }}">
		<!-- RESPONSIVE CSS -->
		<link rel="stylesheet" href="{{ url('themes/web/assets/css/responsive.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @include('web.layouts.style')

		@php
			$categories = App\Models\MasterCategories::select('name','id','slug')->where('is_deleted','0')->orderby('sort','asc')->get();
		@endphp
    </head>

    <body>
    	
		<!-- START PRELOADER AREA -->
		<div class="preloader">
			<div class="lds-ripple">
				<lottie-player src="{{ url('themes/lottie/loading.json') }}"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
			</div>
		</div>
		<!-- END PRELOADER AREA -->

		<!-- START HEADER AREA --> 
		<header class="header-area">
			<div class="top-header-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<ul class="heading-left-part">
								<li>
									<i class="bx bx-phone-call"></i>
									<span>Call Us:</span>
									<a href="tel:{{ CommonHelper::setting('web_mobile') }}">{{ CommonHelper::setting('web_mobile') }}</a>, <a href="tel:{{ CommonHelper::setting('web_mobile2') }}">{{ CommonHelper::setting('web_mobile2') }}</a>
								</li>
								<li>
									<i class="bx bx-envelope"></i>
									<span>Email:</span>
									<a href="mailto:{{ CommonHelper::setting('web_email') }}">{{ CommonHelper::setting('web_email') }}</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-6">
							<ul class="heading-right-part">
								@if (CommonHelper::setting('so_facebook_url') != "")
									<li>
										<a href="{{ CommonHelper::setting('so_facebook_url') }}" target="_blank">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>	
								@endif
								@if (CommonHelper::setting('so_instagram_url') != "")
									<li>
										<a href="{{ CommonHelper::setting('so_instagram_url') }}" target="_blank">
											<i class="bx bxl-instagram"></i>
										</a>
									</li>
								@endif
								@if (CommonHelper::setting('so_linkedin_url') != "")
									<li>
										<a href="{{ CommonHelper::setting('so_linkedin_url') }}" target="_blank">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
								@endif
								@if (CommonHelper::setting('so_youtube_url') != "")
									<li>
										<a href="{{ CommonHelper::setting('so_youtube_url') }}" target="_blank">
											<i class="bx bxl-youtube"></i>
										</a>
									</li>
								@endif
								@if (CommonHelper::setting('so_twitter_url') != "")
									<li>
										<a href="{{ CommonHelper::setting('so_twitter_url') }}" target="_blank">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
								@endif
								@if (CommonHelper::setting('so_skype_url') != "")
									<li>
										<a href="{{ CommonHelper::setting('so_skype_url') }}" target="_blank">
											<i class="bx bxl-skype"></i>
										</a>
									</li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="nav-area">
				<div class="navbar-area">
					<div class="main-nav">
						<nav class="navbar navbar-expand-md">
							<div class="container">
								<a class="navbar-brand" href="{{ url('') }}">
									<img src="{{ url('themes/logos/logo-footer.png') }}" alt="Logo">
								</a>
								
								<div class="collapse navbar-collapse mean-menu">
									<ul class="navbar-nav m-auto">
										<li class="nav-item">
											<a href="{{ url('') }}" class="nav-link">
												Home
											</a>
										</li>

										<li class="nav-item">
											<a href="{{ url('about-us') }}" class="nav-link">
												About Us
												<i class="bx bx-plus"></i>
											</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="{{ url('about-us') }}" class="nav-link">
														History & Development 
													</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('mission-vision-values') }}" class="nav-link">
														Mission, Vision & Values
													</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('quality-policy') }}" class="nav-link">
														Quality Policy
													</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('global-presence') }}" class="nav-link">
														Global Presence
													</a>
												</li>
											</ul>
										</li>
										@if(count($categories) > 0)
											<li class="nav-item">
												<a href="{{ url('products') }}" class="nav-link">
													Products
													<i class="bx bx-plus"></i>
												</a>

												<ul class="dropdown-menu">
													@foreach ($categories as $category)
														@php
															$products = App\Models\ProductModel::select('name','id','slug')->where('category',$category->id)->orderby('name','asc');
														@endphp
														<li class="nav-item">
															<a href="{{ url('category/'.$category->slug) }}" class="nav-link">
																{{ $category->name }}
																@if ($products->count() > 0)
																	{{-- <i class="bx bx-plus"></i> --}}
																@endif
															</a>
															@if ($products->count() > 0)
																{{-- <ul class="dropdown-menu">
																	@foreach ($products->get() as $product)
																		<li class="nav-item">
																			<a href="{{ url('product/'.$product->slug) }}" class="nav-link">{{ $product->name }}</a>
																		</li>	
																	@endforeach
																</ul> --}}
															@endif
														</li>	
													@endforeach
												</ul>
											</li>
										@endif

										<li class="nav-item">
											<a href="{{ url('career') }}" class="nav-link">
												Career
												<i class="bx bx-plus"></i>
											</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="{{ url('career') }}" class="nav-link">
														Career with {{ CommonHelper::setting('app_name') }}
													</a>
												</li>
												<li class="nav-item">
													<a href="{{ url('current-jobs') }}" class="nav-link">
														Current Job Openings
													</a>
												</li>
											</ul>
										</li>

										<li class="nav-item">
											<a href="{{ url('downloads') }}" class="nav-link">
												Downloads
											</a>
										</li>

										<li class="nav-item">
											<a href="{{ url('contact-us') }}" class="nav-link">
												Contact Us
											</a>
										</li>
									</ul>

									<!-- Start Other Option -->
									<div class="others-option">
										<div class="get-quote">
											<a href="{{ url('business-enquiry') }}" class="default-btn">
												Business Inquiry
											</a>
										</div>
									</div>
									<!-- End Other Option -->
								</div>
							</div>
						</nav>
					</div>

					<!-- Menu For Mobile Device -->
					<div class="mobile-nav">
						<a href="{{ url('') }}" class="logo">
							<img src="{{ url('themes/logos/logo-footer.png') }}" alt="Logo">
						</a>
					</div>
				</div>
			</div>
		</header>



        @yield('content')



        <!-- START FOOTER TOP AREA -->
		<footer class="footer-top-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-widget">
							<a href="{{ url('') }}">
								<img src="{{ url('themes/logos/logo-footer.png') }}" style="margin-bottom: 0;" alt="Image">
							</a>

							<p>We pursue diversity in our workforce, our markets, and in our services because we recognize that optimum solutions require different backgrounds, new perspectives, and open minds.</p>

							<div class="social-area">
								<ul>
									@if (CommonHelper::setting('so_facebook_url') != "")
										<li>
											<a href="{{ CommonHelper::setting('so_facebook_url') }}" target="_blank">
												<i class="bx bxl-facebook"></i>
											</a>
										</li>	
									@endif
									@if (CommonHelper::setting('so_instagram_url') != "")
										<li>
											<a href="{{ CommonHelper::setting('so_instagram_url') }}" target="_blank">
												<i class="bx bxl-instagram"></i>
											</a>
										</li>
									@endif
									@if (CommonHelper::setting('so_linkedin_url') != "")
										<li>
											<a href="{{ CommonHelper::setting('so_linkedin_url') }}" target="_blank">
												<i class="bx bxl-linkedin"></i>
											</a>
										</li>
									@endif
									@if (CommonHelper::setting('so_youtube_url') != "")
										<li>
											<a href="{{ CommonHelper::setting('so_youtube_url') }}" target="_blank">
												<i class="bx bxl-youtube"></i>
											</a>
										</li>
									@endif
									@if (CommonHelper::setting('so_twitter_url') != "")
										<li>
											<a href="{{ CommonHelper::setting('so_twitter_url') }}" target="_blank">
												<i class="bx bxl-twitter"></i>
											</a>
										</li>
									@endif
									@if (CommonHelper::setting('so_skype_url') != "")
										<li>
											<a href="{{ CommonHelper::setting('so_skype_url') }}" target="_blank">
												<i class="bx bxl-skype"></i>
											</a>
										</li>
									@endif
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-widget">
							<h3>Navigation</h3>

							<ul>
								<li>
									<a href="{{ url('home') }}">
										Home
									</a>
								</li>
								<li>
									<a href="{{ url('about-us') }}">
										About us
									</a>
								</li>
								<li>
									<a href="{{ url('mission-vision-values') }}">
										Vision & Mission
									</a>
								</li>
								<li>
									<a href="{{ url('quality-policy') }}">
										Quality Assurance
									</a>
								</li>
								<li>
									<a href="{{ url('products') }}">
										Products
									</a>
								</li>
								<li>
									<a href="{{ url('downloads') }}">
										Downloads       
									</a>
								</li>
								<li>
									<a href="{{ url('career') }}">
										Career     
									</a>
								</li>
								<li>
									<a href="{{ url('contact-us') }}">
										Contact Us
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-widget">
							<h3>Product Category</h3>
							<ul>
								@foreach ($categories as $category)
									<li>
										<a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a>
									</li>	
								@endforeach
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-widget contact">
							<h3>Get In Touch</h3>

							<ul>
								<li>
									<i class="bx bx-phone-call"></i>
									<span>Contact:</span> 
									<a href="tel:{{ CommonHelper::setting('web_mobile') }}">
										{{ CommonHelper::setting('web_mobile') }}
									</a><br>
									<a href="tel:{{ CommonHelper::setting('web_mobile2') }}">
										{{ CommonHelper::setting('web_mobile2') }}
									</a>
								</li>
								
								<li>
									<i class="bx bx-envelope"></i>
									<span>Email:</span>
									<a href="mailto:{{ CommonHelper::setting('web_email') }}">
										{{ CommonHelper::setting('web_email') }}
									</a>
								</li>
								
								<li>
									<i class="bx bx-location-plus"></i>
									<span>Address:</span> 
									{!! nl2br(CommonHelper::setting('web_address')) !!}
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END FOOTER TOP AREA -->

		<!-- START FOOTER BOTTOM AREA -->
		<footer class="footer-bottom-area">
			<div class="container">
				<div class="copy-right">
					<p>Copyright <i class="bx bx-copyright"></i> {{ date('Y') }} {{ CommonHelper::setting('app_name') }}. All rights reserved. Powered By <a href="https://www.kavadevelopers.com/" target="_blank">Kava Developers</a></p>
				</div>
			</div>
		</footer>
		<!-- END FOOTER BOTTOM AREA -->
		
		<!-- START GO TOP AREA -->
		<div class="go-top">
			<i class='bx bx-chevrons-up'></i>
		</div>
		<!-- END GO TOP AREA -->

        <!-- JQUERY MIN JS -->
        <script src="{{ url('themes/web/assets/js/jquery.min.js') }}"></script>
        <!-- BOOTSTRAP MIN JS -->
        <script src="{{ url('themes/web/assets/js/bootstrap.bundle.min.js') }}"></script>
        <!-- MEANMENU MIN JS -->
		<script src="{{ url('themes/web/assets/js/meanmenu.min.js') }}"></script>
        <!-- WOW MIN JS -->
        <script src="{{ url('themes/web/assets/js/wow.min.js') }}"></script>
        <!-- OWL CAROUSEL MIN JS -->
		<script src="{{ url('themes/web/assets/js/owl.carousel.min.js') }}"></script>
        <!-- OWL MAGNIFIC POPUP MIN JS -->
		<script src="{{ url('themes/web/assets/js/magnific-popup.min.js') }}"></script>
        <!-- NICE SELECT MIN JS -->
		<script src="{{ url('themes/web/assets/js/nice-select.min.js') }}"></script>
		<!-- APPEAR MIN JS --> 
        <script src="{{ url('themes/web/assets/js/appear.min.js') }}"></script>
		<!-- ODOMETER MIN JS --> 
		<script src="{{ url('themes/web/assets/js/odometer.min.js') }}"></script>
		<!-- DATEPICKER MIN JS --> 
		<script src="{{ url('themes/web/assets/js/bootstrap-datepicker.min.js') }}"></script>
		<!-- FORM VALIDATOR MIN JS -->
		<script src="{{ url('themes/web/assets/js/form-validator.min.js') }}"></script>
		<!-- CONTACT JS -->
		<script src="{{ url('themes/web/assets/js/contact-form-script.js') }}"></script>
		<!-- AJAXCHIMP MIN JS -->
		<script src="{{ url('themes/web/assets/js/ajaxchimp.min.js') }}"></script>
		<!-- AOS JS -->
		<script src="{{ url('themes/web/assets/js/aos.js') }}"></script>
        <!-- CUSTOM JS -->
		<script src="{{ url('themes/web/assets/js/custom.js') }}"></script>

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script type="text/javascript" src="{{ url('themes/js/master.js') }}"></script>

        @include('web.layouts.script')

		<script type="text/javascript">
            @if(Session::has('error'))
                notifyF("{{ Session::get('error') }}",'error');
            @endif
            @if(Session::has('success'))
                notifyF("{{ Session::get('success') }}",'msg');
            @endif
        </script>
		<!-- Start of HubSpot Embed Code -->
        <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/39603438.js"></script>
        <!-- End of HubSpot Embed Code -->
    </body>
</html>