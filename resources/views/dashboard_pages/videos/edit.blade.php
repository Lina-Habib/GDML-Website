@extends('layouts.dashboard')


@section('content_body')

<div class="container mx-auto p-6 max-w-2xl">
    <div class="bg-blue-100 shadow-lg rounded-lg p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">تعديل الفيديو</h1>
        <form action="{{ route('videos.update', $video) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="block text-gray-700 font-medium text-lg mb-3">العنوان</label>
                <input type="text" class="w-full border rounded-lg px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror" id="title" name="title" value="{{ old('title', $video->title) }}" required>
                @error('title')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="video" class="block text-gray-700 font-medium text-lg mb-3">الفيديو (اختيار فيديو جديد لاستبدال القديم)</label>
                <input type="file" class="w-full border rounded-lg px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('video') border-red-500 @enderror" id="video" name="video" accept="video/mp4,video/webm,video/ogg">
                @error('video')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
                <div class="mt-3">
                    <video controls class="w-32 h-32 object-cover rounded">
                        <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="flex justify-end gap-3">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg hover:bg-blue-700 transition duration-200">تحديث</button>
                <a href="{{ route('videos.index') }}" class="bg-gray-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-gray-600 transition duration-200">رجوع</a>
            </div>
        </form>
    </div>
</div>

@stop