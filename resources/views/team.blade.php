@extends('layouts.guest')

@section('content')

<!-- ==== Banner Section Start ==== -->
<section class="common-banner">
   <div class="container">
      <div class="row">
         <div class="common-banner__content text-center">
            <span class="sub-title">
               <i class="icon-donation"></i>Meet Our Team
            </span>
            <h2 class="title-animation">Our Team</h2>
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
<!-- ==== Banner Section End ==== -->


<!-- ==== Team Section Start ==== -->
<section class="team">
   <div class="container">

      <!-- Section Header -->
      <div class="row justify-content-center">
         <div class="col-12 col-lg-10 col-xl-6">
            <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
               <span class="sub-title">
                  <i class="icon-donation"></i>Our Dedicated People
               </span>
               <h2 class="title-animation">
                  Meet Our <span>Team</span> Members
               </h2>
            </div>
         </div>
      </div>

      <!-- Team Members -->
     <div class="row gutter-40">

   @foreach ($teams as $team)
      <div class="col-12 col-sm-6 col-xl-3">
         <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
            <div class="team__single van-tilt">

               <div class="team__single-thumb">
                  <a href="#">

                     <img 
   src="{{ asset('storage/' . $team->image) }}" 
   alt="Image"
   style="width: 100%; height: 260px; object-fit: cover;">
                  </a>

                  <div class="team__icons">
                     <div class="team__single-content__icon">
                        <i class="fa-solid fa-plus"></i>
                     </div>

                     <div class="team__single__thumb-social">
                        <ul>
                           <a href="https://wa.me/{{ $team->whatsapp }}" target="_blank">
                              <i class="fa-brands fa-whatsapp"></i>
                           </a>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class="team__single-content">
                  <h6><a href="#">{{ $team->name }}</a></h6>
                  <p>{{ $team->position }}</p>
               </div>

            </div>
         </div>
      </div>
   @endforeach

</div>
   </div>

   <div class="spade">
      <img src="{{ asset('assets/images/sprade-green.png') }}" alt="Image">
   </div>
</section>
<!-- ==== Team Section End ==== -->


<!-- ==== Gallery Section Start ==== -->
<div class="gallery">
   <div class="gallery__inner">
      <div class="gallery__slider">

         @for ($i = 1; $i <= 6; $i++)
            <div class="gallery__single">
               <img src="{{ asset('assets/images/gallery/' . ['one','two','three','four','five','six'][$i-1] . '.png') }}" alt="Image">
               <a href="{{ url('/') }}">
                  <i class="fa-brands fa-instagram"></i>
               </a>
            </div>
         @endfor

      </div>
   </div>
</div>
<!-- ==== Gallery Section End ==== -->

@endsection