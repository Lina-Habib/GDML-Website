@extends('layouts.dashboard')


@section('content_body')

<div class="container mx-auto p-6 max-w-5xl">
    <div class="bg-blue-100 shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">إدارة التعليقات</h1>

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
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">البريد الإلكتروني</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">التعليق</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">التاريخ</th>
                        <th class="px-4 py-3 text-right font-semibold text-gray-700">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($feedbacks as $feedback)
                        <tr class="hover:bg-gray-50">
                            <td class="border-t px-4 py-3">{{ $feedback->name }}</td>
                            <td class="border-t px-4 py-3">{{ $feedback->email }}</td>
                            <td class="border-t px-4 py-3">{{ $feedback->content }}</td>
                            <td class="border-t px-4 py-3">{{ $feedback->created_at->format('Y-m-d H:i:s') }}</td>
                            <td class="border-t px-4 py-3">
                                <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد؟')">
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