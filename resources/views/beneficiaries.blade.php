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

.gallery__single {
    position: relative;
    overflow: hidden;
}

.gallery__single img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.clickable-image {
    cursor: pointer;
}

/* VIDEO FIX */
.video-frame {
    width: 100%;
    height: 250px;
    border-radius: 10px;
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

```
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
```

   </div>
</section>

<!-- ==== VIDEO SLIDER (FIXED) ==== -->



@endsection

@push('scripts')

<script>
var videoSwiper = new Swiper(".video__slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,

    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 },
    },
});
</script>

@endpush
