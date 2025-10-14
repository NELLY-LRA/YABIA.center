@extends('layouts.gues')
@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url(images/background/7.jpg)">
    <div class="auto-container">
        <h2>{{ __('app.service_detail') }}</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{route('welcome')}}">{{ __('app.breadcrumb_home') }}</a></li>
            <li>{{ __('app.page_title') }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Sidebar Side -->
            <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">

                <!-- Bloc Médecine Générale -->
                <div class="service-block wow fadeInUp" id="medecine-generale" data-wow-delay="0ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-stethoscope"></i> {{ __('app.general_medicine_title') }}</h3>
                    <p>{{ __('app.general_medicine_intro') }}</p>

                    <h4>{{ __('app.general_medicine_conditions.diabetes') }}</h4>
                    <p>
{{ __('app.general_medicine_intro1') }}</p>
                    <h4>{{ __('app.general_medicine_conditions.hiv') }}</h4>
                    <p>
{{ __('app.general_medicine_intro2') }}</p>
                    <p>{!! __('app.general_medicine_privacy') !!}</p>

                    <h4>{{ __('app.general_medicine_women') }}</h4>
                    <ul>{!!__('app.general_medicine_intro3') !!}

                    </ul>

                    <h4>{{ __('app.general_medicine_men') }}</h4>
                    <ul>{{ __('app.general_medicine_intro4') }}

                    </ul>
                </div>
                <!-- Fin Médecine Générale -->

                <!-- Bloc Pédiatrie -->
                <div class="service-block wow fadeInUp" id="pediatrie" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-baby"></i>{{ __('app.pediatrics_title') }}</h3>
                    <h4>{{ __('app.pediatrics_title1') }}</h4>
                    <p>{{ __('app.pediatrics_intro') }}</p>

                    <h4>{{ __('app.pediatrics_title2') }}</h4>
                    <p>{{ __('app.pediatrics_intro1') }}</p>
                </div>
                <!-- Fin Pédiatrie -->

                <!-- Bloc Consultation Prénatale -->
                <div class="service-block wow fadeInUp" id="consultation-prenatale" data-wow-delay="400ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-heartbeat"></i> {{ __('app.prenatal_title') }}</h3>
                    <p>{{ __('app.prenatal_intro') }}</p>
                    <ul>{!! __('app.prenatal_intro1') !!}

                    </ul>
                    <p>{!! __('app.prenatal_intro2') !!}</p>
                </div>
                <!-- Fin Consultation Prénatale -->

                <!-- Bloc Fecondation in vitro -->
                <div class="service-block wow fadeInUp" id="fecondation in vitro" data-wow-delay="600ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-person-pregnant"></i> {{ __('app.fiv_title') }}</h3>
                  <p>
{{ __('app.fiv_intro') }}
</p>
<p>{{ __('app.fiv_intro1') }}</p>
<ul>{!! __('app.fiv_intro2') !!}

</ul>
{!! __('app.fiv_intro3') !!}

</div>
                <!-- Fin Accouchements -->
            </div>
            <!-- End Sidebar Side -->

            <!-- Content Side -->
            <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">

                <!-- Bloc Petite Chirurgie -->
                <div class="service-block wow fadeInUp" id="chirurgie" data-wow-delay="0ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-scalpel"></i>{{ __('app.surgery_title') }}</h3>
                    <p>
{{ __('app.surgery_intro') }}
</p>
<p>{{ __('app.surgery_intro1') }}</p>
<ul>{!! __('app.surgery_intro2') !!}

</ul>
{!! __('app.surgery_intro3') !!}

                    <p>{!! __('app.surgery_intro4') !!}
</p>
                </div>
                <!-- Fin Petite Chirurgie -->

                <!-- Bloc Gynecologie obstetrique -->
                <div class="service-block wow fadeInUp" id="gynecologie obstetrique" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-ear-listen"></i> {{ __('app.gynecology_title') }}</h3>
                   <p>{{ __('app.gynecology_intro') }}</p>
<ul>{!! __('app.gynecology_intro1') !!}

</ul>
{!! __('app.gynecology_intro2') !!}

            </div>
                <!-- Fin ORL -->

                <!-- Bloc Kinésithérapie -->
                <div class="service-block wow fadeInUp" id="kinesitherapie" data-wow-delay="400ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-dumbbell"></i> {{ __('app.kinesitherapy_title') }}</h3>
                    <p>{{ __('app.kinesitherapy_intro') }}
                           </p>
                    <ul>{!! __('app.kinesitherapy_intro1') !!}

                    </ul>
                    <p>{!! __('app.kinesitherapy_intro2') !!}</p>
                    <p>{!! __('app.kinesitherapy_intro3') !!}</p>
                </div>
                <!-- Fin Kinésithérapie -->

                <!-- Bloc Échographie -->
                <div class="service-block wow fadeInUp" id="echographie" data-wow-delay="600ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-wave-square"></i> {{ __('app.ultrasound_title') }}</h3>
                    <p> {{ __('app.ultrasound_intro') }}
                           </p>
                    <ul> {!! __('app.ultrasound_intro1') !!}

                    </ul>
                    <p> {!! __('app.ultrasound_intro2') !!}</p>
                </div>
                <!-- Fin Échographie -->

                <!-- Bloc Laboratoire -->
                <div class="service-block wow fadeInUp" id="laboratoire" data-wow-delay="800ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-vials"></i>{{ __('app.laboratory_title') }}</h3>
                    <p>{{ __('app.laboratory_intro') }}
                          </p>
                    <h4>{{ __('app.laboratory_title1') }}</h4>
                    <ul>{!!__('app.laboratory_intro1') !!}

                    </ul>
                    <p>{{ __('app.laboratory_intro2') }}
                        </p>
                    <p>{{ __('app.laboratory_intro3') }}
                      </p>
                </div>
                <!-- Fin Laboratoire -->

            </div>
            <!-- End Content Side -->

        </div>
    </div>
</div>
<!-- End Sidebar Page Container -->

<!-- CSS Déco -->
<style>
.service-block {
    background: #fff;
    border-left: 5px solid #0d6efd;
    padding: 25px;
    margin-bottom: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease-in-out;
}
.service-block:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}
.service-block h3 {
    color: #0d6efd;
    font-weight: 600;
    margin-bottom: 15px;
}
.service-block h3 i {
    color: #ffc107;
    margin-right: 10px;
}
</style>

@endsection
