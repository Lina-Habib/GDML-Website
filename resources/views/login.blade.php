@php
    $dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';
@endphp

@extends('layouts.auth')

@section('content_body')

<!-- <p>اللغة الحالية: {{ App::getLocale() }}</p> -->

<div class="flex justify-center items-center min-h-screen bg-white" dir="{{ $dir }}">
    <div class="bg-blue-100 p-6 rounded-2xl shadow-lg w-full max-w-sm">
        <div class="flex justify-center mb-0.5" style="margin-top: 0px;">
            <img src="{{ asset('imgs/logo.png') }}" alt="Logo" style="max-width: 120px;">
        </div>
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-xl font-bold text-blue-800">
                {{ __('auth.title') }}
            </h2>
        </div>

        <form method="POST" action="">
            @csrf

            <div class="mb-3">
                <label for="email" class="block mb-1 text-gray-700">{{ __('auth.email') }}</label>
                <input id="email" type="email" name="email" required autofocus
                       class="w-full border rounded-lg px-3 py-1.5 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-3">
                <label for="password" class="block mb-1 text-gray-700">{{ __('auth.password') }}</label>
                <input id="password" type="password" name="password" required
                       class="w-full border rounded-lg px-3 py-1.5 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="flex justify-between items-center mb-3">
                <a href="#" class="text-sm text-blue-600 hover:underline">{{ __('auth.forgot') }}</a>
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 text-white py-1.5 rounded-lg hover:bg-blue-700 transition duration-200">
                {{ __('auth.login') }}
            </button>
        </form>
    </div>
</div>


@stop

