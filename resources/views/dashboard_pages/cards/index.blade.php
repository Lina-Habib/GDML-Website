@extends('layouts.dashboard')


@section('content_body')

<div class="container mx-auto p-6 max-w-5xl">
    <div class="bg-blue-100 shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">إدارة البطاقات</h1>
        <div class="flex justify-end mb-4">
            <a href="{{ route('cards.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">إضافة بطاقة جديدة</a>
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
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">الاسم</th>
                   	    <th class="px-4 py-3 text-right font-semibold text-gray-700">الصورة</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">المجال</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">المدى</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">اللون</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cards as $card)
                        <tr class="hover:bg-gray-50">
                            <td class="border-t px-4 py-3">{{ $card->name }}</td>
                            <td class="border-t px-4 py-3">
                                <img src="{{ asset('storage/' . $card->image_path) }}" alt="{{ $card->name }}" class="w-24 h-24 object-cover rounded">
                            </td>
                            <td class="border-t px-4 py-3">{{ $card->domain }}</td>
                            <td class="border-t px-4 py-3">{{ $card->range }}</td>
                            <td class="border-t px-4 py-3">
                                <span class="inline-block w-6 h-6 bg-{{ $card->color }}-500 rounded-full"></span>
                                {{ $card->color }}
                            </td>
                            <td class="border-t px-4 py-3 flex gap-2">
                                <a href="{{ route('cards.edit', $card) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition duration-200">تعديل</a>
                                <form action="{{ route('cards.destroy', $card) }}" method="POST" onsubmit="return confirm('هل أنت متأكد؟')">
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