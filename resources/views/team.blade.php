@extends('layouts.guest')

@section('content')

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

<section class="team">
   <div class="container">

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

      <div class="row gutter-40">

         @forelse ($teams as $team)
         <div class="col-12 col-sm-6 col-xl-3">
            <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
               <div class="team__single van-tilt">

                  <div class="team__single-thumb">
                     <a href="#">
                        <img 
                           src="{{ asset('storage/' . $team->image) }}" 
                           alt="{{ $team->name }}"
                           style="width: 100%; height: 260px; object-fit: cover;">
                     </a>

                     <div class="team__icons">
                        <div class="team__single-content__icon toggle-plus" data-id="{{ $team->id }}">
                           <i class="fa-solid fa-plus"></i>
                        </div>

                        <div class="team__single__thumb-social" style="display: none;" id="social-{{ $team->id }}">
                           <ul>
                              <a href="https://wa.me/{{ $team->whatsapp }}" target="_blank">
                                 <i class="fa-brands fa-whatsapp"></i>
                              </a>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <div class="team__single-content">
                     <h6 style="text-transform: none !important;"><a href="#" style="text-transform: none !important;">{{ $team->name }}</a></h6>
                     <p style="text-transform: none !important;">{{ $team->position }}</p>
                     
                     <button class="btn btn-primary btn-sm mt-3 w-100 view-bio-btn"
                             data-name="{{ $team->name }}"
                             data-position="{{ $team->position }}"
                             data-image="{{ asset('storage/' . $team->image) }}"
                             data-bio="{{ $team->bio ?? '' }}"
                             data-whatsapp="{{ $team->whatsapp }}">
                        View Bio
                     </button>
                  </div>

               </div>
            </div>
         </div>
         @empty
         <div class="col-12 text-center py-5">
            <p>No team members added yet.</p>
         </div>
         @endforelse

      </div>
   </div>

   <div class="spade">
      <img src="{{ asset('assets/images/sprade-green.png') }}" alt="Image">
   </div>
</section>

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

<div class="modal fade" id="teamBioModal" tabindex="-1" aria-labelledby="teamBioModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="teamBioModalLabel">Team Member Bio</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-12 text-center mb-4">
                  <img id="modal-image" 
                       src="" 
                       alt="" 
                       class="img-fluid rounded" 
                       style="width: 100%; max-width: 280px; height: 280px; object-fit: cover; margin: 0 auto;">
               </div>
               
               <div class="col-12">
                  <h4 id="modal-name" class="mb-2 text-center" style="text-transform: none !important;"></h4>
                  <h6 id="modal-position" class="text-muted mb-4 text-center" style="text-transform: none !important;"></h6>
                  
                  <div id="modal-bio" style="color: #333; font-size: 16px; line-height: 1.8; text-transform: none !important; white-space: normal !important; text-align: justify; word-break: keep-all;">
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <a id="modal-whatsapp" href="#" target="_blank" class="btn btn-success me-2">
               <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

@endsection

@push('scripts')
<script>
document.querySelectorAll('.toggle-plus').forEach(btn => {
   btn.addEventListener('click', function() {
      const id = this.getAttribute('data-id');
      const socialDiv = document.getElementById('social-' + id);
      socialDiv.style.display = (socialDiv.style.display === 'none' || socialDiv.style.display === '') ? 'block' : 'none';
   });
});

document.querySelectorAll('.view-bio-btn').forEach(btn => {
   btn.addEventListener('click', function() {
      const name     = this.getAttribute('data-name');
      const position = this.getAttribute('data-position');
      const image    = this.getAttribute('data-image');
      const bio      = this.getAttribute('data-bio');
      const whatsapp = this.getAttribute('data-whatsapp');

      document.getElementById('modal-image').src = image;
      document.getElementById('modal-name').textContent = name;
      document.getElementById('modal-position').textContent = position;
      
      let bioHtml = '';
      if (bio && bio.trim() !== '') {
          // Removes all hidden newline characters that cause mid-sentence breaks.
          // This keeps "Dr. Asogwa" together because it removes the "Enter" key between them.
          let cleanBio = bio.replace(/(\r\n|\n|\r)/gm, " ");
          
          bioHtml = `<p style="text-transform: none !important; margin: 0;">${cleanBio}</p>`;
      } else {
          bioHtml = '<p>No biography available yet.</p>';
      }
      
      document.getElementById('modal-bio').innerHTML = bioHtml;
      document.getElementById('modal-whatsapp').href = `https://wa.me/${whatsapp}`;

      const modal = new bootstrap.Modal(document.getElementById('teamBioModal'));
      modal.show();
   });
});
</script>
@endpush