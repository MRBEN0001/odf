@extends('layouts.guest')

@section('content')

<style>
.cause__slider-single .thumb {
    position: relative;
    overflow: hidden;
}

.cause__slider-single .thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.clickable-image {
    cursor: pointer;
}

/* VIDEO CARD STYLING - Same size as image cards */
.video__slider-single {
    height: 100%;
}

.video__slider-single .thumb {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    height: 250px;
}

.video__slider-single .thumb iframe {
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 10px;
}

/* Overlay to allow sliding while still letting user play video */
.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.05); /* very light overlay - almost invisible */
    z-index: 10;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.3s ease;
}

.video-overlay:hover {
    background: rgba(0, 0, 0, 0.15);
}

.video-overlay::after {
    content: "▶";
    font-size: 50px;
    color: white;
    text-shadow: 0 2px 10px rgba(0,0,0,0.6);
    opacity: 0.9;
}

.video__slider-single .content {
    padding: 15px 0;
    text-align: center;
}

.video__slider-single .content p {
    margin: 0;
    font-size: 15px;
    color: #333;
}

/* Fix for better touch dragging */
.swiper-slide {
    height: auto;
}
</style>

<section class="common-banner">
   <div class="container">
      <div class="row">
         <div class="common-banner__content text-center">
            <span class="sub-title"><i class="icon-donation"></i>Start donating to the poor </span>
            <h2 class="title-animation">Beneficiaries</h2>
         </div>
      </div>
   </div>
</section>

<!-- ==== IMAGE SLIDER (UNCHANGED) ==== -->
<section class="cause cause-three">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="cause__slider-wrapper">
               <div class="cause__slider swiper">
                  <div class="swiper-wrapper">

                     @forelse ($beneficiaries as $beneficiary)
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="thumb">
                                 <img
                                    src="{{ $beneficiary->image_path ? asset('storage/' . $beneficiary->image_path) : asset('assets/images/cause/one.png') }}"
                                    class="clickable-image">
                              </div>
                              <div class="content">
                                 <p>{{ $beneficiary->description }}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     @empty
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="thumb">
                                 <img src="{{ asset('assets/images/cause/one.png') }}">
                              </div>
                              <div class="content">
                                 <p>No beneficiaries yet.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforelse

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- ==== VIDEO SLIDER ==== -->
<section class="cause cause-three" style="padding-top: 0;">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h3 class="text-center mb-4" style="  color: #333; margin-top:2rem;">Videos</h3>
            
            <div class="cause__slider-wrapper">
               <div class="video__slider swiper">
                  <div class="swiper-wrapper">

                     <!-- Video Slide 1 -->
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="video__slider-single">
                              <div class="thumb">
                                 <iframe 
                                    src="https://www.youtube.com/embed/UnvBFcO3Vww" 
                                    title="YouTube video player" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                                 </iframe>
                                 <div class="video-overlay" onclick="this.style.display='none'"></div>
                              </div>
                              <div class="content">
                                 <p>Video Test 1 - Beneficiary Story</p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Video Slide 2 -->
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="video__slider-single">
                              <div class="thumb">
                                 <iframe 
                                    src="https://www.youtube.com/embed/mJtOxawILJk" 
                                    title="YouTube Short"
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    allowfullscreen>
                                 </iframe>
                                 <div class="video-overlay" onclick="this.style.display='none'"></div>
                              </div>
                              <div class="content">
                                 <p>Your First Video Short</p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Video Slide 3 -->
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="video__slider-single">
                              <div class="thumb">
                                 <iframe 
                                    src="https://www.youtube.com/embed/3JZ_D3ELwOQ" 
                                    title="YouTube video player" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                                 </iframe>
                                 <div class="video-overlay" onclick="this.style.display='none'"></div>
                              </div>
                              <div class="content">
                                 <p>Video Test 2 - Project Impact</p>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>

                  <!-- Navigation Arrows -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection

@push('scripts')

<script>
// Initialize Image Slider
var causeSwiper = new Swiper(".cause__slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 },
    },
});

// Initialize Video Slider
var videoSwiper = new Swiper(".video__slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    touchRatio: 1,
    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>

@endpush