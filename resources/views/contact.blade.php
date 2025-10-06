@extends('layouts.gues')
@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url(images/background/7.jpg)">
    <div class="auto-container">
        <h2>{{ __('app.contact_page') }}</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('welcome') }}">{{ __('app.breadcrumb_home') }}</a></li>
            <li>{{ __('app.breadcrumb_contact') }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Contact One -->
<section class="contact-one" style="background-image:url(images/background/map-1.png)">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <div class="sec-title_title">{{ __('app.contact_section_title') }}</div>
                    <h2 class="sec-title_heading">{!! __('app.contact_section_heading') !!}</h2>
                </div>
                <div class="right-box">
                    <div class="sec-title_text">{{ __('app.contact_section_text') }}</div>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Contact Blocks -->
                    <div class="contact-block">
                        <div class="block-inner">
                            <span class="icon"><img src="images/icons/contact-1.png" alt="" /></span>
                            <strong>{{ __('app.address_label') }}</strong>
                           {!! __('app.contact_address') !!}
                        </div>
                    </div>

                    <div class="contact-block">
                        <div class="block-inner">
                            <span class="icon"><img src="images/icons/contact-2.png" alt="" /></span>
                            <strong>{{ __('app.phone_label') }}</strong>
                            {!! __('app.contact_phone') !!}
                        </div>
                    </div>

                    <div class="contact-block">
                        <div class="block-inner">
                            <span class="icon"><img src="images/icons/contact-3.png" alt="" /></span>
                            <strong>{{ __('app.email_label') }}</strong>
                            {{ __('app.contact_email') }}
                        </div>
                    </div>

                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Success / Error Messages -->
                    @if(session('success'))
    <div id="flash-message" class="alert alert-success auto-hide" role="alert">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div id="error-message" class="alert alert-danger auto-hide" role="alert">
        <ul style="margin:0; padding-left:18px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="{{ route('contact.send') }}">
                            @csrf
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>{{ __('app.form_name') }}</label>
                                    <input type="text" name="name" placeholder="{{ __('app.form_name_placeholder') }}" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>{{ __('app.form_email') }}</label>
                                    <input type="email" name="email" placeholder="{{ __('app.form_email_placeholder') }}" required>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>{{ __('app.form_phone') }}</label>
                                    <input type="text" name="phone" placeholder="{{ __('app.form_phone_placeholder') }}">
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>{{ __('app.form_subject') }}</label>
                                    <input type="text" name="subject" placeholder="{{ __('app.form_subject_placeholder') }}" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>{{ __('app.form_message') }}</label>
                                    <textarea name="message" placeholder="{{ __('app.form_message_placeholder') }}" required></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="btn-style-seven theme-btn" type="submit">
                                        <span class="btn-wrap">
                                            <span class="text-one">{{ __('app.form_submit') }}</span>
                                            <span class="text-two">{{ __('app.form_submit') }}</span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact One -->

<!-- Map One -->
<section class="map-one">
    <div class="map-outer">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s"
            allowfullscreen></iframe>
    </div>
</section>
<!-- End Map One -->

<style>
/* animation / hide */
.auto-hide {
  transition: opacity .5s ease, max-height .5s ease, margin .5s ease, padding .5s ease;
  overflow: hidden;
  opacity: 1;
  max-height: 400px; /* assez grand pour contenir les listes d'erreurs */
}

/* état caché */
.auto-hide.hidden {
  opacity: 0;
  max-height: 0;
  margin: 0 !important;
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // cible tous les éléments qui doivent s'auto-cacher
  const alerts = document.querySelectorAll('.auto-hide');

  if (!alerts.length) return;

  // délai avant de cacher (3000ms = 3s)
  const delay = 5000;

  setTimeout(() => {
    alerts.forEach(el => {
      // ajoute la classe qui déclenche la transition CSS
      el.classList.add('hidden');
    });

    // supprime définitivement après la transition pour éviter espace vide
    setTimeout(() => {
      alerts.forEach(el => el.remove());
    }, 600); // doit être un peu plus long que la durée de transition (.5s)
  }, delay);
});
</script>
@endsection
