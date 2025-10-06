<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>YABIA</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/+237653336719" class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
        class="whatsapp-icon img-fluid">
</a>

<style>
    .whatsapp-float {
        display: flex;
        position: fixed;
        bottom: 60px;
        right: 20px;
        z-index: 1000;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
    }

    /*taille par defaut*/
    .whatsapp-icon {
        width: 80px;
        height: auto;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    /*taille petit ecran*/
    @media(max-width:768px) {
        .whatsapp-icon {
            width: 45px;
        }
    }

    /*taille tres petit ecran*/
    @media(max-width:480px) {
        .whatsapp-icon {
            width: 40px;
        }
    }
</style>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container d-flex flex-wrap">
                        <!-- Info List -->
                        <ul class="info-list">
                            <li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>{!! __('app.phone') !!} </a></li>
                            <li><a href="#"><span
                                        class="icon fa-solid fa-envelope fa-fw"></span>{!! __('app.email') !!} </a>
                            </li>
                            <li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>{!! __('app.address') !!} </a></li>
                        </ul>
                        <!-- Social Box -->
                        <ul class="header-social_box">
                            <li><a href="https://www.facebook.com/profile.php?id=100071289942844"
                                    class="fa-brands fa-facebook-f fa-fw"></a></li>
                            <li><a href="#" class="fa-brands fa-linkedin fa-fw"></a></li>
                            <li><a href="#" class="fa-solid fa-instagram fa-fw"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Lower -->
            <div class="header-lower">

                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-between align-items-center">

                        <!-- Logo Box -->

                        <div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">

                                  <!-- Main Menu -->
                                <nav class="main-menu show navbar-expand-md">
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li><a href="{{ route('welcome') }}">{{ __('app.home') }}</a></li>
                                            <li><a href="{{ route('about') }}">{{ __('app.about') }}</a></li>
                                            <li class="dropdown"><a href="#">{{ __('app.services') }}</a>
                                                <ul>
                                                    <li><a href="{{ route('service') }}">{{ __('app.services') }}</a></li>
                                                    <li><a href="{{ route(name: 'service-detail') }}">{{ __('app.service_detail') }}</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('contact') }}">{{ __('app.contact') }}</a></li>

                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                                <div class="outer-box d-flex align-items-center">




                                    <!-- Mobile Navigation Toggler -->
                                    <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span>
                                    </div>

                                </div>

                            </div>

                    </div>

                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="#" title=""><img src="images/logo1.png" alt=""
                                    title=""></a>
                        </div>

                        <!-- Right Col -->
                        <div class="right-box d-flex align-items-center flex-wrap">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <!-- Main Menu End-->

                            <div class="outer-box d-flex align-items-center">


                                <!-- Social Box -->
                                <ul class="header-social_box">
                                    <li><a href="https://www.facebook.com/profile.php?id=100071289942844"
                                            class="fa-brands fa-facebook-f fa-fw"></a>
                                    </li>
                                    <li><a href="#" class="fa-brands fa-linkedin fa-fw"></a></li>
                                    <li><a href="#" class="fa-solid fa-instagram fa-fw"></a></li>
                                </ul>

                                <!-- Mobile Navigation Toggler -->
                                <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="#"><img src="images/logo1.png" alt=""
                                title=""></a></div>
                    <!-- Search -->
                    <div class="search-box">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="SEARCH HERE"
                                    required>
                                <button type="submit"><span class="icon flaticon-001-loupe"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

        @yield('content')

        <!-- CTA One -->
       <section class="cta-one">
            <div class="auto-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <h3 class="cta-one_heading">{{ __('app.cta_heading') }}</h3>
                    </div>
                    <div class="right-box">
                        <a class="cta-one_btn theme-btn" href="{{ route('contact') }}">{{ __('app.cta_button') }}</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA One -->
        <!-- Footer -->
        <footer class="main-footer" style="background-image:url(images/background/pattern-11.png)">
            <div class="auto-container">
                <!-- Widgets Section -->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!-- Big Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="{{ route('welcome') }}"><img src="images/footer-logo.png"
                                                    alt="" /></a>
                                        </div>
                                        <div class="text"> {{ __('app.footer_text') }}</div>
                                        <a href="{{ route('service') }}" class="theme-btn about-btn">{{ __('app.learn_mor') }}</a>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget newsletter-widget">
                                        <h4>{{ __('app.news') }}</h4>
                                        <div class="text">{{ __('app.follow_us') }}</div>

                                        <!-- Social Box -->
                                        <ul class="social-box">
                                            <li><a href="https://www.facebook.com/profile.php?id=100071289942844"
                                                    class="fa-brands fa-facebook-f fa-fw"></a></li>

                                             <li><a href="#" class="fa-brands fa-linkedin fa-fw"></a></li>
                            <li><a href="#" class="fa-solid fa-instagram fa-fw"></a></li>

                                                  </ul>
                                        <!-- End Social Box -->

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Big Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget contact-widget">
                                        <h4>{{ __('app.info_title') }}</h4>
                                        <ul class="contact-list">
                                            <li><span class="icon fa fa-phone"></span>{{ __('app.location') }}</li>
                                            <li><span class="icon fa fa-envelope"></span>{{ __('app.footer_phone') }}
                                            </li>
                                        </ul>
                                        <div class="timing">
                                           {{ __('app.hours') }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget instagram-widget">
                                        <h4> {{ __('app.gallery') }}</h4>
                                        <div class="widget-content">
                                            <div class="images-outer clearfix">
                                                <!--Image Box-->
                                                <figure class="image-box"><a class="lightbox-image"
                                                        href="images/gallery/project-1.jpg"><img
                                                            src="images/gallery/footer-gallery-thumb-1.jpg"
                                                            alt=""></a>
                                                </figure>
                                                <!--Image Box-->
                                                <figure class="image-box"><a class="lightbox-image"
                                                        href="images/gallery/project-2.jpg"><img
                                                            src="images/gallery/footer-gallery-thumb-2.jpg"
                                                            alt=""></a>
                                                </figure>
                                                <!--Image Box-->
                                                <figure class="image-box"><a class="lightbox-image"
                                                        href="images/gallery/project-3.jpg"><img
                                                            src="images/gallery/footer-gallery-thumb-3.jpg"
                                                            alt=""></a>
                                                </figure>
                                                <!--Image Box-->
                                                <figure class="image-box"><a class="lightbox-image"
                                                        href="images/gallery/project-4.jpg"><img
                                                            src="images/gallery/footer-gallery-thumb-4.jpg"
                                                            alt=""></a>
                                                </figure>
                                                <!--Image Box-->
                                                <figure class="image-box"><a class="lightbox-image"
                                                        href="images/gallery/project-5.jpg"><img
                                                            src="images/gallery/footer-gallery-thumb-5.jpg"
                                                            alt=""></a>
                                                </figure>
                                                <!--Image Box-->
                                                <figure class="image-box"><a class="lightbox-image"
                                                        href="images/gallery/project-6.jpg"><img
                                                            src="images/gallery/footer-gallery-thumb-6.jpg"
                                                            alt=""></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="copyright">2025 &copy;  {{ __('app.copyright') }} <a href="{{ route('about') }}"> {{ __('app.health_center') }}</a></div>
                </div>

            </div>
        </footer>
        <!-- Footer -->

        <!-- Search Popup -->
        <div class="search-popup">
            <div class="color-layer"></div>
            <button class="close-search"><span class="fa-solid fa-power-off fa-fw"></span></button>
            <form method="post" action="blog.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search Here"
                        required="">
                    <button class="fa-solid fa-paper-plane fa-fw" type="submit"></button>
                </div>
            </form>
        </div>
        <!-- End Search Popup -->

    </div>
    <!-- End PageWrapper -->
    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery Validate -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/odometer.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>

    <script src="js/script.js"></script>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

</html>
