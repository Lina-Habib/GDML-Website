<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" itemscope itemtype="http://schema.org/WebPage">

<head>
  <title>{{ __('auth.title') }}</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" sizes="2000x2000" href="{{ asset('imgs/logo2.jpg') }}">
  <link rel="favicon" type="image/jpg" href="{{ asset('imgs/logo2.jpg') }}">

  <!-- @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
  @endif -->

  @include('includes.appCSS')
  @include('includes.appJS')

  
</head>

<body class="sign-in-basic">

	@yield('content_body')

</body>

</html>
