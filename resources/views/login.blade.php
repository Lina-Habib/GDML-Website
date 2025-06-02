@php
    $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';
@endphp

@extends('layouts.auth')

@section('content_body')

<!-- <p>اللغة الحالية: {{ App::getLocale() }}</p> -->

  
  <div class="flex justify-center items-center min-h-screen bg-gradient-to-br from-blue-50 to-blue-100" dir="{{ $dir }}">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <div class="text-center mb-4">
            <img src="{{ asset('imgs/logo.png') }}" alt="Logo" style="max-width: 150px;">
        </div>
        <div class="flex justify-between items-center mb-6">

            


            <h2 class="text-2xl font-bold text-gray-800">
                {{ __('auth.title') }}
            </h2>

            <!-- زر تبديل اللغة -->
            <!-- <a href="{{ route('switch.lang', app()->getLocale() === 'ar' ? 'en' : 'ar') }}"
               class="text-sm text-blue-600 hover:underline">
                {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}
            </a> -->
        </div>

        <form method="POST" action="">
            @csrf

            <div class="mb-4">
                <label for="email" class="block mb-1 text-gray-700">{{ __('auth.email') }}</label>
                <input id="email" type="email" name="email" required autofocus
                       class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1 text-gray-700">{{ __('auth.password') }}</label>
                <input id="password" type="password" name="password" required
                       class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="flex justify-between items-center mb-4">
                <a href="#" class="text-sm text-blue-600 hover:underline">{{ __('auth.forgot') }}</a>
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                {{ __('auth.login') }}
            </button>
        </form>
    </div>
</div>

@stop