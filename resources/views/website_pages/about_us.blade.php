@extends('layouts.main_website')


@section('content_body')


<!-- -------- START HEADER 7 w/ text and img ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url({{ asset('imgs/bg2.jpg') }});">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">{{ __('messages.about_us.h1') }}</h1>
            <p class="lead mb-4 text-white opacity-8">{{ __('messages.about_us.h2') }}</p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and img ------- -->

  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="row justify-content-start">
              <h2>
                <i class="material-symbols-rounded" style="font-size: 48px; opacity: 0.6;color:black; margin-left: 10px; position: relative; top: 10px;">auto_stories</i>
                <span style="vertical-align: middle;">{{ __('messages.about_us.address') }}</span>
              </h2>
            </div>

            <div class="row justify-content-start mt-4">
                <p style="margin-bottom: 20px;">
                    {{ __('messages.about_us.p1') }}
                </p>
                <p style="margin-bottom: 20px;">
                    {{ __('messages.about_us.p2') }}
                </p>
                <p style="margin-bottom: 20px;">
                    {{ __('messages.about_us.p3') }}
                </p>
                <p style="margin-bottom: 0;">
                    {{ __('messages.about_us.p4') }}
                </p>
            </div>
          </div>

          <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
            <div class="card">
                <a class="d-block blur-shadow-image" style="width: 100%; height: 100%; display: block;">
                  <img src="{{ asset('imgs/bg3.jpg') }}" class="img-fluid" alt="img" style="width: 100%; height: 100%; object-fit: contain; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Section with info area left & one card right with image -->

  </div>  


@stop