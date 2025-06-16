@extends('layouts.main_website')


@section('content_body')

<section>
    <div class="container">
        <div class="row">
            @foreach ($videos as $index => $video)
                <div class="col-lg-12 mt-6">
                    <div class="row {{ $index % 2 == 0 ? '' : 'flex-row-reverse' }}">
                        <div class="col-lg-6 justify-content-center d-flex flex-column">
                            <div class="card border-radius-lg shadow-lg">
                                <div class="d-block blur-shadow-image">
                                    <div class="video-container">
                                        <video controls class="w-full h-64 object-cover rounded-t-lg">
                                            <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                                            <p class="error">{{ __('messages.imgs&vids.err_video') }}</p>
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 {{ $index % 2 == 0 ? 'ps-lg-5' : 'pe-lg-5' }} justify-content-center d-flex flex-column pt-lg-0 pt-3">
                            <h3 class="text-2xl font-bold text-gray-800">
                                {{ $video->title }}
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('video').forEach(video => {
        video.addEventListener('error', () => {
            const container = video.closest('.video-container');
            container.innerHTML = `<p class="error">خطأ في تحميل الفيديو: ${video.querySelector('source').src}</p>`;
        });
    });
</script>

@stop