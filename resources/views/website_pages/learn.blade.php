@extends('layouts.main_website')


@section('content_body')

<div class="container mx-auto px-4 py-8">
    @if ($cards->isEmpty())
        <p class="text-center text-gray-600 text-lg">لا توجد بطاقات لعرضها حاليًا.</p>
    @else
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($cards as $card)
            <div class="bg-{{ $card->color }}-100 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                <div class="pt-3 pr-3 pl-3">
                    <img src="{{ asset('storage/' . $card->image_path) }}" alt="{{ $card->name }}" class="w-full h-40 object-cover">
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-bold text-{{ $card->color }}-800 mb-2">{{ $card->name }}</h2>
                    <p class="text-sm text-{{ $card->color }}-700 mb-4">{{ __('messages.learn.domain') }} = {{ $card->domain }}</p>
                    <p class="text-sm text-{{ $card->color }}-700 mb-4">{{ __('messages.learn.range') }} = {{ $card->range }}</p>
                    <a href="{{ url('draw_2D/one_equation') }}" class="block text-center px-4 py-2 bg-{{ $card->color }}-500 text-white rounded-lg hover:bg-{{ $card->color }}-600 transition">{{ __('messages.learn.try') }}</a>
                </div>
            </div>
        @endforeach
    </div>
    @endif
</div>

@stop