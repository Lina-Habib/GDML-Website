<!doctype html>
<html dir="rtl" lang="ar" itemscope itemtype="http://schema.org/WebPage">

<head>
  <title>{{ __('messages.main.app_name') }}</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #f7ef97;">
    <div class="container">
      <img style="height: 40px; width: 80px; border-radius: 45%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" src="{{ asset('imgs/logo2.jpg') }}" alt="logo">
      <span style="margin-left: 5px;"></span>
      <a class="navbar-brand  text-dark " style="text-shadow: 1px 1px 5px rgba(0,0,0,0.5); color:black; font-weight: bold;" href="{{ url('home') }}" rel="tooltip" title="Designed and Coded by Basel Alherbawi" data-placement="bottom" >
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
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a  href="{{ URL('home') }}" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.5); color: #5f615d; font-weight: bold;" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages2"  aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">home</i>
              {{ __('messages.main.home') }}
            </a>
          </li>

          <li class="nav-item dropdown dropdown-hover mx-2">
            <a href="{{ URL('photos') }}" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.5); color: #5f615d; font-weight: bold; " class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks"  aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">photo_library</i>
              {{ __('messages.main.photos') }}
            </a>
          </li>

          <li class="nav-item dropdown dropdown-hover mx-2">
            <a href="{{ URL('videos') }}" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.5); color: #5f615d; font-weight: bold; " class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">video_library</i>
              {{ __('messages.main.videos') }}
            </a>
          </li>

          <!-- <li class="nav-item dropdown dropdown-hover mx-2">
            <a href="{{ URL('examples') }}" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.5); color: #5f615d; font-weight: bold; " class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs"  aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">article</i>
              Examples
            </a>
          </li> -->

          <li class="nav-item dropdown dropdown-hover mx-2">
            <a style="text-shadow: 1px 1px 5px rgba(0,0,0,0.5); color:#5f615d; font-weight: bold; " class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs"  aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">draw</i>
              {{ __('messages.main.draw') }}
              <img src="{{ asset('imgs/down-arrow-dark.png') }}" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-block d-none">
            </a>
            <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  {{ __('messages.main.using') }}
                </h6>
                <a href="{{ URL('draw_2D') }}" class="dropdown-item border-radius-md">
                  <span>{{ __('messages.main.2d') }}</span>
                </a>
                <a href="{{ URL('draw_3D') }}" class="dropdown-item border-radius-md">
                  <span>{{ __('messages.main.3d') }}</span>
                </a>
              </div>
            </div>

          </li>

          <li class="nav-item dropdown dropdown-hover mx-2">
            <a href="{{ URL('about_us') }}" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.5); color: #5f615d; font-weight: bold; " class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs"  aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">contact_page</i>
              {{ __('messages.main.about') }}
            </a>
          </li>
        </ul>
      </div>

     <!--  <div class="language-selector">
          <a href="{{ route('language.change', 'ar') }}" class="lang-link">العربية</a>
          <a href="{{ route('language.change', 'en') }}" class="lang-link">English</a>
      </div> -->
      
    </div>
  </nav>
  <!-- End Navbar -->


  @yield('content_body')

    <!-- Open window button -->
    <button class="open-feedback-btn" onclick="toggleFeedbackPopup()">+</button>

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
            <button class="submit-btn" onclick="submitFeedback()">{{ __('messages.main.send') }}</button>
            <button class="close-btn" onclick="toggleFeedbackPopup()">{{ __('messages.main.close') }}</button>
        </div>
        <div class="feedback-list" id="feedbackList">
            <!-- Comments will appear here -->
        </div>
    </div>

    <script>
        // Retrieve comments from localStorage or create an empty array
        let feedbackArray = JSON.parse(localStorage.getItem('feedbacks')) || [];

        // Show comments when the page loads
        renderFeedback();

        // Open/close the window
        function toggleFeedbackPopup() {
            const popup = document.getElementById('feedbackPopup');
            popup.classList.toggle('active');
        }

        // Add and view a comment
        function submitFeedback() {
            const feedbackText = document.getElementById('feedbackText').value;
            const userName = document.getElementById('userName').value || '{{ __("messages.main.unknown") }}';
            const userEmail = document.getElementById('userEmail').value;

            if (!feedbackText.trim()) {
                alert('{{ __("messages.main.err_enter_comment") }}');
                return;
            }

            // Create a comment object
            const feedback = {
                content: feedbackText,
                name: userName,
                email: userEmail,
                date: new Date().toLocaleString('ar-EG')
            };

            // Add comment to array
            feedbackArray.push(feedback);

            // Save comments to localStorage
            localStorage.setItem('feedbacks', JSON.stringify(feedbackArray));

            // Update the comments list
            renderFeedback();

            // Display success message and clean fields
            document.getElementById('successMessage').style.display = 'block';
            setTimeout(() => {
                document.getElementById('feedbackText').value = '';
                document.getElementById('userName').value = '';
                document.getElementById('userEmail').value = '';
                document.getElementById('successMessage').style.display = 'none';
                toggleFeedbackPopup();
            }, 2000);
        }

        // Show comments in the list
        function renderFeedback() {
            const feedbackList = document.getElementById('feedbackList');
            feedbackList.innerHTML = '';

            feedbackArray.forEach((feedback, index) => {
                const feedbackItem = document.createElement('div');
                feedbackItem.className = 'feedback-item';
                feedbackItem.innerHTML = `
                    <p class="name">${feedback.name}</p>
                    <p>${feedback.content}</p>
                    <p class="date">${feedback.date}</p>
                    <button class="delete-btn" onclick="deleteFeedback(${index})">{{ __("messages.main.delete") }}</button>
                `;
                feedbackList.appendChild(feedbackItem);
            });
        }

        // Delete a comment
        function deleteFeedback(index) {
            feedbackArray.splice(index, 1);
            localStorage.setItem('feedbacks', JSON.stringify(feedbackArray));
            renderFeedback();
        }
    </script>

  <!---------FOOTER------------>
  <footer class="footer pt-3 mt-3" style="background-color: #f7ef97; color: #ffffff;">
    <div class="container">
      <div class=" row">
        <div class="col-12">
          <div class="text-center" style="margin-top: 50px;">
            <a href="{{ url('home') }}">
              <img style="height: 60px; width: 70px; border-radius: 45%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" src="{{ asset('imgs/logo2.jpg') }}"alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4" style="margin-top: 10px;">GDML</h6>
          </div>
          <!-- 
          <div class="text-center" style="display: flex; justify-content: center; align-items: center;">
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"  onmouseover="this.style.transform='scale(1.2)'; this.style.transition='transform 0.3s ease';" 
                   onmouseout="this.style.transform='scale(1)';"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"  onmouseover="this.style.transform='scale(1.2)'; this.style.transition='transform 0.3s ease';" 
                   onmouseout="this.style.transform='scale(1)';"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"  onmouseover="this.style.transform='scale(1.2)'; this.style.transition='transform 0.3s ease';" 
                   onmouseout="this.style.transform='scale(1)';"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"  onmouseover="this.style.transform='scale(1.2)'; this.style.transition='transform 0.3s ease';" 
                   onmouseout="this.style.transform='scale(1)';"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"  onmouseover="this.style.transform='scale(1.2)'; this.style.transition='transform 0.3s ease';" 
                   onmouseout="this.style.transform='scale(1)';"></i>
                </a>
              </li>
            </ul>
          </div> -->
        </div>
        
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> GDML by <a href="https://www.creative-tim.com" target="_blank">Basel Alherbawi</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>



</body>

</html>