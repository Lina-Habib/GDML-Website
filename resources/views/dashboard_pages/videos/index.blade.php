@extends('layouts.dashboard')


@section('content_body')

<div class="container mx-auto p-6 max-w-5xl">
    <div class="bg-blue-100 shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">إدارة الفيديوهات</h1>
        <div class="flex justify-end mb-4">
            <a href="{{ route('videos.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">إضافة فيديو جديد</a>
        </div>
            
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-blue-200">
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">العنوان</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">الفيديو</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">الإجراءات</th>
                    </tr>
                </thead>
              	<tbody>
                    @foreach ($videos as $video)
                        <tr class="hover:bg-gray-50">
                            <td class="border-t px-4 py-3">{{ $video->title }}</td>
                            <td class="border-t px-4 py-3">
                                <video controls class="w-24 h-24 object-cover rounded">
                                    <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                                </video>
                            </td>
                            <td class="border-t px-4 py-3 flex gap-2">
                                <a href="{{ route('videos.edit', $video) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition duration-200">تعديل</a>
                                <form action="{{ route('videos.destroy', $video) }}" method="POST" onsubmit="return confirm('هل أنت متأكد؟')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition duration-200">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop    