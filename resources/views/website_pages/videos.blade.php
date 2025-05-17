@extends('layouts.main_website')


@section('content_body')

<section class="py-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 justify-content-center d-flex flex-column">
                        <div class="card border-radius-lg">
                            <div class="d-block blur-shadow-image">
                                <div class="video-container">
                                    <video controls>
                                        <source src="{{ asset('vids/vid1.webm') }}" type="video/webm">
                                        <p class="error">{{ __('messages.imgs&vids.err_video') }}</p>
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 justify-content-center d-flex flex-column ps-lg-5 pt-lg-0 pt-3">
                        <h3>
                            {{ __('messages.imgs&vids.add2') }}
                        </h3>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</section>

<script>
    document.querySelectorAll('video').forEach(video => {
        video.addEventListener('error', () => {
            const container = video.closest('.video-container');
            container.innerHTML = `<p class="error">Video loading error: ${video.querySelector('source').src}</p>`;
        });
    });
</script>

@stop