@extends('layouts.gues')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/main-slider/masque-à-oxygène-38482604.jpg)">
        <div class="auto-container">
            <h2>Nos Services</h2>
            <ul class="bread-crumb clearfix">
               <li><a href="{{route('welcome')}}">Accueil</a></li>
                <li>Services</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Service Two -->
    <section class="service-two">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="sec-title_title">Nos Services</div>
                <h2 class="sec-title_heading"> Spécialités </h2>
            </div>
            <div class="row clearfix">

                <!-- Médecine Générale -->
                <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_two-inner">
                        <div class="service-block_two-image">
                            <img src="images/resource/service-2.jpg" alt="" />
                            <div class="service-block_two-overlay">
                                <div class="service-block_two-icon"><img src="images/icons/service-4.png" alt="" /></div>
                                <h5 class="service-block_two-title">Médecine Générale</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#medecine-generale">Médecine Générale</a>
                                    </h5>
                                    <div class="service-block_two-text">La Clinique offre des soins primaires...</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#medecine-generale">Read more</a>
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
                                <h5 class="service-block_two-title">Consultation Prénatale</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#consultation-prenatale">Consultation Prénatale</a>
                                    </h5>
                                    <div class="service-block_two-text">Nos consultations prénatales assurent un suivi médical complet...</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#consultation-prenatale">Read more</a>
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
                                <h5 class="service-block_two-title">Laboratoire</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#laboratoire">Laboratoire</a>
                                    </h5>
                                    <div class="service-block_two-text">Le laboratoire de la Clinique YABIA offre des services complets...</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#laboratoire">Read more</a>
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
                                <h5 class="service-block_two-title">Pédiatrie</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#pediatrie">Pédiatrie</a>
                                    </h5>
                                    <div class="service-block_two-text">Soins spécialisés pour les bébés et enfants...</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#pediatrie">Read more</a>
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
                                <h5 class="service-block_two-title">Kinésithérapie</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#kinesitherapie">Kinésithérapie</a>
                                    </h5>
                                    <div class="service-block_two-text">Récupération de mobilité et bien-être...</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#kinesitherapie">Read more</a>
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
                                <h5 class="service-block_two-title">Fecondation in vitro</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#fecondation in vitro">Fecondation in vitro</a>
                                    </h5>
                                    <div class="service-block_two-text">La fécondation in vitro (FIV) est une technique de procréation ...</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#fecondation in vitro">Read more</a>
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
                                <h5 class="service-block_two-title">Gynecologie obstetrique</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#gynecologie obstetrique">Gynecologie obstetrique</a>
                                    </h5>
                                    <div class="service-block_two-text">Notre service de gynécologie-obstétrique accompagne les femmes à toutes les ...</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#gynecologie obstetrique">Read more</a>
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
                                <h5 class="service-block_two-title">Chirurgie Generale</h5>
                            </div>
                            <div class="service-block_two-overlay-two">
                                <div class="service-two_overlay-content">
                                    <h5 class="service-block_two-title">
                                        <a href="{{ route('service-detail') }}#chirurgie">Chirurgie Generale</a>
                                    </h5>
                                    <div class="service-block_two-text">Notre service de chirurgie générale prend en charge les...</div>
                                    <a class="service-block_two-more" href="{{ route('service-detail') }}#chirurgie">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
