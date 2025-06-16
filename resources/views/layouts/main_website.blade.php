<!doctype html>
<html dir="rtl" lang="ar" itemscope itemtype="http://schema.org/WebPage">

<head>
  <title>{{ __('messages.main.app_name') }}</title>

  <meta name="keywords" content="تعلم الرياضيات التفاعلي، محاكاة هندسية ثلاثية الأبعاد، رسم المعادلات الرياضية، تعليم STEM، منصة تعليمية تفاعلية، محاكاة الأشكال الهندسية، تعلم الأشكال ثنائية الأبعاد، مختبر هندسي متنقل، تعليم الرياضيات للأطفال، تطبيقات تعليمية ذكية, Interactive math learning, 3D geometry simulation, Equation graphing tool, STEM education platform, Interactive educational platform, Geometric shape simulation, 2D shape learning, Mobile engineering lab, Math education for kids, Smart educational applications">


  <meta name="description" content="منصة تفاعلية لتعلم الرياضيات والهندسة من خلال محاكاة ثنائية وثلاثية الأبعاد، تساعد الطلاب على فهم المعادلات والأشكال بطريقة ممتعة وعملية. Interactive platform for learning math and geometry through 2D and 3D simulations.">


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="icon" sizes="2000x2000" href="{{ asset('imgs/logo2.jpg') }}">
  <link rel="favicon" type="image/jpg" href="{{ asset('imgs/logo2.jpg') }}">

  @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
  @endif

  @include('includes.appCSS')
  @include('includes.appJS')

  
</head>

