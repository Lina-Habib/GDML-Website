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
	              	<div class="slider-container">
		                <div class="swiper">
				            <div class="swiper-wrapper">
				                <!-- imgs will be here -->
				            </div>
				            <div class="swiper-pagination"></div>
				            <div class="swiper-button-prev"></div>
				            <div class="swiper-button-next"></div>
				        </div>
				    </div>    
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-6 justify-content-center d-flex flex-column ps-lg-5 pt-lg-0 pt-3">
	            <h3>
	              {{ __('messages.imgs&vids.add1') }}
	            </h3>
	          </div>
	        </div>
	      </div>

	      <div class="col-lg-12 mt-5">
	        <div class="row flex-row-reverse">
	          <div class="col-lg-6 justify-content-center d-flex flex-column">
	            <div class="card border-radius-lg">
	              <div class="blur-shadow-image">
	              	<div class="slider-container">
		                <div class="swiper">
				            <div class="swiper-wrapper">
				                 <!-- imgs will be here -->
				            </div>
				            <div class="swiper-pagination"></div>
				            <div class="swiper-button-prev"></div>
				            <div class="swiper-button-next"></div>
				        </div>
				    </div>    
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-6 pe-lg-5 justify-content-center d-flex flex-column pt-lg-0 pt-3">
	            <h3>
	              {{ __('messages.imgs&vids.add2') }}
	            </h3>
	          </div>
	        </div>
	      </div> 

	      <div class="col-lg-12 mt-6">
	        <div class="row">
	          <div class="col-lg-6 justify-content-center d-flex flex-column">
	            <div class="card border-radius-lg">
	              <div class="d-block blur-shadow-image">
	              	<div class="slider-container">
		                <div class="swiper">
				            <div class="swiper-wrapper">
				                <!-- imgs will be here -->
				            </div>
				            <div class="swiper-pagination"></div>
				            <div class="swiper-button-prev"></div>
				            <div class="swiper-button-next"></div>
				        </div>
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

	      <div class="col-lg-12 mt-5">
	        <div class="row flex-row-reverse">
	          <div class="col-lg-6 justify-content-center d-flex flex-column">
	            <div class="card border-radius-lg">
	              <div class="blur-shadow-image">
	              	<div class="slider-container">
		                <div class="swiper">
				            <div class="swiper-wrapper">
				                 <!-- imgs will be here -->
				            </div>
				            <div class="swiper-pagination"></div>
				            <div class="swiper-button-prev"></div>
				            <div class="swiper-button-next"></div>
				        </div>
				    </div>    
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-6 pe-lg-5 justify-content-center d-flex flex-column pt-lg-0 pt-3">
	            <h3>
	              {{ __('messages.imgs&vids.add2') }}
	            </h3>
	          </div>
	        </div>
	      </div>

	      <div class="col-lg-12 mt-6">
	        <div class="row">
	          <div class="col-lg-6 justify-content-center d-flex flex-column">
	            <div class="card border-radius-lg">
	              <div class="d-block blur-shadow-image">
	              	<div class="slider-container">
		                <div class="swiper">
				            <div class="swiper-wrapper">
				                <!-- imgs will be here -->
				            </div>
				            <div class="swiper-pagination"></div>
				            <div class="swiper-button-prev"></div>
				            <div class="swiper-button-next"></div>
				        </div>
				    </div>    
	              </div>
	            </div>
	          </div>
	          <div class="col-lg-6 justify-content-center d-flex flex-column ps-lg-5 pt-lg-0 pt-3">
	            <h3>
	              {{ __('messages.imgs&vids.add1') }}
	            </h3>
	          </div>
	        </div>
	      </div>

	    </div>
	  </div>
	</section>
	


<script>
    // List of groups and image paths
    const imageGroups = [
        {
            name: "Group1",
            images: [
                "/imgs/images/group1/img1.jpg",
                "/imgs/images/group1/img2.jpg",
                "/imgs/images/group1/img3.jpg",
                "/imgs/images/group1/img4.jpg",
                "/imgs/images/group1/img5.jpg",
                "/imgs/images/group1/img6.jpg",
                "/imgs/images/group1/img7.jpg",
                "/imgs/images/group1/img8.jpg"
            ]
        },
        {
            name: "Group2",
            images: [
                "/imgs/images/group2/img1.jpg",
                "/imgs/images/group2/img2.jpg",
                "/imgs/images/group2/img3.jpg",
                "/imgs/images/group2/img4.jpg",
                "/imgs/images/group2/img5.jpg",
                "/imgs/images/group2/img6.jpg"
            ]
        },
        {
            name: "Group3",
            images: [
                "/imgs/images/group3/img1.jpg",
                "/imgs/images/group3/img2.jpg",
                "/imgs/images/group3/img3.jpg",
                "/imgs/images/group3/img4.jpg",
                "/imgs/images/group3/img5.jpg"
            ]
        },
        {
            name: "Group4",
            images: [
                "/imgs/images/group4/img1.jpg",
                "/imgs/images/group4/img2.jpg",
                "/imgs/images/group4/img3.jpg",
                "/imgs/images/group4/img4.jpg",
                "/imgs/images/group4/img5.jpg",
                "/imgs/images/group4/img6.jpg",
                "/imgs/images/group4/img7.jpg",
                "/imgs/images/group4/img8.jpg"
            ]
        },
        {
            name: "Group5",
            images: [
                "/imgs/images/group5/img1.jpg",
                "/imgs/images/group5/img2.jpg",
                "/imgs/images/group5/img3.jpg",
                "/imgs/images/group5/img4.jpg"
            ]
        }

    ];

    // Setting up sliders dynamically
    document.querySelectorAll(".slider-container").forEach((container, index) => {
        const swiperWrapper = container.querySelector(".swiper-wrapper");
        const group = imageGroups[index];

        // Add images to sliders
        group.images.forEach(image => {
            const slide = document.createElement("div");
            slide.className = "swiper-slide";
            slide.innerHTML = `<img src="${image}" alt="${group.name} image" loading="lazy">`;
            swiperWrapper.appendChild(slide);
        });

        // Swiper Configuration
        new Swiper(container.querySelector(".swiper"), {
            loop: true, // Slider repeat
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            autoplay: {
                delay: 3000, // Change the img every 3 secs
                disableOnInteraction: false
            }

        });
    });
</script>



@stop