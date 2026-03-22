@extends('layouts.guest')
@section('content')

<style>
/* ==== Donation Section ==== */
.donation-details {
    padding: 80px 0;
    background: #f9f9f9;
}

/* ==== Donation Card ==== */
.donation-box {
    background: #ffffff;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 20px;

    border-top: 4px solid #f4c430; /* Yellow */
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);

    text-align: center;
    transition: 0.3s;
}

.donation-box:hover {
    transform: translateY(-5px);
}

/* ==== Title ==== */
.donation-box h5 {
    margin-bottom: 15px;
    color: #0a1f44; /* Navy Blue */
    font-weight: 700;
}

/* ==== Text ==== */
.donation-box p {
    color: #333;
    margin-bottom: 8px;
}

/* ==== Highlight Important Text ==== */
.donation-box strong {
    color: #0a1f44; /* Navy Blue */
}

/* ==== Copy Button ==== */
.copy-btn {
    margin-top: 15px;
    padding: 10px 20px;
    border: none;
    background: #0a1f44; /* Navy Blue */
    color: #fff;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
    font-weight: 500;
}

/* ==== Hover Effect ==== */
.copy-btn:hover {
    background: #f4c430; /* Yellow */
    color: #0a1f44;
}

/* ==== Optional Accent Line ==== */
.donation-box::after {
    content: "";
    display: block;
    width: 40px;
    height: 3px;
    background: #f4c430;
    margin: 15px auto 0;
}
</style>



<section class="common-banner">
   <div class="container">
      <div class="row">
         <div class="common-banner__content text-center">
            <span class="sub-title"><i class="icon-donation"></i>Your donation lave lifes </span>
            <h2 class="title-animation">Donate</h2>
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
<!-- ==== Donation Details Section ==== -->
<style>
.donation-details {
    padding: 80px 0;
}

/* BRAND COLORS */
:root {
    --primary-blue: #0a1f44;
    --accent-yellow: #ffc107;
}

.donation-box {
    background: #ffffff;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 20px;

    border-top: 4px solid var(--accent-yellow);
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);

    text-align: center;
}

.donation-box h5 {
    margin-bottom: 15px;
    color: var(--primary-blue);
    font-weight: 700;
}

.copy-btn {
    margin-top: 15px;
    padding: 10px 20px;
    border: none;
    background: var(--primary-blue);
    color: #fff;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.copy-btn:hover {
    background: var(--accent-yellow);
    color: #000;
}
</style>

<section class="donation-details">
   <div class="container">
      <div class="row justify-content-center">

         <!-- Bank Account -->
         <div class="col-12 col-md-6">
            <div class="donation-box">
               <h5>Bank Transfer</h5>

               <p><strong>Bank Name:</strong> Your Bank Name</p>
               <p><strong>Account Name:</strong> Ovoko DevelopmentFoundation</p>

               <!-- IMPORTANT: ID added here -->
               <p>
                  <strong>Account Number:</strong>
                  <span id="bankNumber">0123456789</span>
               </p>

               <button onclick="copyText('bankNumber')" class="copy-btn">
                  Copy Account Number
               </button>
            </div>
         </div>

         <!-- Bitcoin -->
         <div class="col-12 col-md-6">
            <div class="donation-box">
               <h5>Bitcoin (BTC)</h5>

               <p id="btcAddress">
                  bc1qexamplebitcoinaddress1234567890
               </p>

               <button onclick="copyText('btcAddress')" class="copy-btn">
                  Copy BTC Address
               </button>
            </div>
         </div>

      </div>
   </div>
</section>

<script>
function copyText(elementId) {
    let text = document.getElementById(elementId).innerText;

    navigator.clipboard.writeText(text).then(function () {
        alert("Copied: " + text);
    }, function () {
        alert("Failed to copy");
    });
}
</script>
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

