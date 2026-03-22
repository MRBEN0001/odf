<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wowtheme7.com/tf/charifund/charifund/index-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Mar 2026 15:23:17 GMT -->

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/odf-logo.jpeg') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/odf-logo.jpeg') }}" type="image/x-icon">
    <!-- #title -->
    <title>{{ config('app.name') }} </title>
    <!-- #keywords -->
    <meta name="keywords" content="charity, nonprofit, fundraising, donation, html, bootstrap, scss">
    <!-- #description -->
    <meta name="description" content="Nonprofit NGO Fundraising HTML5 Template">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;family=Outfit:wght@100..900&amp;display=swap"
        rel="stylesheet"> <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- color themes -->
    <link rel="stylesheet" href="{{ asset('assets/css/default-theme.css') }}" id="switch-color">
    <!-- want sticky header -->
    <link rel="stylesheet" href="{{ asset('assets/css/sticky-header.css') }}">
    <!-- box layout css -->
    <link rel="stylesheet" href="{{ asset('assets/css/box-layout.css') }}">
    <!-- dark mode css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">
    <!-- rtl css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
{{-- loader style --}}
          <style>
.preloader {
    position: fixed;
    inset: 0;
    z-index: 9999;

    display: flex;
    justify-content: center;
    align-items: center;
}

.preloader-inner {
    text-align: center;
}

.preloader-inner img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 2rem;
    display: block;
    margin: 0 auto 10px;
}

.preloader-inner p {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
}
</style>

 <style>

        header.header {
    margin: 0;
    padding: 0;
}

.navbar {
    min-height: 70px;
}

.navbar-logo img {
    display: block;
}

@media (max-width: 768px) {
    .navbar {
        min-height: 60px;
    }
}

/* transparent the nav */

.main-header__menu-box {
    background-color: transparent !important;
    margin-bottom: 0 !important;
}

.navbar {
    background-color: transparent !important;
    box-shadow: none !important;
}

        </style>


</head>

<body>
    <!--[if lt IE 9]>
      <p class="browserupgrade">
         You are using an <strong>outdated</strong> browser. Please
         <a href="https://browsehappy.com/">upgrade your browser</a> to improve
         your experience and security.
      </p>
      <![endif]-->
    {{-- <div class="page-wrapper">
        <!-- ==== preloader start ==== -->
        <div class="preloader">
            <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="{{ config('app.name') }} logo"
                style="width: 80px; border-radius: 2rem; height: auto; display: block; margin: 0 auto;">
            <p>{{ config('app.name') }}</p>
        </div> --}}
  

