@extends('layouts.gues')
@section('content')

		<!-- Page Title -->
		<section class="page-title" style="background-image:url(images/background/7.jpg)">
			<div class="auto-container">
				<h2>{{ __('app.about_us') }}</h2>
				<ul class="bread-crumb clearfix">
					<li><a href="{{route('welcome')}}">{{ __('app.breadcrumb_home') }}</a></li>
					<li>{{ __('app.breadcrumb_about') }}</li>
				</ul>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- About One -->
		<section class="about-one">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Content Column -->
					<div class="about-one_content col-lg-6 col-md-12 col-sm-12">
						<div class="about-one_content-inner">
							<div class="sec-title">
								<div class="sec-title_title">{{ __('app.about_titl') }}</div>
								<h2 class="sec-title_heading">{!! __('app.about_head') !!}</h2>
								<div class="sec-title_text">{{ __('app.about_texte') }}

								</div>
							</div>

							<!-- About Info Tabs -->
							<div class="about-info-tabs">
								<!-- About Tabs -->
								<div class="about-tabs tabs-box">

									<!-- Tab Btns -->
									<ul class="tab-btns tab-buttons clearfix">
										<li data-tab="#prod-mission" class="tab-btn active-btn">{{ __('app.mission') }}</li>
										<li data-tab="#prod-vision" class="tab-btn">{{ __('app.vision') }}</li>
										<li data-tab="#prod-value" class="tab-btn">{{ __('app.values') }}</li>
									</ul>

									<!-- Tabs Container -->
									<div class="tabs-content">

										<!-- Tab / Active Tab -->
										<div class="tab active-tab" id="prod-mission">
											<div class="content">
												<div class="text">{{ __('app.mission_text') }}</div>
											</div>
										</div>

										<!-- Tab -->
										<div class="tab" id="prod-vision">
											<div class="content">
												<div class="text">{{ __('app.vision_text') }}
												</div>
											</div>
										</div>

										<!-- Tab -->
										<div class="tab" id="prod-value">
											<div class="content">
												<div class="text">{!!__('app.values_text') !!}
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- Image Column -->
					<div class="about-one_image-column-two col-lg-6 col-md-12 col-sm-12">
						<div class="about-one-image-inner-two">
							<div class="about-cicle_layer-two">
								<img src="images/background/pattern-45.png" alt="" />
							</div>
							<div class="about-one_image-two">
								<!-- Counter Column -->
								<div class="about-one_counter-block">
									<div class="dots-layer" style="background-image:url(images/icons/about-dots.png)">
									</div>
									<div class="about-one_counter-number"><span class="odometer" data-count="5"></span>
									</div>
									<div class="about-one_counter-text">{!!__('app.experience') !!}</div>
								</div>
								<img src="images/resource/about-4.jpg" alt="" />

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About One -->

							</div>

						</div>
					</div>

					<!-- Team One -->
				</div>
			</div>
		</section>
		<!-- End Team One -->


		<!-- End Counter One -->

		<!-- Testimonial Three -->
		<section class="testimonial-three">
			<div class="auto-container">
				<div class="row clearfix">


				</div>
			</div>
		</section>
		<!-- End Testimonial Three -->


@endsection
