@extends('layouts.dashboard')


@section('content_body')

<div class="container mx-auto p-6 max-w-5xl">
    <div class="bg-blue-100 shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">إدارة معارض الصور</h1>
        <div class="flex justify-end mb-4">
            <a href="{{ route('images.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">إضافة معرض جديد</a>
        </div>
            
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-blue-300">
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">العنوان</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">الصور</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $image)
                        <tr class="hover:bg-gray-50">
                            <td class="border-t px-4 py-3">{{ $image->title }}</td>
                            <td class="border-t px-4 py-3">
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($image->paths as $path)
                                        <img src="{{ asset('storage/' . $path) }}" alt="{{ $image->title }}" class="w-24 h-24 object-cover rounded">
                                        @endforeach
                                </div>
                            </td>
                            <td class="border-t px-4 py-3 flex gap-2">
                                <a href="{{ route('images.edit', $image) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition duration-200">تعديل</a>
                                <form action="{{ route('images.destroy', $image) }}" method="POST" onsubmit="return confirm('هل أنت متأكد؟')">
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