@extends('layouts.main_website')


@section('content_body')

  <div class="page-header min-vh-80" style="background-image: url({{ asset('imgs/bg.jpg') }})">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="text-center">
            <h1 class="text-white">
              <span style="color:yellow;">G</span>eometric <span style="color:yellow">D</span>imensional <span style="color:yellow">M</span>obile <span style="color:yellow">L</span>aboratory
            </h1>
            <h4 class="text-white">{{ __('messages.home.h2') }}</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card card-body shadow-xl mx-3 mx-md-6 mt-n6">
    <div class="container">
      <div class="section text-center">
      	<div class="row mt-lg-6 mt-4">
          <div class="col-lg-4 col-md-4 mb-5">
            <div class="card">
              <div class="ps-4 mt-n4">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl">
                  <i class="material-symbols-rounded opacity-10">carpenter</i>
                </div>
              </div>
              <div class="card-body border-radius-lg position-relative overflow-hidden pb-4">
                <h6 class="mt-2">{{ __('messages.home.p1') }}</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="card mb-3">
              <div class="ps-4 mt-n4">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success shadow text-center border-radius-xl">
                  <i class="material-symbols-rounded opacity-10">draw</i>
                </div>
              </div>
              <div class="card-body border-radius-lg position-relative overflow-hidden pb-4">
                <h6 class="mt-2">{{ __('messages.home.p2') }}</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="card mb-3">
              <div class="ps-4 mt-n4">
                <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning shadow text-center border-radius-xl">
                  <i class="material-symbols-rounded opacity-10">extension</i>
                </div>
              </div>
              <div class="card-body border-radius-lg position-relative overflow-hidden pb-4 px-sm-5 ">
                <h6 class="mt-2">{{ __('messages.home.p3') }}</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8z mb-5">
            <div class="card mb-3">
              <div class="ps-4 mt-n4">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info shadow text-center border-radius-xl">
                  <i class="material-symbols-rounded opacity-10">simulation</i>
                </div>
              </div>
              <div class="card-body border-radius-lg position-relative overflow-hidden pb-4">
                <h6 class="mt-2">{{ __('messages.home.p4') }}</h6>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="card mb-3">
              <div class="ps-4 mt-n4">
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger shadow text-center border-radius-xl">
                  <i class="material-symbols-rounded opacity-10">devices</i>
                </div>
              </div>
              <div class="card-body border-radius-lg position-relative overflow-hidden pb-4">
                <h5 class="mt-2">{{ __('messages.home.p5') }}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<section class="my-5 py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
            <div class="front front-background" style="background-image: url({{ asset('imgs/objectives.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
              <div class="card-body py-9 text-center">
                <i class="material-symbols-rounded text-white text-4xl my-5">touch_app</i>
                <h3 class="text-white">{{ __('messages.home.objectives') }}</h3>
              </div>
            </div>
            <div class="back back-background" style="background-image: url({{ asset('imgs/objectives2.jpg') }}); background-size: cover;">
              <div class="card-body pt-9 text-center">
                <h3 class="text-white">{{ __('messages.home.objectives') }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 ms-auto">
        <div class="row justify-content-start">
          <div class="col-md-6">
            <div class="info">
              <i class="material-symbols-rounded text-gradient text-success text-3xl">calculate</i>
              <h5 class="font-weight-bolder mt-3">{{ __('messages.home.obj1') }}</h5>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info">
              <i class="material-symbols-rounded text-gradient text-success text-3xl">carpenter</i>
              <h5 class="font-weight-bolder mt-3">{{ __('messages.home.obj2') }}</h5>
            </div>
          </div>
        </div>

        <div class="row justify-content-start mt-5">
          <div class="col-md-6 mt-3">
            <i class="material-symbols-rounded text-gradient text-success text-3xl">model_training</i>
            <h5 class="font-weight-bolder mt-3">{{ __('messages.home.obj3_add') }}</h5>
            <p class="pe-5">{{ __('messages.home.obj3') }}</p>
          </div>

          <div class="col-md-6 mt-3">
            <div class="info">
              <i class="material-symbols-rounded text-gradient text-success text-3xl">psychology</i>
              <h5 class="font-weight-bolder mt-3">{{ __('messages.home.obj4_add') }}</h5>
              <p class="pe-3">{{ __('messages.home.obj4') }}</p>
            </div>
          </div>
          
          <div class="col-md-6 mt-3">
            <i class="material-symbols-rounded text-gradient text-success text-3xl">carpenter</i>
            <h5 class="font-weight-bolder mt-3">{{ __('messages.home.obj5_add') }}</h5>
            <p class="pe-5">{{ __('messages.home.obj5') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@stop        
