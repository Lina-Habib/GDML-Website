@extends('layouts.main_website')


@section('content_body')

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- كرت 1 - أحمر -->
        <div class="bg-red-100 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
        	<div class="pt-3 pr-3 pl-3">
            	<img src="{{ asset('imgs/images/functions/abs.webp') }}" alt="absolute" class="w-full h-40 object-cover">
            </div>
            <div class="p-4">
                <h2 class="text-lg font-bold text-red-800 mb-2">|x|</h2>
                <p class="text-sm text-red-700 mb-4">{{ __('messages.examples.domain') }} = R</p>
                <p class="text-sm text-red-700 mb-4">{{ __('messages.examples.range') }} = = [0,∞)</p>
                <a href="{{ url('draw_2D') }}" class="block text-center px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">{{ __('messages.examples.try') }}</a>
            </div>
        </div>

        <!-- كرت 2 - أخضر -->
        <div class="bg-green-100 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
        	<div class="pt-3 pr-3 pl-3">
            	<img src="{{ asset('imgs/images/functions/constant.webp') }}" alt="constant" class="w-full h-40 object-cover">
            </div>
            <div class="p-4">
                <h2 class="text-lg font-bold text-green-800 mb-2">C</h2>
                <p class="text-sm text-green-700 mb-4">{{ __('messages.examples.domain') }} = R</p>
                <p class="text-sm text-green-700 mb-4">{{ __('messages.examples.range') }} = {C}</p>
                <a href="{{ url('draw_2D') }}" class="block text-center px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">{{ __('messages.examples.try') }}</a>
            </div>
        </div>

        <!-- كرت 3 - أزرق -->
        <div class="bg-blue-100 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
        	<div class="pt-3 pr-3 pl-3">
            	<img src="{{ asset('imgs/images/functions/cubic.webp') }}" alt="cubic" class="w-full h-40 object-cover">
            </div>
            <div class="p-4">
                <h2 class="text-lg font-bold text-blue-800 mb-2">x³</h2>
                <p class="text-sm text-blue-700 mb-4">{{ __('messages.examples.domain') }} = R</p>
                <p class="text-sm text-blue-700 mb-4">{{ __('messages.examples.range') }} = R</p>
                <a href="{{ url('draw_2D') }}" class="block text-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">{{ __('messages.examples.try') }}</a>
            </div>
        </div>

        <!-- كرت 4 - أصفر -->
        <div class="bg-yellow-100 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
        	<div class="pt-3 pr-3 pl-3">
            	<img src="{{ asset('imgs/images/functions/inverse.webp') }}" alt="inverse" class="w-full h-40 object-cover">
            </div>
            <div class="p-4">
                <h2 class="text-lg font-bold text-yellow-800 mb-2">1/x</h2>
                <p class="text-sm text-yellow-700 mb-4">{{ __('messages.examples.domain') }} = R - {0}</p>
                <p class="text-sm text-yellow-700 mb-4">{{ __('messages.examples.range') }} = R - {0}</p>
                <a href="{{ url('draw_2D') }}" class="block text-center px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition">{{ __('messages.examples.try') }}</a>
            </div>
        </div>

        <!-- كرت 5 - بنفسجي -->
        <div class="bg-purple-100 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
        	<div class="pt-3 pr-3 pl-3">
            	<img src="{{ asset('imgs/images/functions/matching.webp') }}" alt="matching" class="w-full h-40 object-cover">
            </div>
            <div class="p-4">
                <h2 class="text-lg font-bold text-purple-800 mb-2">x</h2>
                <p class="text-sm text-purple-700 mb-4">{{ __('messages.examples.domain') }} = R</p>
                <p class="text-sm text-purple-700 mb-4">{{ __('messages.examples.range') }} = R</p>
                <a href="{{ url('draw_2D') }}" class="block text-center px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition">{{ __('messages.examples.try') }}</a>
            </div>
        </div>

        <!-- كرت 6 - زهري -->
        <div class="bg-pink-100 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
        	<div class="pt-3 pr-3 pl-3">
            	<img src="{{ asset('imgs/images/functions/quadratic.webp') }}" alt="quadratic" class="w-full h-40 object-cover">
            </div>
            <div class="p-4">
                <h2 class="text-lg font-bold text-pink-800 mb-2">x²</h2>
                <p class="text-sm text-pink-700 mb-4">{{ __('messages.examples.domain') }} = R</p>
                <p class="text-sm text-pink-700 mb-4">{{ __('messages.examples.range') }} = [0,∞)</p>
                <a href="{{ url('draw_2D') }}" class="block text-center px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition">{{ __('messages.examples.try') }}</a>
            </div>
        </div>

        <!-- كرت 7 - سماوي -->
        <div class="bg-gray-200 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
        	<div class="pt-3 pr-3 pl-3">
            	<img src="{{ asset('imgs/images/functions/square_root.webp') }}" alt="square root" class="w-full h-40 object-cover">
            </div>
            <div class="p-4">
                <h2 class="text-lg font-bold text-gray-800 mb-2">x√</h2>
                <p class="text-sm text-gray-700 mb-4">{{ __('messages.examples.domain') }} = [0,∞)</p>
                <p class="text-sm text-gray-700 mb-4">{{ __('messages.examples.range') }} = [0,∞)</p>
                <a href="{{ url('draw_2D') }}" class="block text-center px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">{{ __('messages.examples.try') }}</a>
            </div>
        </div>

        <!-- كرت 8 - برتقالي -->
        <div class="bg-indigo-300 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
        	<div class="pt-3 pr-3 pl-3">
            	<img src="{{ asset('imgs/images/functions/step.webp') }}" alt="step" class="w-full h-40 object-cover">
            </div>
            <div class="p-4">
                <h2 class="text-lg font-bold text-indigo-800 mb-2">[x]</h2>
                <p class="text-sm text-indigo-700 mb-4">{{ __('messages.examples.domain') }} = R</p>
                <p class="text-sm text-indigo-700 mb-4">{{ __('messages.examples.range') }} = Z</p>
                <a href="{{ url('draw_2D') }}" class="block text-center px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600 transition">{{ __('messages.examples.try') }}</a>
            </div>
        </div>

    </div>
</div>

@stop