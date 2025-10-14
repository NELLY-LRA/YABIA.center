@extends('layouts.gues')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/main-slider/masque-à-oxygène-38482604.jpg)">
        <div class="auto-container">
            <h2>{{ __('app.page_title') }}</h2>
            <ul class="bread-crumb clearfix">
               <li><a href="{{route('welcome')}}">{{ __('app.breadcrumb_home') }}</a></li>
                <li>{{ __('app.breadcrumb_services') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Service Two -->
    <section class="service-two">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="sec-title_title">{{ __('app.page_title') }}</div>
                <h2 class="sec-title_heading">{{ __('app.section_heading') }}</h2>
            </div>
            <div class="row clearfix">

                <!-- Médecine Générale -->
                <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_two-inner">
                        <div class="service-block_two-image">
                            <img src="images/resource/service-2.jpg" alt="" />
                            <div class="service-block_two-overlay">
                                <div class="service-block_two-icon"><img src="images/icons/service-4.png" alt="" /></div>
                                <h5 class="service-block_two-title">{{ __('app.general_medicine') }}</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#medecine-generale">{{ __('app.general_medicine') }}</a>
                                    </h5>
                                    <div class="service-block_two-text">{{ __('app.general_medicine_text') }}</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#medecine-generale">{{ __('app.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Consultation Prénatale -->
                <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_two-inner">
                        <div class="service-block_two-image">
                            <img src="images/resource/service-3.jpeg" alt="" />
                            <div class="service-block_two-overlay">
                                <div class="service-block_two-icon"><img src="images/icons/service-5.png" alt="" /></div>
                                <h5 class="service-block_two-title">{{ __('app.prenatal_consultation') }}</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#consultation-prenatale">{{ __('app.prenatal_consultation') }}</a>
                                    </h5>
                                    <div class="service-block_two-text">{{ __('app.prenatal_consultation_text') }}</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#consultation-prenatale">{{ __('app.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Laboratoire -->
                <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_two-inner">
                        <div class="service-block_two-image">
                            <img src="images/resource/service-4.jpg" alt="" />
                            <div class="service-block_two-overlay">
                                <div class="service-block_two-icon"><img src="images/icons/service-6.png" alt="" /></div>
                                <h5 class="service-block_two-title">{{ __('app.laboratory') }}</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#laboratoire">{{ __('app.laboratory') }}</a>
                                    </h5>
                                    <div class="service-block_two-text">{{ __('app.laboratory_text') }}</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#laboratoire">{{ __('app.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pédiatrie -->
                <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_two-inner">
                        <div class="service-block_two-image">
                            <img src="images/resource/service-5.jpg" alt="" />
                            <div class="service-block_two-overlay">
                                <div class="service-block_two-icon"><img src="images/icons/service-7.png" alt="" /></div>
                                <h5 class="service-block_two-title">{{ __('app.pediatrics') }}</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#pediatrie">{{ __('app.pediatrics') }}</a>
                                    </h5>
                                    <div class="service-block_two-text">{{ __('app.pediatrics_text') }}</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#pediatrie">{{ __('app.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kinésithérapie -->
                <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_two-inner">
                        <div class="service-block_two-image">
                            <img src="images/resource/service-6.jpg" alt="" />
                            <div class="service-block_two-overlay">
                                <div class="service-block_two-icon"><img src="images/icons/service-31.png" alt="" /></div>
                                <h5 class="service-block_two-title">{{ __('app.physiotherapy') }}</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#kinesitherapie">{{ __('app.physiotherapy') }}</a>
                                    </h5>
                                    <div class="service-block_two-text">{{ __('app.physiotherapy_text') }}</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#kinesitherapie">{{ __('app.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accouchements -->
                <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_two-inner">
                        <div class="service-block_two-image">
                            <img src="images/resource/service-7.jpg" alt="" />
                            <div class="service-block_two-overlay">
                                <div class="service-block_two-icon"><img src="images/icons/service-32.png" alt="" /></div>
                                <h5 class="service-block_two-title">{{ __('app.in_vitro') }}</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#fecondation in vitro">{{ __('app.in_vitro') }}</a>
                                    </h5>
                                    <div class="service-block_two-text">{{ __('app.in_vitro_text') }}</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#fecondation in vitro">{{ __('app.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ORL -->
                <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_two-inner">
                        <div class="service-block_two-image">
                            <img src="images/resource/service-8.jpg" alt="" />
                            <div class="service-block_two-overlay">
                                <div class="service-block_two-icon"><img src="images/icons/service-33.png" alt="" /></div>
                                <h5 class="service-block_two-title">{{ __('app.gynecology') }}</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#gynecologie obstetrique">{{ __('app.gynecology') }}</a>
                                    </h5>
                                    <div class="service-block_two-text">{{ __('app.gynecology_text') }}</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#gynecologie obstetrique">{{ __('app.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chirurgie Generale -->
                <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_two-inner">
                        <div class="service-block_two-image">
                            <img src="images/resource/service-9.jpg" alt="" />
                            <div class="service-block_two-overlay">
                                <div class="service-block_two-icon"><img src="images/icons/service-34.png" alt="" /></div>
                                <h5 class="service-block_two-title">{{ __('app.surgery') }}</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#chirurgie">{{ __('app.surgery') }}</a>
                                    </h5>
                                    <div class="service-block_two-text">{{ __('app.surgery_text') }}</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#chirurgie">{{ __('app.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
