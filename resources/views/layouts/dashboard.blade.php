<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="2000x2000" href="{{ asset('imgs/logo2.jpg') }}">
    <link rel="favicon" type="image/jpg" href="{{ asset('imgs/logo2.jpg') }}">
    <title>لوحة التحكم</title>

    @include('includes.dashboardCSS')
  	@include('includes.dashboardJS')

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <h4 class="text-blue-800 mb-0">لوحة التحكم</h4>
                    <div class="toggle-sidebar" onclick="toggleSidebar()">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
                <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i><span> الرئيسية</span></a>
                <a href="{{ route('images.index') }}"><i class="fas fa-image"></i><span> الصور</span></a>
                <a href="{{ route('videos.index') }}"><i class="fas fa-video"></i><span> الفيديوهات</span></a>
                <a href="{{ route('cards.index') }}"><i class="fas fa-book-open"></i><span> البطاقات التعليمية</span></a>
                <a href="{{ route('feedbacks.index') }}"><i class="fas fa-envelope"></i><span> الرسائل</span></a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="sidebar-link">
                        <i class="fas fa-sign-out-alt"></i><span> تسجيل الخروج</span>
                    </button>
                </form>
            </nav>

            <!-- Main Content -->
            <main class="main-content" id="main-content">

            	@yield('content_body')

            	
            </main>
        </div>
    </div>


</body>
</html>