<body>

  <!-- Navbar Transparent -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #6aa6e9;">
        <div class="container">
            <img style="height: 40px; width: 80px; border-radius: 45%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" src="{{ asset('imgs/logo2.png') }}" alt="logo" loading="lazy">
            <a class="navbar-brand text-dark" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.5); color:black; font-weight: bold;" href="{{ url('login') }}" rel="tooltip" title="Designed and Coded by Basel Alherbawi" data-placement="bottom">
                GDML
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <!-- Home -->
                    <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
                        <a href="{{ url('/') }}" class="nav-link nav-link-custom ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuHome" aria-expanded="false">
                            <i class="material-icons opacity-6 ms-1 text-md">home</i>
                            {{ __('messages.main.home') }}
                        </a>
                    </li>

                    <!-- Photos -->
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a href="{{ url('photos') }}" class="nav-link nav-link-custom ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPhotos" aria-expanded="false">
                            <i class="material-icons opacity-6 ms-1 text-md">photo_library</i>
                            {{ __('messages.main.photos') }}
                        </a>
                    </li>

                    <!-- Videos -->
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a href="{{ url('vid') }}" class="nav-link nav-link-custom ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuVideos" aria-expanded="false">
                            <i class="material-icons opacity-6 ms-1 text-md">video_library</i>
                            {{ __('messages.main.videos') }}
                        </a>
                    </li>

                    <!-- Examples -->
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a href="{{ url('learn') }}" class="nav-link nav-link-custom ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuVideos" aria-expanded="false">
                            <i class="material-icons opacity-6 ms-1 text-md">article</i>
                            {{ __('messages.main.learn') }}
                        </a>
                    </li>

                    <!-- Draw with us -->
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link nav-link-custom d-flex align-items-center dropdown-toggle" id="dropdownMenuDraw" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons opacity-6 ms-1 text-md">draw</i>
                            {{ __('messages.main.draw') }}
                        </a>
                        <div class="dropdown-menu ms-n3 dropdown-md p-2 border-radius-lg mt-n1" aria-labelledby="dropdownMenuDraw">
                            <h6 class="dropdown-header text-dark font-semibold d-flex align-items-center px-1 pt-1">
                                {{ __('messages.main.using') }}
                            </h6>
                            <div class="d-none d-lg-block">
                                <ul class="list-unstyled mb-0">
                                    <li class="dropdown-submenu position-relative">
                                        <a class="dropdown-item border-radius-md d-flex justify-content-between align-items-center cursor-pointer">
                                            <span class="text-secondary">{{ __('messages.main.2d') }}</span>
                                            <i class="material-icons opacity-6 text-sm ms-1">chevron_left</i>
                                        </a>
                                        <ul class="dropdown-menu border-radius-lg">
                                            <li><a class="dropdown-item border-radius-md" href="{{ url('draw_2D/one_equation') }}">
                                                {{ __('messages.main.2d_oneEquation') }}</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="{{ url('draw_2D/two_equations') }}">
                                                {{ __('messages.main.2d_twoEquations') }}</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('draw_3D') }}" class="dropdown-item border-radius-md">
                                            <span class="text-secondary">{{ __('messages.main.3d') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-block d-lg-none">
                                <div class="accordion" id="accordion2DMenu">
                                    <div class="accordion-item border-0">
                                        <h2 class="accordion-header" id="heading2D">
                                            <button class="accordion-button collapsed p-2 bg-transparent text-secondary shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2D" aria-expanded="false" aria-controls="collapse2D">
                                                {{ __('messages.main.2d') }}
                                                <i class="material-icons opacity-6 text-sm me-1">keyboard_arrow_down</i>
                                            </button>
                                        </h2>
                                        <div id="collapse2D" class="accordion-collapse collapse" aria-labelledby="heading2D" data-bs-parent="#accordion2DMenu">
                                            <div class="accordion-body py-1">
                                                <a href="{{ url('draw_2D/one_equation') }}" class="dropdown-item border-radius-md">{{ __('messages.main.2d_oneEquation') }}</a>
                                                <a href="{{ url('draw_2D/two_equations') }}" class="dropdown-item border-radius-md">{{ __('messages.main.2d_twoEquations') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('draw_3D') }}" class="dropdown-item border-radius-md mt-1">
                                    <span class="text-secondary">{{ __('messages.main.3d') }}</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- About Us -->
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a href="{{ url('about_us') }}" class="nav-link nav-link-custom ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuAbout" aria-expanded="false">
                            <i class="material-icons opacity-6 ms-1 text-md">contact_page</i>
                            {{ __('messages.main.about') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content_body')

    <!-- Open window button -->
    <button class="open-feedback-btn">+</button>

    <!-- Pop-up window -->
    <div class="feedback-popup" id="feedbackPopup">
        <h3>{{ __('messages.main.share_opinion') }}</h3>
        <div id="successMessage" style="display:none; color: green; margin-bottom: 10px;">
            {{ __('messages.main.comment_added') }}
        </div>
        <input type="text" id="userName" placeholder="{{ __('messages.main.name') }}">
        <input type="email" id="userEmail" placeholder="{{ __('messages.main.email') }}">
        <textarea id="feedbackText" placeholder="{{ __('messages.main.comment') }}"></textarea>
        <div class="buttons">
            <button class="submit-btn" onclick="submitFeedback()">إرسال</button>
            <button class="close-btn" onclick="toggleFeedbackPopup()">إغلاق</button>
        </div>
        <div class="feedback-list" id="feedbackList">
            <!-- Comments will appear here -->
        </div>
    </div>

    <script>
        console.log('Script is loading...');

        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM fully loaded');

            window.toggleFeedbackPopup = function() {
                const popup = document.getElementById('feedbackPopup');
                if (popup) {
                    popup.classList.toggle('active');
                    console.log('Toggling popup', { classList: popup.classList });
                } else {
                    console.error('Popup element not found!');
                }
            };

            const openButton = document.querySelector('.open-feedback-btn');
            if (openButton) {
                openButton.addEventListener('click', window.toggleFeedbackPopup);
            } else {
                console.error('Open feedback button not found!');
            }

            window.submitFeedback = function() {
                const feedbackText = document.getElementById('feedbackText').value.trim();
                const userName = document.getElementById('userName').value.trim() || (window.translations?.unknown || 'غير معروف');
                const userEmail = document.getElementById('userEmail').value.trim();

                if (!feedbackText) {
                    alert(window.translations?.err_enter_comment || 'يرجى إدخال تعليق');
                    return;
                }
                if (userEmail && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(userEmail)) {
                    alert(window.translations?.err_invalid_email || 'يرجى إدخال بريد إلكتروني صحيح');
                    return;
                }

                fetch('/feedback', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        name: userName,
                        email: userEmail,
                        content: feedbackText
                    })
                })
                .then(response => {
                    if (!response.ok) throw new Error('Network response was not ok: ' + response.status);
                    return response.json();
                })
                .then(data => {
                    console.log('Fetch success:', data);
                    if (data.message) {
                        document.getElementById('successMessage').style.display = 'block';
                        setTimeout(() => {
                            document.getElementById('feedbackText').value = '';
                            document.getElementById('userName').value = '';
                            document.getElementById('userEmail').value = '';
                            document.getElementById('successMessage').style.display = 'none';
                            window.toggleFeedbackPopup();
                            fetchFeedbacks();
                        }, 2000);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert(window.translations?.error_sending || 'حدث خطأ أثناء الإرسال');
                });
            };

            function fetchFeedbacks() {
                fetch('/feedbacks')
                    .then(response => {
                        if (!response.ok) throw new Error('Failed to fetch feedbacks');
                        return response.json();
                    })
                    .then(data => {
                        const feedbackList = document.getElementById('feedbackList');
                        feedbackList.innerHTML = '';
                        data.forEach(feedback => {
                            const feedbackItem = document.createElement('div');
                            feedbackItem.className = 'feedback-item';
                            feedbackItem.innerHTML = `
                                <p class="name">${feedback.name}</p>
                                <p>${feedback.content}</p>
                                <p class="date">${new Date(feedback.created_at).toLocaleString('ar-EG')}</p>
                            `;
                            feedbackList.appendChild(feedbackItem);
                        });
                    })
                    .catch(error => console.error('Error fetching feedbacks:', error));
            }

            window.onload = function() {
                fetchFeedbacks();
            };
        });
    </script>

    <!---------FOOTER------------>
    <footer class="footer pt-3 mt-3" style="background-color: #6aa6e9; color: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mx-auto" style="margin-top: 50px; display: flex; flex-direction: column; align-items: center;">
                        <a href="{{ url('/') }}">
                            <img style="height: 60px; width: 70px; border-radius: 45%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" src="{{ asset('imgs/logo2.png') }}" alt="main_logo" loading="lazy">
                        </a>
                        <h6 class="font-weight-bolder mb-4" style="margin-top: 10px;">GDML</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-dark my-4 text-sm font-weight-normal">
                            All rights reserved. Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> GDML by <a href="{{ url('login') }}">Basel Alherbawi</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('#accordion2DMenu .accordion-button').forEach(button => {
                button.addEventListener('click', function (event) {
                    event.stopPropagation();
                });
            });

            document.querySelectorAll('.dropdown-submenu').forEach((submenu, index) => {
                submenu.addEventListener('mouseenter', function () {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    if (dropdownMenu) {
                        dropdownMenu.classList.add('show');
                        dropdownMenu.style.setProperty('right', '100%', 'important');
                        dropdownMenu.style.setProperty('left', 'auto', 'important');
                        const computedStyle = window.getComputedStyle(dropdownMenu);
                        console.log(`Submenu ${index} shown:`, {
                            left: computedStyle.left,
                            right: computedStyle.right,
                            display: computedStyle.display
                        });
                        if (computedStyle.display === 'none') {
                            console.warn(`Submenu ${index} is hidden despite show class`);
                        }
                    } else {
                        console.error(`Dropdown menu not found in submenu ${index}`, submenu);
                    }
                });
                submenu.addEventListener('mouseleave', function () {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    if (dropdownMenu) {
                        dropdownMenu.classList.remove('show');
                    }
                });
            });

            if (!document.documentElement.getAttribute('dir')) {
                console.warn('HTML element does not have dir attribute. Consider adding dir="rtl" for proper submenu positioning.');
            }
        });
    </script>

</body>

</html>