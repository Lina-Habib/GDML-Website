@extends('layouts.main_website')


@section('content_body')

 <header class="bg-gradient-dark">
    <div class="page-header min-vh-70" style="background-image: url({{ asset('imgs/bg.jpg') }}); background-size: cover;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white">{{ __('messages.draw.try') }}</h1>
                    <p class="lead mb-4 text-white opacity-8">{{ __('messages.draw.cartesian') }}</p>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
  <section class="py-8">
    <div class="container">
      <div class="row justify-content-center">

        <h1 class="title text-3xl font-bold mb-6 text-center text-gray-800">رسم المعادلات والمتباينات</h1>

        @if(isset($error))
            <div class="error-message mb-6 p-4 bg-red-50 text-red-800 rounded-lg border border-red-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                {{ $error }}
            </div>
        @endif

        <form id="equationForm" action="{{ url('/equations/solve') }}" method="POST" class="mb-6">
            @csrf
            <div class="mb-6">
                <label for="equation1" class="block text-sm font-semibold text-gray-700 mb-2">المعادلة/المتباينة الأولى:</label>
                <div class="input-container">
                    <input type="text" name="equation1" id="equation1" value="{{ old('text', $equation1 ?? '') }}"
                           class="input-field mt-1 block w-full border border-gray-200 rounded-lg py-3 px-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-400 bg-gray-50"
                           placeholder="مثال: y=x+1 أو 2y-5x>=6 أو ٢ص-٥س>=٦">
                    <svg class="clear-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" onclick="document.getElementById('equation1').value = ''; this.style.display = 'none';">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            <div class="mb-6">
                <label for="equation2" class="block text-sm font-semibold text-gray-700 mb-2">المعادلة/المتباينة الثانية:</label>
                <div class="input-container">
                    <input type="text" name="equation2" id="equation2" value="{{ old('text', $equation2 ?? '') }}"
                           class="input-field mt-1 block w-full border border-gray-200 rounded-lg py-3 px-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-400 bg-gray-50"
                           placeholder="مثال: 2x+y=4 أو 4x+y>-4 أو ٤س+ص>-٤">
                    <svg class="clear-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" onclick="document.getElementById('equation2').value = ''; this.style.display = 'none';">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            <button type="submit" class="submit-btn w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 font-semibold text-lg transition-all duration-300">حل ورسم</button>
        </form>
        

        @if(isset($intersection) && !isset($error))
            <div class="mt-6">
                <h2 class="results-title text-2xl font-semibold mb-4 text-gray-800">النتائج</h2>
                <div class="space-y-3">
                    <div class="result-item">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <p class="text-gray-700">المعادلة/المتباينة الأولى: {{ $equation1 }}</p>
                    </div>
                    <div class="result-item">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <p class="text-gray-700">المعادلة/المتباينة الثانية: {{ $equation2 }}</p>
                    </div>
                    @if($intersection['x'] !== null)
                        <div class="intersection-item result-item">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="text-gray-700">نقطة التقاطع: ({{ $intersection['x'] }}, {{ $intersection['y'] }})</p>
                        </div>
                    @else
                        <div class="result-error mb-3 p-3 bg-red-50 text-red-800 rounded-lg border border-red-200 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p>{{ $intersection['message'] }}</p>
                        </div>
                    @endif
                    @if(isset($solutionMessage) && $solutionMessage)
                        <div class="result-error mb-3 p-3 bg-red-50 text-red-800 rounded-lg border border-red-200 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p>{{ $solutionMessage }}</p>
                        </div>
                    @endif
                </div>
                <div class="chart-container mt-6">
                    <div id="equationChart" class="w-full"></div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    console.log('DOM loaded');
                    console.log('Equation 1:', '{{ $equation1 }}');
                    console.log('Equation 2:', '{{ $equation2 }}');
                    console.log('Chart Data:', @json($chartData));

                    const chartDiv = document.getElementById('equationChart');
                    if (!chartDiv) {
                        console.error('Chart div not found');
                        return;
                    }

                    const chartData = @json($chartData);
                    if (!chartData.equation1 || !chartData.equation2) {
                        console.error('بيانات المعادلات غير متاحة');
                        return;
                    }

                    const trace1 = {
                        x: chartData.equation1.map(point => point.x),
                        y: chartData.equation1.map(point => point.y),
                        mode: 'lines',
                        name: 'المعادلة/المتباينة الأولى',
                        line: { color: 'blue', width: 2 }
                    };

                    const trace2 = {
                        x: chartData.equation2.map(point => point.x),
                        y: chartData.equation2.map(point => point.y),
                        mode: 'lines',
                        name: 'المعادلة/المتباينة الثانية',
                        line: { color: 'red', width: 2 }
                    };

                    const solutionRegion = {
                        x: chartData.solutionRegion.map(point => point.x),
                        y: chartData.solutionRegion.map(point => point.y),
                        mode: 'markers',
                        name: 'منطقة الحل (للمتباينات)',
                        marker: { color: 'rgba(0, 255, 0, 0.3)', size: 4 },
                        type: 'scatter'
                    };

                    const intersectionPoint = chartData.intersection.x !== null ? {
                        x: [chartData.intersection.x],
                        y: [chartData.intersection.y],
                        mode: 'markers',
                        name: 'نقطة التقاطع',
                        marker: { color: 'black', size: 10 }
                    } : { x: [], y: [], mode: 'markers', name: '' };

                    const data = [trace1, trace2, solutionRegion, intersectionPoint];

                    const layout = {
                        // title: { text: 'المستوى الديكارتي', x: 0.5, xanchor: 'center' },
                        xaxis: {
                            title: 'المحور (x)',
                            range: [-10, 10],
                            gridcolor: 'rgba(0, 0, 0, 0.1)',
                            zeroline: true,
                            tickmode: 'linear',
                            tick0: -10,
                            dtick: 1
                        },
                        yaxis: {
                            title: 'المحور (y)',
                            range: [-10, 10],
                            gridcolor: 'rgba(0, 0, 0, 0.1)',
                            zeroline: true,
                            tickmode: 'linear',
                            tick0: -10,
                            dtick: 1
                        },
                        showlegend: true,
                        legend: { x: 0.5, xanchor: 'center', y: 1.1, orientation: 'h' },
                        margin: { t: 50, b: 50, l: 50, r: 50 },
                        height: window.innerWidth <= 640 ? 400 : 600,
                        responsive: true
                    };

                    Plotly.newPlot(chartDiv, data, layout);
                });
            </script>
        @endif
      </div>
    </div>
  </section>
