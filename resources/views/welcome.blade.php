@extends('layouts.app')
@section('content')
    <!-- Main Slider -->
    <section class="slider-two">
        <div class="single-item-carousel owl-carousel owl-theme">

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer" style="background-image:url(images/main-slider/download\(7\).jpg)"></div>
                <div class="slider-two_pattern-layer" style="background-image:url(images/main-slider/pattern-1.png)"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
<div class="slider-text-background ">
                            <h1 class="slider-two_heading " >{{ __('app.heading1') }}</h1>
                            <div class="slider-two_text">{{ __('app.text1') }}
                            </div>
</div>
                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                            <a class="btn-style-two theme-btn btn-item" href="{{route('about')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">{{ __('app.button') }}<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">{{ __('app.button') }}<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer" style="background-image:url(images/main-slider/slider10.jpg)">
                </div>
                <div class="slider-two_pattern-layer" style="background-image:url(images/main-slider/pattern-1.png)"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
                            <div class="slider-text-background ">
                            <h1 class="slider-two_heading" >{{ __('app.heading2') }}</h1>
                            <div class="slider-two_text" >{{ __('app.text2') }}
                            </div>
                            </div>
                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-two theme-btn btn-item" href="{{route('about')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">{{ __('app.button') }}<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">{{ __('app.button') }}<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="slider-two_image-layer" style="background-image:url(images/main-slider/slider9.png)">
                </div>
                <div class="slider-two_pattern-layer" style="background-image:url(images/main-slider/pattern-1.png)"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="slider-two-content">
                        <div class="slider-two_inner">
                            <div class="slider-text-background ">
                            <h1 class="slider-two_heading" >{{ __('app.heading3') }}</h1>
                            <div class="slider-two_text">{{ __('app.text3') }}
                            </div>
                            </div>
                            <!-- Button Box -->
                            <div class="slider-two_button-box">
                                <a class="btn-style-two theme-btn btn-item" href="{{route('about')}}">
                                    <div class="btn-wrap">
                                        <span class="text-one">{{ __('app.button') }}<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">{{ __('app.button') }}<i
                                                class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Featured One -->
    <section class="featured-one">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Feature Block One -->
                <div class="feature-block_one">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="#"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="images/icons/feature-1.png" alt="" />
                        </span>
                        <h5 class="feature-block_one-title">{{ __('app.generaliste') }} </h5>
                    </div>
                </div>

                <!-- Feature Block One -->
                <div class="feature-block_one">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="#"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="images/icons/feature-2.png" alt="" />
                        </span>
                        <h5 class="feature-block_one-title">{{ __('app.pediatrique') }}</h5>
                    </div>
                </div>

                <!-- Feature Block One -->
                <div class="feature-block_one">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="#"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="images/icons/feature-3.png" alt="" />
                        </span>
                        <h5 class="feature-block_one-title">{{ __('app.domicile') }}</h5>
                    </div>
                </div>

                <!-- Feature Block One -->
                <div class="feature-block_one">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="#"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="images/icons/feature-4.png" alt="" />
                        </span>
                        <h5 class="feature-block_one-title">{{ __('app.gynecologique') }}</h5>
                    </div>
                </div>

                <!-- Feature Block One -->
                <div class="feature-block_one">
                    <div class="feature-block_one-inner">
                        <a class="overlay-link" href="#"></a>
                        <span class="color-layer"></span>
                        <span class="feature-block_one-icon">
                            <img src="images/icons/feature-5.png" alt="" />
                        </span>
                        <h5 class="feature-block_one-title">{{ __('app.couple') }}</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Featured One -->

    <!-- Clients One -->
    <section class="clients-one">
        <div class="clients-one_pattern" style="background-image:url(images/main-slider/slider6.jpg)"></div>
        <div class="auto-container">

        </div>
    </section>
    <!-- End Clients One -->

    <!-- About Two -->
    <section class="about-two">
        <div class="about-two_pattern-two" style="background-image:url(images/background/pattern-13.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="about-two_pattern-one" style="background-image:url(images/background/pattern-12.png)">
                    </div>
                    <div class="about-two_image">
                        <img src="images/main-slider/slider8.jpg" alt="" />
                        <!-- About One Detail -->
                        <a class="about-two_play lightbox-video fa-solid fa-play fa-fw"
                            href="#">
                            <i class="ripple"></i>
                        </a>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="about-two_content col-lg-6 col-md-12 col-sm-12">
                    <div class="about-two_content-inner">
                        <div class="sec-title_two">
                            <div class="sec-title_two-title">{{ __('app.about_title') }}</div>
                            <h2 class="sec-title_two-heading">{!! __('app.about_heading') !!}</h2>
                        </div>
                        <div class="about-two_text">{{ __('app.about_text') }}</div>
                        <div class="about-two_feature">
                            <div class="">

                            </div>
                        </div>

                        <div class="d-flex flex-wrap">
                            <a class="btn-style-three theme-btn btn-item" href="{{ route('about') }}">
                                <div class="btn-wrap">
                                    <span class="text-one">{{ __('app.about_button') }}<i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    <span class="text-two">{{ __('app.about_button') }}<i
                                            class="fa-solid fa-arrow-right fa-fw"></i></span>
                                </div>
                            </a>

                            <!-- About Phone Box -->
                            <div class="about-phone_box">
                                <span class="about-phone_icon fa-solid fa-phone fa-fw"></span>
                                {{ __('app.phone_text') }}<br>
                                <a class="about-two_phone-number" href="tel:+237 653 33 67 19">+237 653 33 67 19</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Two -->

    <!-- Services One -->
    <section class="services-one">
        <div class="services-one_pattern-layer" style="background-image:url(images/background/pattern-14.png)">
        </div>
        <div class="auto-container">

            <div class="services-one_inner-coontainer">
                <div class="four-item-carousel owl-carousel owl-theme">

                    <!-- Service Block One -->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img src="images/icons/service-8.png"
                                    alt="" /></span>
                            <h5 class="service-block_three-heading">{{ __('app.service1_title') }}</h5>
                            <div class="service-block_three-text">{{ __('app.service1_text') }}</div>
                            <div class="service-block_three-overlay">
                                <div class="service-block_three-color-layer"></div>
                                <span class="service-block_three-icon-two"><img src="images/icons/service-8-1.png"
                                        alt="" /></span>
                                <h5 class="service-block_three-heading alternate"><a
                                        href="{{route('service-detail')}}">{{ __('app.service1_title') }}</a></h5>
                                <a class="service-block_three-learn" href="{{route('service-detail')}}">{{ __('app.learn_more') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One -->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img src="images/icons/service-9.png"
                                    alt="" /></span>
                            <h5 class="service-block_three-heading">{{ __('app.service2_title') }}</h5>
                            <div class="service-block_three-text">{{ __('app.service1_text') }}</div>
                            <div class="service-block_three-overlay">
                                <div class="service-block_three-color-layer"></div>
                                <span class="service-block_three-icon-two"><img src="images/icons/service-9-1.png"
                                        alt="" /></span>
                                <h5 class="service-block_three-heading alternate"><a
                                        href="{{route('service-detail')}}">{{ __('app.service2_title') }}</a></h5>
                                <a class="service-block_three-learn" href="{{route('service-detail')}}">{{ __('app.learn_more') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One -->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img src="images/icons/service-10.png"
                                    alt="" /></span>
                            <h5 class="service-block_three-heading">{{ __('app.service3_title') }}</h5>
                            <div class="service-block_three-text">{{ __('app.service3_text') }}</div>
                            <div class="service-block_three-overlay">
                                <div class="service-block_three-color-layer"></div>
                                <span class="service-block_three-icon-two"><img src="images/icons/service-10-1.png"
                                        alt="" /></span>
                                <h5 class="service-block_three-heading alternate"><a
                                        href="{{route('service-detail')}}"></a>{{ __('app.service3_title') }}</a></h5>
                                <a class="service-block_three-learn" href="{{route('service-detail')}}">{{ __('app.learn_more') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One -->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img src="images/icons/service-11.png"
                                    alt="" /></span>
                            <h5 class="service-block_three-heading">{{ __('app.service4_title') }}</h5>
                            <div class="service-block_three-text">{{ __('app.service4_text') }}

</div>
                            <div class="service-block_three-overlay">
                                <div class="service-block_three-color-layer"></div>
                                <span class="service-block_three-icon-two"><img src="images/icons/service-11-1.png"
                                        alt="" /></span>
                                <h5 class="service-block_three-heading alternate"><a
                                        href="{{route('service-detail')}}">{{ __('app.service4_title') }}</a></h5>
                                <a class="service-block_three-learn" href="{{route('service-detail')}}">{{ __('app.learn_more') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One -->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img src="images/icons/service-8.png"
                                    alt="" /></span>
                            <h5 class="service-block_three-heading">{{ __('app.service5_title') }}</h5>
                            <div class="service-block_three-text">{{ __('app.service5_text') }}</div>
                            <div class="service-block_three-overlay">
                                <div class="service-block_three-color-layer"></div>
                                <span class="service-block_three-icon-two"><img src="images/icons/service-8-1.png"
                                        alt="" /></span>
                                <h5 class="service-block_three-heading alternate"><a
                                        href="{{route('service-detail')}}">{{ __('app.service5_title') }}</a></h5>
                                <a class="service-block_three-learn" href="{{route('service-detail')}}">{{ __('app.learn_more') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One-->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img src="images/icons/service-9.png"
                                    alt="" /></span>
                            <h5 class="service-block_three-heading">{{ __('app.service6_title') }}</h5>
                            <div class="service-block_three-text">{{ __('app.service6_text') }}
</div>
                            <div class="service-block_three-overlay">
                                <div class="service-block_three-color-layer"></div>
                                <span class="service-block_three-icon-two"><img src="images/icons/service-9-1.png"
                                        alt="" /></span>
                                <h5 class="service-block_three-heading alternate"><a
                                        href="{{route('service-detail')}}">{{ __('app.service6_title') }}</a></h5>
                                <a class="service-block_three-learn" href="{{route('service-detail')}}">{{ __('app.learn_more') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One -->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img src="images/icons/service-10.png"
                                    alt="" /></span>
                            <h5 class="service-block_three-heading">{{ __('app.service7_title') }}</h5>
                            <div class="service-block_three-text">{{ __('app.service7_text') }}</div>
                            <div class="service-block_three-overlay">
                                <div class="service-block_three-color-layer"></div>
                                <span class="service-block_three-icon-two"><img src="images/icons/service-10-1.png"
                                        alt="" /></span>
                                <h5 class="service-block_three-heading alternate"><a
                                        href="service-detail.html">{{ __('app.service7_title') }}</a></h5>
                                <a class="service-block_three-learn" href="{{route('service-detail')}}">{{ __('app.learn_more') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One -->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img src="images/icons/service-11.png"
                                    alt="" /></span>
                            <h5 class="service-block_three-heading">{{ __('app.service8_title') }}</h5>
                            <div class="service-block_three-text">{{ __('app.service8_text') }}</div>
                            <div class="service-block_three-overlay">
                                <div class="service-block_three-color-layer"></div>
                                <span class="service-block_three-icon-two"><img src="images/icons/service-11-1.png"
                                        alt="" /></span>
                                <h5 class="service-block_three-heading alternate"><a
                                        href="{{route('service-detail')}}">{{ __('app.service8_title') }}</a></h5>
                                <a class="service-block_three-learn" href="{{route('service-detail')}}">{{ __('app.learn_more') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One -->
                    <div class="service-block_three">
                        <div class="service-block_three-inner">
                            <span class="service-block_three-icon"><img src="images/icons/service-8.png"
                                    alt="" /></span>
                            <h5 class="service-block_three-heading">{{ __('app.service9_title') }}</h5>
                            <div class="service-block_three-text">{{ __('app.service9_text') }}</div>
                            <div class="service-block_three-overlay">
                                <div class="service-block_three-color-layer"></div>
                                <span class="service-block_three-icon-two"><img src="images/icons/service-8-1.png"
                                        alt="" /></span>
                                <h5 class="service-block_three-heading alternate"><a
                                        href="{{route('service-detail')}}">{{ __('app.service9_title') }}</a></h5>
                                <a class="service-block_three-learn" href="{{route('service-detail')}}">{{ __('app.learn_more') }}</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        </div>
        </div>
    </section>
    <!-- End Services One -->


    <!-- Choose One -->
    <section class="choose-one" id="choose-one">
        <div class="choose-one_pattern-layer" style="background-image:url(images/background/pattern-19.png)"></div>
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title_two centered">
                <div class="sec-title_two-title">{{ __('app.choose_section_title') }}</div>
                <h2 class="sec-title_two-heading">{!! __('app.choose_section_heading') !!}</h2>
            </div>

            <!-- Choose Info Tabs -->
            <div class="choose-info-tabs">
                <!-- Choose Tabs -->
                <div class="choose-tabs tabs-box">

                    <!-- Tab Btns -->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#prod-mission" class="tab-btn active-btn">{{ __('app.choose_tab_title') }}</li>

                    </ul>

                    <!-- Tabs Container -->
                    <div class="tabs-content">

                        <!-- Tab / Active Tab -->
                        <div class="tab active-tab" id="prod-mission">
                            <div class="row clearfix">
                                <!-- Image Column -->
                                <div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="choose-one_image-inner">
                                        <div class="choose-one_dotted-layer"
                                            style="background-image:url(images/background/pattern-18.png)"></div>
                                        <div class="choose-one_color-layer"></div>
                                        <div class="choose-one_image">
                                            <img src="images/resource/188810264.webp" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Content Column -->
                                <div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="choose-one_content-inner, fieldset">
                                        @if (session('success'))
                                            <div class="alert alert-success 0.5s">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <form id="appointment-form" role="form"
                                            action="{{ route('appointments.store') }}" method="POST">
                                            @csrf
                                            <div class="row">

                                                <!-- Nom -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">{{ __('app.choose_form_name') }}</label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="name" placeholder="{{ __('app.choose_form_name_placeholder') }}" required>
                                                </div>

                                                <!-- Email -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="email">{{ __('app.choose_form_email') }}</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" placeholder="{{ __('app.choose_form_email_placeholder') }}" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <!-- Date -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="date">{{ __('app.choose_form_date') }}</label>
                                                    <input type="date" name="date" class="form-control" required>
                                                </div>
                                                <!-- Département -->
                                                <div class="col-md-6 mb-3">
               <select name="service_id" required>
                                                        <option value="">{{ __('app.choose_form_service') }}</option>
                                                        @foreach ($services as $service)
                                                            <option value="{{ $service->id }}">{{ $service->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Téléphone -->
                                                <div class="col-md-12 mb-3">
                                                    <label for="telephone">{{ __('app.choose_form_phone') }}</label>
                                                    <input type="tel" class="form-control" id="phone"
                                                        name="phone" placeholder="{{ __('app.choose_phone_placeholder') }}" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <!-- Message -->
                                                <div class="col-md-12 mb-3">
                                                    <label for="message">{{ __('app.choose_form_message') }}</label>
                                                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="{{ __('app.choose_form_message_placeholder') }}"></textarea>
                                                </div>
                                            </div>
                                            <!-- Bouton -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" value="submit" class="btn btn-primary w-100">
                                                       {{ __('app.choose_form_button') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Choose One -->


            </div>

        </div>
    </section>
    <!-- End News One -->
@endsection
