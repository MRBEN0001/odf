@extends('layouts.guest')
@section('content')
<style>
/* === RESTORE ORIGINAL IMAGE BEHAVIOR EXACTLY === */

/* Cause slider images */
.cause__slider-single .thumb {
    position: relative;
    overflow: hidden;
}

.cause__slider-single .thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* VERY IMPORTANT */
    display: block;
}

/* Gallery images */
.gallery__single {
    position: relative;
    overflow: hidden;
}

.gallery__single img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* keeps alignment + spacing */
    display: block;
}

/* clickable cursor only (no layout changes) */
.clickable-image {
    cursor: pointer;
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
   <div class="banner-bg">
      <img src="{{ asset('assets/images/banner/banner-bg.png') }}" alt="Image">
   </div>
   <div class="shape">
      <img src="{{ asset('assets/images/shape.png') }}" alt="Image">
   </div>
   <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
      <img src="{{ asset('assets/images/sprade-base.png') }}" alt="Image" class="base-img">
   </div>
</section>

<section class="cause cause-three">
   <div class="container">
      <div class="row gutter-30 align-items-center">
         <div class="col-12 col-md-8 col-xl-7">
            <div class="section__header">
               <span class="sub-title"><i class="icon-donation"></i>Start donating to the poor</span>
               <h2 class="title-animation">Help & <span>donate</span>  when they're in need</h2>
            </div>
         </div>
         <div class="col-12 col-md-4 col-xl-5">
            <div class="slider-navigation">
               <button type="button" class="prev-cause slider-btn">
                  <i class="fa-solid fa-arrow-left"></i>
               </button>
               <button type="button" class="next-cause slider-btn slider-btn-next">
                  <i class="fa-solid fa-arrow-right"></i>
               </button>
            </div>
         </div>
      </div>

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
                                    class="clickable-image"
                                    alt="{{ $beneficiary->donation_tag }}">
                                 <div class="tag">
                                    <a href="#">{{ $beneficiary->donation_tag }}</a>
                                 </div>
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
                                 <img src="{{ asset('assets/images/cause/one.png') }}" class="clickable-image" alt="Image">
                                 <div class="tag">
                                    <a href="#">Health</a>
                                 </div>
                              </div>
                              <div class="content">
                                 <p>No beneficiaries yet. Please add beneficiaries from the admin panel.</p>
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

   <div class="spade">
      <img src="{{ asset('assets/images/help/spade.png') }}" alt="Image">
   </div>
</section>

<!-- ==== gallery ==== -->
<div class="gallery">
   <div class="gallery__inner">
      <div class="gallery__slider">

         @foreach (['one','two','three','four','five','six'] as $img)
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/'.$img.'.png') }}" class="clickable-image" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         @endforeach

      </div>
   </div>
</div>

<!-- LIGHTBOX -->
<div id="imageLightbox" style="
   display:none;
   position:fixed;
   top:0;
   left:0;
   width:100%;
   height:100%;
   background:rgba(0,0,0,0.9);
   z-index:9999;
   justify-content:center;
   align-items:center;
">
   <img id="lightboxImg" style="
      max-width:95%;
      max-height:95%;
      object-fit:contain;
      border-radius:10px;
   ">
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

   const lightbox = document.getElementById('imageLightbox');
   const lightboxImg = document.getElementById('lightboxImg');

   document.querySelectorAll('.clickable-image').forEach(img => {
      img.addEventListener('click', function () {
         lightbox.style.display = 'flex';
         lightboxImg.src = this.src;
      });
   });

   // CLOSE when clicking anywhere
   lightbox.addEventListener('click', function () {
      lightbox.style.display = 'none';
      lightboxImg.src = '';
   });

});
</script>
@endpush