<!-- CSS for langs-->
<link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="preload">

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
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            display: none;
            z-index: 1000;
            transition: transform 0.3s ease-in-out;
            transform: translateY(100%);
        }

        .feedback-popup.active {
            display: block;
            transform: translateY(0);
        }

        .feedback-popup h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #333;
        }

        .feedback-popup input, .feedback-popup textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .feedback-popup textarea {
            height: 80px;
            resize: none;
        }

        .feedback-popup .buttons {
            display: flex;
            justify-content: space-between;
        }

        .feedback-popup button {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .feedback-popup .submit-btn {
            background: #28a745;
            color: #fff;
        }

        .feedback-popup .close-btn {
            background: #dc3545;
            color: #fff;
        }

        .feedback-popup .delete-btn {
            background: #dc3545;
            color: #fff;
            padding: 5px 10px;
            font-size: 12px;
            margin-top: 5px;
        }

        /* Comments section */
        .feedback-list {
            max-height: 150px;
            overflow-y: auto;
            margin-top: 10px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .feedback-item {
            background: #f8f9fa;
            padding: 8px;
            margin-bottom: 8px;
            border-radius: 4px;
            font-size: 14px;
        }

        .feedback-item p {
            margin: 0;
        }

        .feedback-item .name {
            font-weight: bold;
            color: #333;
        }

        .feedback-item .date {
            font-size: 0.8em;
            color: #666;
        }

    /* Open window button */
        .open-feedback-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #f7ef97;
            color: black;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            z-index: 999;
        }

    /* Responsive format */
        @media (max-width: 400px) {
            .feedback-popup {
                width: 90%;
                right: 5%;
            }
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

/*  style for functions imgs in draw 2D*/
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

</style>

