@extends('layouts.dashboard')


@section('content_body')

<div class="container mx-auto p-6 max-w-2xl">
    <div class="bg-blue-100 shadow-lg rounded-lg p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">تعديل البطاقة</h1>
        <form action="{{ route('cards.update', $card) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-medium text-lg mb-3">اسم البطاقة</label>
                <input type="text" class="w-full border rounded-lg px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" id="name" name="name" value="{{ old('name', $card->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
    		<div class="mb-6">
                <label for="image" class="block text-gray-700 font-medium text-lg mb-3">صورة البطاقة (اختيار صورة جديدة لاستبدال القديمة)</label>
                <input type="file" class="w-full border rounded-lg px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('image') border-red-500 @enderror" id="image" name="image" accept="image/*">
                @error('image')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
                <div class="mt-3">
                    <img src="{{ asset('storage/' . $card->image_path) }}" alt="{{ $card->name }}" class="w-32 h-32 object-cover rounded">
                </div>
            </div>
            <div class="mb-6">
                <label for="domain" class="block text-gray-700 font-medium text-lg mb-3">المجال</label>
                <input type="text" class="w-full border rounded-lg px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('domain') border-red-500 @enderror" id="domain" name="domain" value="{{ old('domain', $card->domain) }}" required>
                @error('domain')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="range" class="block text-gray-700 font-medium text-lg mb-3">المدى</label>
                <input type="text" class="w-full border rounded-lg px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('range') border-red-500 @enderror" id="range" name="range" value="{{ old('range', $card->range) }}" required>
                @error('range')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="color" class="block text-gray-700 font-medium text-lg mb-3">لون البطاقة</label>
                <select class="w-full border rounded-lg px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('color') border-red-500 @enderror" id="color" name="color" required>
                    <option value="red" {{ old('color', $card->color) == 'red' ? 'selected' : '' }}>أحمر</option>
                    <option value="green" {{ old('color', $card->color) == 'green' ? 'selected' : '' }}>أخضر</option>
                    <option value="blue" {{ old('color', $card->color) == 'blue' ? 'selected' : '' }}>أزرق</option>
                    <option value="yellow" {{ old('color', $card->color) == 'yellow' ? 'selected' : '' }}>أصفر</option>
                    <option value="purple" {{ old('color', $card->color) == 'purple' ? 'selected' : '' }}>بنفسجي</option>
                    <option value="pink" {{ old('color', $card->color) == 'pink' ? 'selected' : '' }}>زهري</option>
                    <option value="gray" {{ old('color', $card->color) == 'gray' ? 'selected' : '' }}>رمادي</option>
                    <option value="indigo" {{ old('color', $card->color) == 'indigo' ? 'selected' : '' }}>نيلي</option>
                </select>
                @error('color')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end gap-3">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg hover:bg-blue-700 transition duration-200">تحديث</button>
                <a href="{{ route('cards.index') }}" class="bg-gray-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-gray-600 transition duration-200">رجوع</a>
            </div>
        </form>
    </div>
</div>

@stop