<div class="page-wrapper">

    <!-- ==== preloader start ==== -->
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{ asset('assets/images/odf-logo.jpeg') }}" 
                 alt="{{ config('app.name') }} logo">

            <p>{{ config('app.name') }}</p>
        </div>
    </div>
        <!-- ==== / preloader end ==== -->
        <!-- ==== topbar start ==== -->
        <div class="topbar topbar--tertiary d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="topbar__inner">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-7">
                                    <div class="topbar__list-wrapper">
                                        <ul class="topbar__list">
                                            <li><a href="https://maps.app.goo.gl/Gr9pTNqz5FRNrjQw8" target="_blank"><i
                                                        class="fa-solid fa-location-dot"></i>
                                                        10b Hill View, Independence Layout, Enugu
                                                </a>
                                            </li>
                                            <li><a href="mailto:support@example.com"><i
                                                        class="fa-regular fa-envelope"></i>{{ config('app.email') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="topbar__items justify-content-end">
                                        <p><a href="tel:2305-587-3407"><i class="fa-solid fa-phone"></i>
                                            +234 806 864 9887</a>
                                        </p>
                                        <div class="social">
                                            <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="Facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                             </a>
                                          
                                             <a href="https://www.youtube.com/" target="_blank" aria-label="visit our youtube" title="YouTube">
                                                <i class="fa-brands fa-youtube"></i>
                                             </a>
                                          
                                             <a href="https://www.instagram.com/" target="_blank" aria-label="visit our instagram" title="Instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                             </a>
                                          
                                             <a href="https://x.com/" target="_blank" aria-label="visit our x account" title="X">
                                                <i class="fa-brands fa-x-twitter"></i>
                                             </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== / topbar end ==== -->
        <!-- ==== header start ==== -->

       
        <header class="header header-tertiary">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div  class="main-header__menu-box">
                        <nav class="navbar p-0 d-flex align-items-center justify-content-between">
                            {{-- <nav style="" class="navbar p-0"> --}}
<div class="navbar-logo d-flex align-items-center">
    <a href="{{ url('/') }}" class="d-flex align-items-center">
        <img src="{{ asset('assets/images/odf-logo.jpeg') }}"
            alt="{{ config('app.name') }} logo"
            style="width: 55px; height: auto; border-radius: 1.5rem;">
    </a>
</div>



                                {{-- <div style="margin-bottom:-4rem; padding-bottom:rem;" class="navbar-logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/images/odf-logo.jpeg') }}"
                                            alt="{{ config('app.name') }} logo"
                                            style="padding-bottom:1rem; width: 70px; border-radius: 2rem; height: auto; display: block; margin: 0 auto;">
                                    </a>
                                </div> --}}
                                <div class="navbar__menu d-none d-xl-block">
                                    <ul class="navbar__list">
                                       
                                        <li class="navbar__item nav-fade">
                                            <a class=" dropdown-label-alter" href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="navbar__item nav-fade">
                                            <a class=" dropdown-label-alter" href="{{ url('/about-us') }}">About Us</a>
                                        </li>
                                        <li class="navbar__item nav-fade">
                                            <a class=" dropdown-label-alter"
                                                href="{{ url('/team') }}">Our Team </a>
                                        </li>
                                        <li class="navbar__item nav-fade">
                                            <a class=" dropdown-label-alter"
                                                href="{{ url('/beneficiaries') }}">Beneficiaries</a>
                                        </li>


                                        <li class="navbar__item nav-fade">
                                            <a class=" dropdown-label-alter" href="{{ url('/contact-us') }}">Contact
                                                Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="navbar__options">
                                    <div class="navbar__mobile-options ">
                                        {{-- <div class="select-country d-none d-xxl-block">
                                            <select name="country" class="country-select select">
                                                <option data-flag="fi-gb-eng">English</option>
                                                <option data-flag="fi-us">Spanish</option>
                                                <option data-flag="fi-cn">Chinese</option>
                                                <option data-flag="fi-it">Italian</option>
                                            </select>
                                        </div> --}}
                                        {{-- <div class="cart-box">
                                            <button class="open-cart cart" aria-label="cart" title="open cart">
                                                <span>0</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                                    viewBox="0 0 18 24" fill="none">
                                                    <path
                                                        d="M8.51049 0C7.26729 0 6.07501 0.49386 5.19593 1.37294C4.31685 2.25201 3.82299 3.4443 3.82299 4.6875V5.46875H3.17456C2.51683 5.46806 1.88419 5.72107 1.40832 6.1751C0.932455 6.62914 0.650039 7.24922 0.619869 7.90625L0.00268136 20.7578C-0.0131401 21.1034 0.0411781 21.4486 0.162362 21.7726C0.283546 22.0967 0.469085 22.3928 0.707797 22.6432C0.946509 22.8936 1.23345 23.093 1.55132 23.2296C1.8692 23.3661 2.21142 23.4368 2.55737 23.4375H14.4636C14.8096 23.4368 15.1518 23.3661 15.4697 23.2296C15.7875 23.093 16.0745 22.8936 16.3132 22.6432C16.5519 22.3928 16.7374 22.0967 16.8586 21.7726C16.9798 21.4486 17.0341 21.1034 17.0183 20.7578L16.4011 7.90625C16.3709 7.24922 16.0885 6.62914 15.6127 6.1751C15.1368 5.72107 14.5042 5.46806 13.8464 5.46875H13.198V4.6875C13.198 3.4443 12.7041 2.25201 11.8251 1.37294C10.946 0.49386 9.7537 0 8.51049 0ZM5.38549 4.6875C5.38549 3.8587 5.71473 3.06384 6.30078 2.47779C6.88684 1.89174 7.68169 1.5625 8.51049 1.5625C9.3393 1.5625 10.1342 1.89174 10.7202 2.47779C11.3063 3.06384 11.6355 3.8587 11.6355 4.6875V5.46875H5.38549V4.6875ZM14.8386 7.97656L15.4558 20.8359C15.4607 20.9703 15.4391 21.1043 15.3922 21.2303C15.3452 21.3563 15.274 21.4719 15.1824 21.5703C15.0888 21.6663 14.9771 21.7428 14.8537 21.7951C14.7303 21.8474 14.5977 21.8746 14.4636 21.875H2.55737C2.42332 21.8746 2.29071 21.8474 2.16729 21.7951C2.04388 21.7428 1.93214 21.6663 1.83862 21.5703C1.74703 21.4719 1.67575 21.3563 1.62883 21.2303C1.58191 21.1043 1.56028 20.9703 1.56518 20.8359L2.18237 7.97656C2.19443 7.72163 2.30426 7.48114 2.48904 7.30509C2.67382 7.12904 2.91934 7.03096 3.17456 7.03125H13.8464C14.1017 7.03096 14.3472 7.12904 14.5319 7.30509C14.7167 7.48114 14.8266 7.72163 14.8386 7.97656Z"
                                                        fill="black" />
                                                    <path
                                                        d="M4.88672 9.52344C5.31819 9.52344 5.66797 9.17366 5.66797 8.74219C5.66797 8.31072 5.31819 7.96094 4.88672 7.96094C4.45525 7.96094 4.10547 8.31072 4.10547 8.74219C4.10547 9.17366 4.45525 9.52344 4.88672 9.52344Z"
                                                        fill="black" />
                                                    <path
                                                        d="M12.1367 9.52344C12.5682 9.52344 12.918 9.17366 12.918 8.74219C12.918 8.31072 12.5682 7.96094 12.1367 7.96094C11.7052 7.96094 11.3555 8.31072 11.3555 8.74219C11.3555 9.17366 11.7052 9.52344 12.1367 9.52344Z"
                                                        fill="black" />
                                                </svg>
                                            </button>
                                        </div> --}}
                                        <div class="sidenav-box d-none d-xl-block">
                                            <button class="open-sidenav" aria-label="sidenav" title="open sidenav">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="26"
                                                    viewBox="0 0 28 26" fill="none">
                                                    <ellipse cx="2.39023" cy="2.39022" rx="2.39023"
                                                        ry="2.39022" fill="#FFC107" />
                                                    <ellipse cx="13.9146" cy="2.39022" rx="2.39023"
                                                        ry="2.39022" fill="black" />
                                                    <ellipse cx="25.44" cy="2.39022" rx="2.39023"
                                                        ry="2.39022" fill="black" />
                                                    <ellipse cx="2.39023" cy="12.6334" rx="2.39023"
                                                        ry="2.39022" fill="black" />
                                                    <ellipse cx="13.9146" cy="12.6344" rx="2.39023"
                                                        ry="2.39022" fill="#FFC107" />
                                                    <ellipse cx="25.44" cy="12.6344" rx="2.39023"
                                                        ry="2.39022" fill="black" />
                                                    <ellipse cx="2.39023" cy="23.0484" rx="2.39023"
                                                        ry="2.39022" fill="black" />
                                                    <ellipse cx="13.9996" cy="23.0484" rx="2.39023"
                                                        ry="2.39022" fill="black" />
                                                    <ellipse cx="25.61" cy="23.0484" rx="2.39023"
                                                        ry="2.39022" fill="#FFC107" />
                                                </svg>
                                            </button>
                                        </div>
                                        <a href="{{ route('donate') }}" class="btn--secondary d-none d-md-flex">Donate Now <i
                                            class="fa-solid fa-arrow-right"></i></a> 
                                            
                                            <a href="{{ url('/admin/login') }}" class="btn--secondary d-none d-md-flex">Admin <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <button class="open-offcanvas-nav d-flex d-xl-none"
                                        aria-label="toggle mobile menu" title="open offcanvas menu">
                                        <span class="icon-bar top-bar"></span>
                                        <span class="icon-bar middle-bar"></span>
                                        <span class="icon-bar bottom-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')




      <!-- ==== / header end ==== -->
      <!-- ==== mobile menu start ==== -->
      <div class="mobile-menu d-block d-xxl-none">
         <nav class="mobile-menu__wrapper">
            <div  class="mobile-menu__header nav-fade">
               <div style="" class="logo">
                  <a href="{{ url('/') }}" aria-label="home page" title="logo">
                     <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="{{ config('app.name') }} logo" style="  width: 80px; border-radius: 2rem;  height: auto; display: block; margin: 0 auto;">
                  </a>
               </div>
               <button aria-label="close mobile menu" class="close-mobile-menu">
                  <i class="fa-solid fa-xmark"></i>
               </button>
            </div>
            <div class="mobile-menu__list"></div>
            <div class="mobile-menu__cta nav-fade d-block d-md-none">
               
               
               <a href="{{ url('/admin/login') }}" style=" margin-bottom: 1rem; " class="btn--secondary">Admin <i class="fa-solid fa-arrow-right"></i></a>
            
               <a href="{{ route('donate') }}" class="btn--primary mb-2">Donate Now <i class="fa-solid fa-arrow-right"></i></a>

              </div>
              
              <div class="social">
                <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="Facebook">
                   <i class="fa-brands fa-facebook-f"></i>
                </a>
             
                <a href="https://www.youtube.com/" target="_blank" aria-label="visit our youtube" title="YouTube">
                   <i class="fa-brands fa-youtube"></i>
                </a>
             
                <a href="https://www.instagram.com/" target="_blank" aria-label="visit our instagram" title="Instagram">
                   <i class="fa-brands fa-instagram"></i>
                </a>
             
                <a href="https://x.com/" target="_blank" aria-label="visit our x account" title="X">
                   <i class="fa-brands fa-x-twitter"></i>
                </a>
             </div>
         </nav>
      </div>
      <div class="mobile-menu__backdrop"></div>
      <!-- ==== / mobile menu end ==== -->
      <!-- ==== search popup start ==== -->
      <div class="search-popup">
         <button class="close-search" aria-label="close search box" title="close search box">
            <i class="fa-solid fa-xmark"></i>
         </button>
         <form action="#" method="post">
            <div class="search-popup__group">
               <input type="text" name="search-field" id="searchField" placeholder="Search...." required>
               <button type="submit" aria-label="search products" title="search products">
                  <i class="fa-solid fa-magnifying-glass"></i>
               </button>
            </div>
         </form>
      </div>
      <!-- ==== / search popup end ==== -->
      <!-- ==== off canvas start ==== -->
      <div class="off-canvas d-none d-xl-block">
         <div class="off-canvas__inner">
            <div class="off-canvas__head">
               <a href="index.html">
                  <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="{{ config('app.name') }} logo" style="width: 80px; border-radius: 2rem; height: auto; display: block; margin: 0 auto;">
               </a>
               <button aria-label="close off canvas" class="off-canvas-close">
                  <i class="fa-solid fa-xmark"></i>
               </button>
            </div>
            <div class="offcanvas__search">
               <form action="#">
                  <input type="text" placeholder="What are you searching for?" required>
                  <button type="submit">
                     <i class="icon-search"></i>
                  </button>
               </form>
            </div>
            <div class="off-canvas__contact">
               <h5>Contact Info</h5>
               <div class="single">
                  <span>
                     <i class="fa-solid fa-phone-volume"></i>
                  </span>
                  <a href="tel:253-556-7777">+234 806 864 9887</a>
               </div>
               <div class="single">
                  <span>
                     <i class="fa-solid fa-envelope"></i>
                  </span>
                  <a href="mailto:example@support.com">{{ config('app.email') }}</a>
               </div>
               <div class="single">
                  <span>
                     <i class="fa-solid fa-location-dot"></i>
                  </span>
                  <a target="_blank"
                     href="https://www.google.com/maps/place/Narbethong+QLD+4725,+Australia/@-23.8173641,145.3223283,11z/data=!3m1!4b1!4m15!1m8!3m7!1s0x2b2bfd076787c5df:0x538267a1955b1352!2sAustralia!3b1!8m2!3d-25.274398!4d133.775136!16zL20vMGNoZ2h5!3m5!1s0x6bcacfb51d7e5257:0x400eef17f209750!8m2!3d-23.8656897!4d145.5354411!16s%2Fg%2F1wd3w6zw">
                     10b Hill View, Independence Layout, Enugu

                  </a>
               </div>
            </div>
            <div class="social">
              <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="Facebook">
                 <i class="fa-brands fa-facebook-f"></i>
              </a>
           
              <a href="https://www.youtube.com/" target="_blank" aria-label="visit our youtube" title="YouTube">
                 <i class="fa-brands fa-youtube"></i>
              </a>
           
              <a href="https://www.instagram.com/" target="_blank" aria-label="visit our instagram" title="Instagram">
                 <i class="fa-brands fa-instagram"></i>
              </a>
           
              <a href="https://x.com/" target="_blank" aria-label="visit our x account" title="X">
                 <i class="fa-brands fa-x-twitter"></i>
              </a>
           </div>
         </div>
      </div>
      <div class="off-canvas-backdrop"></div>
      <!-- ==== / off canvas end ==== -->
      <!-- ==== sidebar cart start ==== -->
      <div class="sidebar-cart">
         <div class="der">
            <button class="close-cart">
               <span class="close-icon">X</span>
            </button>
            <h2>
               Shopping Bag
               <span class="count">2</span>
            </h2>
            <div class="cart-items">
               <div class="cart-item-single">
                  <div class="cart-item-thumb">
                     <a href="service-details.html">
                        <img src="{{ asset('assets/images/cart.jpg') }}" alt="Image">
                     </a>
                  </div>
                  <div class="cart-item-content">
                     <h6 class="h6 title-anim">
                        <a href="service-details.html">Product One</a>
                     </h6>
                     <p class="price">
                        $
                        <span class="item-price">34.99</span>
                     </p>
                     <div class="measure">
                        <button aria-label="decrease item" class="quantity-decrease">
                           <i class="fa-solid fa-minus"></i>
                        </button>
                        <span class="item-quantity">0</span>
                        <button aria-label="add item" class="quantity-increase">
                           <i class="fa-solid fa-plus"></i>
                        </button>
                     </div>
                  </div>
                  <button aria-label="delete item" class="delete-item">
                     <i class="fa-solid fa-trash"></i>
                  </button>
               </div>
               <div class="cart-item-single">
                  <div class="cart-item-thumb">
                     <a href="service-details.html">
                        <img src="{{ asset('assets/images/cart.jpg') }}" alt="Image">
                     </a>
                  </div>
                  <div class="cart-item-content">
                     <h6 class="h6 title-anim">
                        <a href="service-details.html">Product Two</a>
                     </h6>
                     <p class="price">
                        $
                        <span class="item-price">34.99</span>
                     </p>
                     <div class="measure">
                        <button aria-label="decrease item" class="quantity-decrease">
                           <i class="fa-solid fa-minus"></i>
                        </button>
                        <span class="item-quantity">0</span>
                        <button aria-label="add item" class="quantity-increase">
                           <i class="fa-solid fa-plus"></i>
                        </button>
                     </div>
                  </div>
                  <button aria-label="delete item" class="delete-item">
                     <i class="fa-solid fa-trash"></i>
                  </button>
               </div>
            </div>
            <div class="totals">
               <div class="subtotal">
                  <span class="label">Subtotal:</span>
                  <span class="amount ">
                     $
                     <span class="total-price">0.00</span>
                  </span>
               </div>
            </div>
            <div class="action-buttons">
               <a class="view-cart-button" href="cart.html" aria-label="go to cart">Cart</a>
               <a class="checkout-button" href="checkout.html" aria-label="go to checkout">
                  Checkout
                  <i class="fa-solid fa-arrow-right-long"></i>
               </a>
            </div>
         </div>
      </div>
      <div class="cart-backdrop"></div>







        <footer class="footer-three">
            <div class="container">
                <div class="row gutter-30">
                    <div class="col-12 col-lg-3">
                        <div class="footer-three__logo" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/odf-logo.jpeg') }}"
                                    alt="{{ config('app.name') }} logo"
                                    style="width: 80px; border-radius: 2rem; height: auto; display: block; margin: 0 auto;">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="footer-three__inner" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="300">
                            <div class="footer__bottom-left">
                                {{-- <ul class="footer__bottom-list justify-content-center justify-content-lg-end">
                          <li><a href="contact-us.html">Support</a></li>
                          <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                          <li><a href="privacy-policy.html">Privacy Policy</a></li>
                       </ul> --}}
                            </div>
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="Facebook">
                                   <i class="fa-brands fa-facebook-f"></i>
                                </a>
                             
                                <a href="https://www.youtube.com/channel/UCRBWbp4vtcySU9QBeVwEbhw" target="_blank" aria-label="visit our youtube" title="YouTube">
                                   <i class="fa-brands fa-youtube"></i>
                                </a>
                             
                                <a href="https://www.instagram.com/" target="_blank" aria-label="visit our instagram" title="Instagram">
                                   <i class="fa-brands fa-instagram"></i>
                                </a>
                             
                                <a href="https://x.com/" target="_blank" aria-label="visit our x account" title="X">
                                   <i class="fa-brands fa-x-twitter"></i>
                                </a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider">
            <div class="container">
                <div class="row gutter-80">
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="footer-three__widget" data-aos="fade-up" data-aos-duration="1000">
                            <div class="footer-two__widget-intro">
                                {{-- <h5>About Us</h5> --}}
                            </div>
                            <div class="footer-three__widget-single">
                                <p>
                                    We believe we have the power to save lifes together.                                </p>
                                <p><a href="mailto:support@example.com">{{ config('app.email') }}</a></p>
                            </div>
                            <div class="footer-three__widget-alt">
                                <div class="footer-two__widget-intro">
                                    <h6 class="title-animation">Opening Hours</h6>
                                </div>
                                <div class="footer-three__widget-single">
                                    <p>9.00am - 6.30pm
                                    </p>
                                    <p>Monday to Sarturday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-6 col-xl-3">
                        <div class="footer-three__widget" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="footer-two__widget-intro">
                                <h5>Latest Post</h5>
                            </div>
                            <div class="footer-three__widget-content">
                                <div class="footer-three__widget-news">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/images/blog/ph-one.png') }}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><i class="fa-solid fa-calendar"></i>24th May 2023</p>
                                        <p>
                                            <a href="blog-details.html">This Place Really Place For Awesome</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="footer-three__widget-news">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/images/blog/ph-two.png') }}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><i class="fa-solid fa-calendar"></i>24th May 2023</p>
                                        <p>
                                            <a href="blog-details.html">This Place Really Place For Awesome</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="footer-three__widget footer-three__widget-alter" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="400">
                            <div class="footer-two__widget-intro">
                                <h5>Get In Touch</h5>
                            </div>
                            <div class="footer-three__widget-content">
                                <div class="single-address">
                                    <div class="thumb">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <p>Address</p>
                                        <p><a href="https://maps.app.goo.gl/Gr9pTNqz5FRNrjQw8" target="_blank">
                                            10b Hill View, Independence Layout, Enugu
                                        </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="single-address">
                                    <div class="thumb">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <p>Phone</p>
                                        <p>+234 806 864 9887</p>
                                    </div>
                                </div>
                                <div class="single-address">
                                    <div class="thumb">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <p>Email</p>
                                        <p><a href="mailto:support@example.com">{{ config('app.email') }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="footer-three__widget footer-three__widget--newsletter" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="600">
                            <div class="footer-two__widget-intro">
                                <h5>Newsletter</h5>
                            </div>
                            <div class="footer-three__widget-content">
                                <p>
                                    Want to receive our updates? Sign up to our Newsletter.                                </p>
                                <form action="#" method="post">
                                    <div class="input-icon">
                                        <input type="email" required name="subscribe-email" id="subscribeEmail"
                                            placeholder="Enter Email">
                                        <button type="submit" aria-label="subscribe to our newsletter"
                                            title="subscribe to our newsletter"><i
                                                class="fa-solid fa-paper-plane"></i>
                                        </button>
                                    </div>
                                    <div class="footer__newsletter-check">
                                        <div class="form-group">
                                            <input type="checkbox" id="acceptPolicy">
                                            <label for="acceptPolicy">I agree all your <a
                                                    href="terms-conditions.html">Terms</a> &
                                                <a href="privacy-policy.html">Policies</a></label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-two__copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-two__copyright-inner text-center">
                                <p>Copyright &copy; <span id="copyrightYear"></span> <a
                                        href="{{ url('/') }}">{{ config('app.name') }}</a>.
                                    All rights
                                    reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ==== / footer end ==== -->
        <!-- ==== custom cursor start ==== -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>
        <!-- ==== / custom cursor end ==== -->
        <!-- ==== scroll to top start ==== -->
        <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
            <span></span>
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </button>
        <!-- ==== / scroll to top end ==== -->
        <!-- ==== whatsapp support start ==== -->
        <div class="whatsapp-support-wrapper">
            <a href="https://wa.me/2348068649887?text={{ urlencode('Hi, I would like to donate to support the poor. I also have a few questions, please.') }}"
               class="whatsapp-support-button"
               target="_blank"
               rel="noopener"
               aria-label="Chat with us on WhatsApp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <div class="whatsapp-support-message" id="whatsappSupportMessage">
                <button type="button" class="whatsapp-support-close" aria-label="Close support message">&times;</button>
                <p>
                    Need help or want to <strong>donate to support the poor</strong>?<br>
                    Chat with us on WhatsApp and ask any question.
                </p>
            </div>
        </div>
        <style>
            .whatsapp-support-wrapper {
                position: fixed;
                right: 20px;
                bottom: 90px;
                z-index: 9999;
                display: flex;
                flex-direction: column;
                align-items: flex-end;
                gap: 8px;
            }

            .whatsapp-support-button {
                width: 55px;
                height: 55px;
                border-radius: 50%;
                background-color: #25D366;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #ffffff;
                font-size: 28px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .whatsapp-support-button:hover {
                transform: translateY(-3px);
                box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
                color: #ffffff;
            }

            .whatsapp-support-message {
                max-width: 260px;
                background-color: #ffffff;
                border-radius: 10px;
                padding: 10px 12px 10px 12px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.18);
                font-size: 13px;
                line-height: 1.4;
                color: #111827;
                position: relative;
                animation: fadeInUp 0.25s ease-out both;
            }

            .whatsapp-support-message p {
                margin: 0;
            }

            .whatsapp-support-close {
                position: absolute;
                top: 4px;
                right: 6px;
                border: none;
                background: transparent;
                font-size: 14px;
                cursor: pointer;
                color: #6b7280;
            }

            .whatsapp-support-message::after {
                content: "";
                position: absolute;
                right: 14px;
                bottom: -6px;
                border-width: 6px 6px 0 6px;
                border-style: solid;
                border-color: #ffffff transparent transparent transparent;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(6px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @media (max-width: 767.98px) {
                .whatsapp-support-wrapper {
                    right: 15px;
                    bottom: 80px;
                }

                .whatsapp-support-button {
                    width: 50px;
                    height: 50px;
                    font-size: 24px;
                }

                .whatsapp-support-message {
                    max-width: 220px;
                    font-size: 12px;
                }
            }
        </style>
        <script>
            (function () {
                const msg = document.getElementById('whatsappSupportMessage');
                const closeBtn = msg ? msg.querySelector('.whatsapp-support-close') : null;

                if (closeBtn && msg) {
                    closeBtn.addEventListener('click', function () {
                        msg.style.display = 'none';
                    });
                }
            })();
        </script>
        <!-- ==== / whatsapp support end ==== -->
        <!-- ==== color switcher start ==== -->
        <div class="color-palate">
            <button class="color-trigger">
                <i class="fa-solid fa-gear"></i>
            </button>
            <button class="close-color-trigger">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="color-palate-inner">
                <div class="various-color clearfix">
                    <h6>Multiple Colors</h6>
                    <br>
                    <div class="colors-list">
                        <span class="palate default-color active"
                            data-theme-file="{{ asset('assets/css/default-theme.css') }}"></span>
                        <span class="palate blue-color"
                            data-theme-file="{{ asset('assets/css/blue-theme.css') }}"></span>
                        <span class="palate brown-color"
                            data-theme-file="{{ asset('assets/css/brown-theme.css') }}"></span>
                        <span class="palate green-color"
                            data-theme-file="{{ asset('assets/css/green-theme.css') }}"></span>
                        <span class="palate orange-color"
                            data-theme-file="{{ asset('assets/css/orange-theme.css') }}"></span>
                        <span class="palate purple-color"
                            data-theme-file="{{ asset('assets/css/purple-theme.css') }}"></span>
                        <span class="palate teal-color"
                            data-theme-file="{{ asset('assets/css/teal-theme.css') }}"></span>
                        <span class="palate yellow-color"
                            data-theme-file="{{ asset('assets/css/yellow-theme.css') }}"></span>
                    </div>
                </div>
                <h6>RTL Version</h6>
                <ul class="rtl-version option-box">
                    <li class="rtl">RTL Version</li>
                    <li>LTR Version</li>
                </ul>
                <h6>Boxed Version</h6>
                <ul class="box-version option-box">
                    <li class="box">Boxed</li>
                    <li>Full width</li>
                </ul>
                <h6>Sticky Header</h6>
                <ul class="header-version option-box">
                    <li class="box">Yes</li>
                    <li>No</li>
                </ul>
                <h6>Dark Verion</h6>
                <ul class="dark-version option-box">
                    <li class="box">Yes</li>
                    <li>No</li>
                </ul>
                <div class="purchase-box">
                    <p>You will find much more options for colors and styling in admin panel. This color picker is used
                        only for demonstration purposes.
                    </p>
                    <a href="index.html" class="purchase-box__btn">buy now</a>
                </div>
            </div>
        </div>
        <!-- ==== / color switcher end ==== -->
    </div>
    <!-- ==== js dependencies start ==== -->
    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- bootstrap five js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- swiper slider js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- viewport js -->
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <!-- odometer js -->
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <!-- vanilla tilt js -->
    <script src="{{ asset('assets/js/vanilla-tilt.min.js') }}"></script>
    <!-- aos js -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>

    <!-- splittext js -->
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <!-- scrollto js -->
    <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
    <!-- scrolltrigger js -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- gsap js -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <!-- ==== / js dependencies end ==== -->
    <!-- template settings js -->
    <script src="{{ asset('assets/js/template-settings.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

@stack('scripts')


{{-- copy account and btc on donate page --}}
<script>
function copyText(id) {
    let text = document.getElementById(id).innerText;
    navigator.clipboard.writeText(text);

    alert("Copied successfully!");
}
</script>
</body>


<!-- Mirrored from wowtheme7.com/tf/charifund/charifund/index-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Mar 2026 15:24:00 GMT -->

</html>
