<!-- CSS for langs-->
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="preload"> -->

<!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons|family=Inter:300,400,500,600,700,900" rel="preload" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="preload">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" rel="preload">
  <!-- Material Kit CSS -->
  <link href="{{ asset('css/material-kit.css?v=3.0.0') }}" rel="stylesheet" rel="preload" />


<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" rel="preload" />


<!-- style for about us page -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<!-- Nucleo Icons -->
<link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" rel="preload" />
<link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" rel="preload" />

<!-- Font Awesome Icons -->
<!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="preload">

<!-- Material Icons -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" rel="preload" />

<!-- Download Swiper for image slider -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="preload" />

<!-- Add Arabic font from Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet" rel="preload">

<!-- style for cartesian plane in two equations page-->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<!-- slider photos and videos styles -->
<style>
    
    body {
      padding-top: 20px; /* To avoid content interference with the fixed navbar*/
      font-family: 'Tajawal', 'Arial', sans-serif; /* arabic fonts */
    }

    /* style for arabic language */
    [dir="rtl"] {
        direction: rtl;
        text-align: right;
    }
    /* style of photos and videos pages */
    .slider-container {
        width: 100%;
        height: 400px;
        position: relative;
    }
        .swiper {
            width: 100%;
            height: 400px;
            position: relative;
        }
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure images are appropriate*/
        }
        h2 {
            text-align: center;
            color: #333;
        }

        .video-container {
            max-width: 800px;
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .video-container video {
            width: 100%;
            height: auto;
            display: block;
        }
        .error {
            color: red;
            text-align: center;
            font-size: 18px;
        }
</style>

<!-- CSS Files -->

<link id="pagestyle" href="{{ asset('css/material-kit.css?v=3.1.0') }}" rel="stylesheet" rel="preload" />

<style type="text/css">
    /* style for cartesian plane  */
    element.style {
        visibility: visible;
        pointer-events: auto;
        overflow: hidden;
        position: absolute;
        left: 320px;
        top: 0px;
        width: 316px;
        height: 579px;
    }
    .dcg-grapher.dcg-grapher-2d {
    }
    .dcg-grapher.dcg-grapher-2d {
    }
    .dcg-calculator-api-container-v1_11 .dcg-container * {
        box-sizing: border-box;
    }
    .dcg-calculator-api-container-v1_11 :not(.dcg-focus-visible) {
        outline: none;
    }
    .dcg-calculator-api-container-v1_11 * {
        box-sizing: border-box;
    }

    Style Attribute {
        font-size: 16px;
    }
    .dcg-calculator-api-container-v1_11 #graph-container .dcg-container {
        font-size: 100%;
    }
    .dcg-calculator-api-container-v1_11 .dcg-container {
        width: 100%;
        height: 100%;
        position: relative;
        background: var(--dcg-custom-background-color, #fff);
        color: var(--dcg-custom-text-color, #000);
        z-index: 0;
        -webkit-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
        overflow: hidden;
        font-family: arial,sans-serif;
        font-size: 16px;
    }
    .dcg-calculator-api-container-v1_11 .dcg-container {
        text-align: left;
        transform-origin: 0 0;
    }
    .dcg-calculator-api-container-v1_11 body {
        -webkit-text-size-adjust: 100%;
    }
    .dcg-calculator-api-container-v1_11 body, html {
        margin: 0;
        padding: 0;
        font-family: Arial,sans-serif;
        -webkit-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
    }
</style>

<style>
        /* Flexbox to Set icons to the center*/
        .social-icons-container {
            display: flex;
            justify-content: center; /* Align horizontally*/
            align-items: center; /* Align vertically*/
            height: 100vh; /* Make the container take up the full height of the page.*/
        }

        .social-icons {
            display: flex;
            gap: 20px; /* Space between icons*/
        }

        .social-icons i {
            font-size: 30px; /* Icon size*/
            color: white;
            transition: transform 0.3s ease; /* Effect on scrolling*/
        }

        .social-icons i:hover {
            transform: scale(1.2); /* Enlarge icon on hover*/
        }
</style>


<style>
    /* Popup window format */
    .feedback-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        width: 90%;
        max-width: 500px;
    }

    .feedback-popup.active {
        display: block;
    }

    .open-feedback-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #4a90e2;
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        font-size: 24px;
        cursor: pointer;
        z-index: 1000;
        transition: background 0.3s ease;
    }
    .open-feedback-btn:hover {
        background: #357abd;
    }
    /* تنسيق المدخلات داخل البوب-أب */
    .feedback-popup input[type="text"],
    .feedback-popup input[type="email"],
    .feedback-popup textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        direction: rtl;
        box-sizing: border-box;
    }
    .feedback-popup textarea {
        height: 100px;
        resize: vertical;
    }
    .feedback-popup input:focus,
    .feedback-popup textarea:focus {
        border-color: #4a90e2;
        outline: none;
        box-shadow: 0 0 5px rgba(74, 144, 226, 0.3);
    }
     /* تنسيق الأزرار */
    .feedback-popup .buttons {
        display: flex;
        justify-content: space-between;
        gap: 10px;
    }
    .feedback-popup .submit-btn,
    .feedback-popup .close-btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        transition: background 0.3s ease, transform 0.2s ease;
    }
    .feedback-popup .submit-btn {
        background-color: #4a90e2;
        color: white;
    }
    .feedback-popup .submit-btn:hover {
        background-color: #357abd;
        transform: translateY(-2px);
    }
    .feedback-popup .close-btn {
        background-color: #f44336;
        color: white;
    }
    .feedback-popup .close-btn:hover {
        background-color: #da190b;
        transform: translateY(-2px);
    }
