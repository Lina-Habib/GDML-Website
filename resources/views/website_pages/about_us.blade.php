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

          <!-- Hero Section -->
          <section class="container mx-auto pt-2 pb-16 px-4">
            <div class="flex flex-col md:flex-row items-center">
              <div class="md:w-1/2 text-right">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">{{ __('messages.main.about') }}</h2>
                  <p class="text-lg text-gray-600 mb-6">
                    {{ __('messages.about_us.about') }}
                  </p>
              </div>
              <div class="md:w-1/2 mt-2 md:mt-0 mr-6">
                <div class="card">
                  <a class="d-block blur-shadow-image" style="width: 100%; height: 100%; display: block;">
                    <img src="{{ asset('imgs/bg3.jpg') }}" class="rounded-lg shadow-lg w-3/4" alt="img" style="width: 100%; height: 100%; object-fit: contain; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" loading="lazy">
                  </a>
                </div>
              </div>
            </div>
          </section>

          <!-- Vision & Mission Section -->
          <section class="bg-gray-200 py-16" >
            <div class="container mx-auto px-4">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="text-right">
                  <h3 class="text-2xl font-bold text-gray-800 mb-4">
                    {{ __('messages.about_us.our_vision') }}
                  </h3>
                  <p class="text-gray-600">
                    {{ __('messages.about_us.vision') }}
                  </p>
                </div>
                <div class="text-right">
                  <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ __('messages.about_us.our_msg') }}</h3>
                    <p class="text-gray-600">
                      {{ __('messages.about_us.msg') }}
                    </p>
                </div>
              </div>
            </div>
          </section>

          <!-- Our Story Section -->
          <section class="container mx-auto py-16 px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-4">
              {{ __('messages.about_us.our_story') }}
            </h2>
            <p class="text-lg text-gray-600 text-center max-w-3xl mx-auto">
              {{ __('messages.about_us.story') }}
            </p>
          </section>

          <!-- Team Section -->
          <section class="bg-gray-200 py-16">
            <div class="container mx-auto px-4">
              <h2 class="text-3xl font-bold text-gray-800 text-center mb-5">
                {{ __('messages.about_us.our_team') }}
              </h2>
              <p class="text-lg text-gray-600 text-center max-w-3xl mx-auto">
                {{ __('messages.about_us.team') }}
              </p>
            </div>
          </section>

          <!-- Goals Section -->
          <section class="container mx-auto py-16 px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-5">
              {{ __('messages.about_us.our_goals') }}
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
              <div class="text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                  {{ __('messages.about_us.add_goal1') }}
                </h3>
                <p class="text-gray-600">{{ __('messages.about_us.goal1') }}</p>
              </div>
              <div class="text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                  {{ __('messages.about_us.add_goal2') }}
                </h3>
                <p class="text-gray-600">{{ __('messages.about_us.goal2') }}</p>
              </div>
              <div class="text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                  {{ __('messages.about_us.add_goal3') }}
                </h3>
                <p class="text-gray-600">{{ __('messages.about_us.goal3') }}</p>
              </div>
              <div class="text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                  {{ __('messages.about_us.add_goal4') }}
                </h3>
                <p class="text-gray-600">{{ __('messages.about_us.goal4') }}</p>
              </div>
              <div class="text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                  {{ __('messages.about_us.add_goal5') }}
                </h3>
                <p class="text-gray-600">{{ __('messages.about_us.goal5') }}</p>
              </div>
              <div class="text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                  {{ __('messages.about_us.add_goal6') }}
                </h3>
                <p class="text-gray-600">{{ __('messages.about_us.goal6') }}</p>
              </div>
              <div class="text-center">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                  {{ __('messages.about_us.add_goal7') }}
                </h3>
                <p class="text-gray-600">{{ __('messages.about_us.goal7') }}</p>
              </div>
            </div>
          </section>

          
        </div>
      </div>
    </section>
    <!-- END Section with info area left & one card right with image -->

  </div>  


@stop