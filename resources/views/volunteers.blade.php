@extends('layouts.guest')
@section('content')
<section class="common-banner">
   <div class="container">
      <div class="row">
         <div class="common-banner__content text-center">
            <span class="sub-title"><i class="icon-donation"></i>Start donating to the poor</span>
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
<!-- ==== / banner section end ==== -->

<!-- ==== mission, vission... ==== -->



<!-- ==== / cta section end ==== -->
<!-- ==== team section start ==== -->
<section class="team">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-lg-10 col-xl-6">
            <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
               <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                  people</span>
               <h2 class="title-animation">Meet Our 
                  <span>Team</span> members
               </h2>
            </div>
         </div>
      </div>
      <div class="row gutter-40">
        
         <div class="col-12 col-sm-6 col-xl-3">
            <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
               <div class="team__single van-tilt">
                  <div class="team__single-thumb">
                     <a href="team-details.html">
                        <img src="{{ asset('assets/images/team/two.png') }}" alt="Image">
                     </a>
                     <div class="team__icons">
                        <div class="team__single-content__icon">
                           <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="team__single__thumb-social">
                           <ul>
                            <a href="https://wa.me/2348136323444">
                                    <i class="fa-brands fa-whatsapp"></i>
                                 </a>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="team__single-content">
                     <h6><a href="team-details.html">Arian Drobloas</a></h6>
                     <p>PRO</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-xl-3">
            <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
               <div class="team__single van-tilt">
                  <div class="team__single-thumb">
                     <a href="team-details.html">
                        <img src="{{ asset('assets/images/team/three.png') }}" alt="Image">
                     </a>
                     <div class="team__icons">
                        <div class="team__single-content__icon">
                           <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="team__single__thumb-social">
                           <ul>
                              <a href="https://wa.me/2348136323444">
                                    <i class="fa-brands fa-whatsapp"></i>
                                 </a>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="team__single-content">
                     <h6><a href="team-details.html">Jara Klintof</a></h6>
                     <p>Volunteer</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-xl-3">
            <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
               <div class="team__single van-tilt">
                  <div class="team__single-thumb">
                     <a href="team-details.html">
                        <img src="{{ asset('assets/images/team/four.png') }}" alt="Image">
                     </a>
                     <div class="team__icons">
                        <div class="team__single-content__icon">
                           <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="team__single__thumb-social">
                           <ul>
                             <a href="https://wa.me/2348136323444">
                                    <i class="fa-brands fa-whatsapp"></i>
                                 </a>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="team__single-content">
                     <h6><a href="team-details.html">Aiden Markram</a></h6>
                     <p>Volunteer</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            {{-- <div class="section__cta cta text-center">
               <a href="our-team.html" aria-label="our team" title="our team" class="btn--primary">View All
                  <i class="fa-solid fa-arrow-right"></i></a>
            </div> --}}
         </div>
      </div>
   </div>
   <div class="spade">
      <img src="{{ asset('assets/images/sprade-green.png') }} " alt="Image">
   </div>
</section>
<!-- ==== / team section end ==== -->

<!-- ==== image gallery section start ==== -->
<div class="gallery">
   <div class="gallery__inner">
      <div class="gallery__slider">
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/one.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/two.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/three.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/four.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/five.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/six.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/one.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/two.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/three.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/four.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/five.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
         <div class="gallery__single">
            <img src="{{ asset('assets/images/gallery/six.png') }}" alt="Image">
            <a href="{{ url('/') }}">
               <i class="fa-brands fa-instagram"></i>
            </a>
         </div>
      </div>
   </div>
</div>

@endsection