</style>



<!-- languages list style -->
<style>
.language-selector {
    display: flex;
    gap: 5px;
/*    padding: 10px;*/
    justify-content: center;
    align-items: center;
/*    background-color: #f8f9fa;*/
/*    border-radius: 20px;*/
/*    margin: 10px 0;*/
}

.lang-link {
    text-decoration: none;
    color: black;
    font-family: Arial, sans-serif;
    font-size: 16px;
    padding: 8px 12px;
    border-radius: 20px;
    transition: all 0.3s ease;
    font-weight: bold; 
}

.lang-link:hover {
    background-color: white;
    color: #f7ef97;
}

@media (max-width: 600px) {
    .language-selector {
        flex-direction: column;
        gap: 10px;
    }
}

/*  style for functions imgs in draw 2D with one equation*/
.image-row {
    display: flex;
    justify-content: space-around;
    margin-bottom: 40px;
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 imgs on row in mobile */
    gap: 20px;
    margin-bottom: 20px;
    justify-items: center;
    text-align: center;
}
.image-container {
    text-align: center;
}
img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    max-width: 100%;
    /*height: auto;*/
    min-width: 80px;
}

@media (min-width: 768px) {
  .image-row {
    grid-template-columns: repeat(4, 1fr); /* 4 imgs in row on the meduim and large screens */
  }
}

/* cartesian plane in mobile */
#plot {
    width: 100%;
    height: 600px;
  }

  @media (max-width: 768px) {
    #plot {
      height: 400px;
    }
  }

  @media (max-width: 480px) {
    #plot {
      height: 300px;
    }
  }

  @media (min-width: 1200px) {
    #plot {
      height: 700px;
    }
  }


/* rotate card in home page */

.rotating-card-container {
  perspective: 1000px;
}

.card-rotate {
  width: 100%;
  transform-style: preserve-3d;
  transition: transform 1s;
  animation: rotateCard 10s infinite linear;
  position: relative;
}