</div>

<script>
    document.getElementById('equationForm').addEventListener('submit', function(event) {
        const eq1 = document.getElementById('equation1').value.trim();
        const eq2 = document.getElementById('equation2').value.trim();
        const cleanEq1 = eq1.replace(/[^0-9xyسص+\-\=><≥≤]/g, '');
        const cleanEq2 = eq2.replace(/[^0-9xyسص+\-\=><≥≤]/g, '');
        const validPattern = /^[0-9xyسص+\-\=><≥≤]+$/;

        if (!cleanEq1 || !cleanEq2) {
            event.preventDefault();
            alert('يرجى إدخال كلا المعادلتين/المتباينتين.');
            return;
        }
        if (!validPattern.test(cleanEq1) || !validPattern.test(cleanEq2)) {
            event.preventDefault();
            alert('الإدخال يحتوي على أحرف غير مدعومة. استخدم x، y، س، ص، الأرقام، وعلامات (+, -, =, ≥, ≤, >, <) فقط.');
            return;
        }
    });

    // إظهار/إخفاء أيقونة الحذف بناءً على محتوى الحقل
    document.querySelectorAll('.input-field').forEach(input => {
        const clearIcon = input.nextElementSibling;
        input.addEventListener('input', () => {
            clearIcon.style.display = input.value ? 'block' : 'none';
        });
        // التحقق عند التحميل
        clearIcon.style.display = input.value ? 'block' : 'none';
    });
</script>


@stop