.card-rotate .front,
.card-rotate .back {
  backface-visibility: hidden;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.card-rotate .back {
  transform: rotateY(180deg);
}

@keyframes rotateCard {
  0% {
    transform: rotateY(0deg);
  }
  50% {
    transform: rotateY(180deg);
  }
  100% {
    transform: rotateY(360deg);
  }
}


/* style for 2D submenu in the navbar*/
.dropdown-menu {
    z-index: 1000;
    border: 1px solid rgba(0, 0, 0, 0.15);
    background: #fff;
    min-width: 12rem;
  }

  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu .dropdown-menu {
    top: -1.5rem;
    right: 100% !important;
    left: auto !important;
    margin-left: 0.125rem;
    display: none;
    min-width: 10rem;
    border: 1px solid rgba(0, 0, 0, 0.15);
    background: #fff;
  }

  .nav-item.dropdown.dropdown-hover .dropdown-submenu:hover .dropdown-menu,
  .nav-item.dropdown.dropdown-hover .dropdown-submenu .dropdown-menu.show {
    display: block !important;
    right: 100% !important;
    left: auto !important;
    top: -1.5rem;
  }

  .nav-item.dropdown.dropdown-hover .dropdown-submenu .dropdown-menu {
    right: 100% !important;
    left: auto !important;
  }

  [dir="rtl"] .nav-item.dropdown.dropdown-hover .dropdown-submenu .dropdown-menu {
    right: 100% !important;
    left: auto !important;
    top: -1.5rem;
  }

  .dropdown-item {
    padding: 0.5rem 1rem;
    color: #6c757d;
    transition: background-color 0.2s ease;
    font-size: 0.9rem;
    white-space: nowrap;
    min-width: 8rem;
  }

  .dropdown-submenu .dropdown-menu .dropdown-item {
    color: #003087 !important; /* لون أزرق غامق */
  }

  .dropdown-item:hover {
    background-color: #f8f9fa;
  }

  .accordion-button {
    font-size: 0.9rem;
    color: #6c757d;
    padding: 0.5rem 1rem !important;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    min-width: 10rem;
  }

  .accordion-button::after {
    display: none;
  }

  .accordion-body {
    background: transparent !important;
    border: none !important;
    padding: 0.5rem 0 !important;
  }

  .accordion-body .dropdown-item {
    padding: 0.5rem 1rem 0.5rem 2rem !important;
    color: #003087 !important; /* لون أزرق غامق */
    background: transparent !important;
    border: none !important;
    white-space: nowrap;
  }

  .text-secondary {
    color: #6c757d !important;
  }

  .text-dark {
    color: #000 !important;
  }

  .nav-link-custom {
    padding: 0.5rem 1rem !important;
    margin: 0 !important;
    line-height: 1.5;
  }

  .nav-link-custom .material-icons,
  .dropdown-item .material-icons,
  .accordion-button .material-icons {
    margin-right: 0.5rem !important;
    display: inline-block !important;
    visibility: visible !important;
  }
  .nav-link.dropdown-toggle::after {
  /*display: none !important;*/
   margin-right: 4px;
   font-size: 0.75rem;
}

</style>

<!--  style for 2D with two equations page-->
<style>
        body {
            font-family: 'Cairo', sans-serif;
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        }
        .container {
            transition: all 0.3s ease;
        }
        .title, .results-title {
            position: relative;
            display: inline-block;
        }
        .title::after, .results-title::after {
            content: '';
            position: absolute;
            bottom: -4px;
            right: 0;
            width: 50%;
            height: 3px;
            background: linear-gradient(to left, #3b82f6, transparent);
            transition: width 0.3s ease;
        }
        .title:hover::after, .results-title:hover::after {
            width: 100%;
        }
        .input-field {
            transition: all 0.2s ease;
            padding-left: 2.5rem !important;
        }
        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .submit-btn {
            transition: all 0.3s ease;
        }
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }
        .error-message, .result-error {
            animation: fadeIn 0.5s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .input-container {
            position: relative;
        }
        .clear-icon {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #9ca3af;
            transition: color 0.2s ease;
            display: none;
        }
        .clear-icon:hover {
            color: #ef4444;
        }
        .input-field:not(:placeholder-shown) + .clear-icon {
            display: block;
        }
        .result-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px;
            background: #f9fafb;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            transition: all 0.2s ease;
        }
        .result-item:hover {
            background: #f3f4f6;
            transform: translateX(-4px);
        }
        .intersection-item {
            background: #ecfdf5;
            border-color: #10b981;
        }
        .intersection-item:hover {
            background: #d1fae5;
        }
        .chart-container {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            background: #ffffff;
            padding: 0px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            width: 100%;
            max-width: 115%;
            margin: 0 auto;
            min-height: 650px;
        }
        @media (max-width: 640px) {
            .title, .results-title {
                font-size: 1.5rem;
            }
            .container {
                padding: 1rem;
            }
            .result-item {
                padding: 8px;
            }
        }
        @media (max-width: 640px) {
            #equationChart {
                height: 550px !important;
                aspect-ratio: 4 / 3;
            }
            #equationChart {
                width: 100% !important;
                height: 650px !important;
                aspect-ratio: 4 / 3;
            }
        }
        @media (max-width: 640px) {
            .chart-container {
                max-width: 100%;
                min-height: 450px;
            }
            #equationChart {
                height: 450px !important;
                aspect-ratio: 4 / 3;
            }
        }
</style>