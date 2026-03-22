@extends('layouts.guest')
@section('content')
      <!-- ==== / sidebar cart end ==== -->
      <!-- ==== banner section start ==== -->
      <section class="banner-three">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-8">
                  <div class="banner-three__slider swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="banner-three__content">
                              <span class="sub-title"><i class="icon-donation"></i>Start donating to the poor
                                 </span>
                              <h1 class="title-animation">We Are non <br>
                                 profit charity <span class="bottom-line">World</span>
                                 organization
                              </h1>
                              <p>
                            At {{config('app.name')}}, We are dedicated to supporting communities, spreading hope, 
   and creating lasting impact through compassion, generosity, and action. 
   Together, we can build a better future for those in need.
                              </p>
                              <div class="banner__content-cta cta">
                                 <a href="{{url('/about-us')}}" aria-label="about us" title="about us"
                                    class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                 <a href="{{ url('/donate') }}" aria-label="contact us" title="contact us"
                                    class="btn--primary">Save lifes <i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="banner-three__content">
                              <span class="sub-title"><i class="icon-donation"></i>Start donating to save lifes
                                 </span>
                              <h1 class="title-animation">Bringing Hope to <br>
                                 better <span class="bottom-line">Ovoko people</span>
                                  Through Giving.
                              </h1>
                              <p>
                              Every act of kindness matters. We work tirelessly to uplift lives, 
   empower communities, and provide support where it is needed most. 
   Join us in making a real difference.
                              </p>
                              <div class="banner__content-cta cta">
                                 <a href="our-causes.html" aria-label="about us" title="about us"
                                    class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                 <a href="{{ url('/donate') }}" aria-label="contact us" title="contact us"
                                    class="btn--primary">Donate Now<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="banner-three__content">
                              <span class="sub-title"><i class="icon-donation"></i>Make a difference with your donation.
                                 </span>
                              <h1 class="title-animation"> Empowering Lives<br>
                                and Building a<span class="bottom-line">Stronger</span>
                                 future
                              </h1>
                              <p>
                             We believe every person deserves a chance to thrive. Through support, care, 
   and community-driven initiatives, we are helping people rise above challenges 
   and create brighter futures.
                              </p>
                              <div class="banner__content-cta cta">
                                 <a href="{{url('about-us')}}" aria-label="about us" title="about us"
                                    class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                 <a href="{{ url('/donate') }}" aria-label="contact us" title="contact us"
                                    class="btn--primary">Donate Now <i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-4 d-none d-lg-block">
                  <div class="banner-three__thumb">
                     <div class="banner-three__thumb-inner">
                        <div class="group">
                           <div class="m-one move-image">
                              <img src="{{ asset('assets/images/banner/m-one.png') }}" alt="Image" data-aos="fade-right"
                                 data-aos-duration="1000">
                           </div>
                           <div class="m-three move-image">
                              <img src="{{ asset('assets/images/banner/m-three.png') }}" alt="Image" data-aos="fade-right"
                                 data-aos-duration="1000" data-aos-delay="300">
                           </div>
                        </div>
                        <div class="group">
                           <div class="m-two move-image">
                              <img src="{{ asset('assets/images/banner/m-two.png') }}" alt="Image" data-aos="zoom-in"
                                 data-aos-duration="1000">
                           </div>
                           <div class="m-four move-image">
                              <img src="{{ asset('assets/images/banner/m-four.png') }}" alt="Image" data-aos="zoom-in"
                                 data-aos-duration="1000" data-aos-delay="300">
                           </div>
                        </div>
                        <div class="group">
                           <div class="m-five move-image">
                              <img src="{{ asset('assets/images/banner/m-five.png') }}" alt="Image" data-aos="fade-left"
                                 data-aos-duration="1000" data-aos-delay="300">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape-lg">
            <img src="{{ asset('assets/images/banner/banner-three-bg.png') }}" alt="Image" data-aos="zoom-in" data-aos-duration="1000">
         </div>
         <div class="sprade-shape">
            <img src="{{ asset('assets/images/sprade-base.png') }}" alt="Image" class="base-img" data-aos="zoom-in"
               data-aos-duration="1000">
         </div>
         <div class="parasuit">
            <img src="{{ asset('assets/images/parasuit.png') }}" alt="Image">
         </div>
      </section>
      <!-- ==== / banner section end ==== -->
      <!-- ==== overview section start ==== -->
      <section class="overview">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="overview__inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                     <div class="overview__single overview__left">
                        <h4>Total Raised Fund</h4>
                        <div class="cause__progress progress-bar-single">
                           <div class="cause-progress__bar">
                              <div class="progress-bar-wrapper" data-percent="20%">
                                 <div class="progress-bar">
                                    <div class="progress-bar-percent"><span class="percent-value">20%</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="cause-progress__goal">
                           <div class="goal-single">
                              <span>Raised</span>
                              <h5>$20,000</h5>
                           </div>
                           <div class="goal-single">
                              <span>Goal</span>
                              <h5>$100,000</h5>
                           </div>
                        </div>
                     </div>
                     <div class="overview__single overview__right">
                        <span>Healtcare</span>
                        <h4><a href="cause-details.html">Water For All Children, America</a></h4>
                        <p>Charity is the act of extending love and kindness to others which is a conscious act
                           but the decision is made by the heart,
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / overview section end ==== -->
      <!-- ==== difference section start ==== -->
      <section class="difference-three">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-5">
                  <div class="difference-three__thumb d-none d-lg-block">
                     <div class="difference-three__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                           <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image">
                        </div>
                        <div class="spade">
                           {{-- <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image" class="base-img"> --}}
                        </div>
                        <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                           {{-- <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image"> --}}
                        </div>
                        <div class="line">
                           {{-- <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image"> --}}
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-7">
                  <div class="difference-three__content">
                     <div class="section__content">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating to the poor
                        </span>
                      <h2 class="title-animation">
   <span>Give</span> Today, Change a Life Tomorrow
</h2>

<p>
   No contribution is too small. Together, we can bring relief, empower communities, 
   and create lasting impact for a better future.
</p>
                     </div>
                     <div class="differnce-quote">
                        <blockquote>
                           <q>
                           
                        
                           <span> Your support brings hope to the   hopeless and strength to the weak. 
                           </span>
                               Join us in making a meaningful difference in the lives of others.

                              </q>
                        </blockquote>
                     </div>
                     <div class="help__content-list">
                        <ul>
                           <li><i class="fa-regular fa-circle-check"></i> Giving Hope, Changing Lives</li>
                           <li><i class="fa-regular fa-circle-check"></i> Empower Through Charity
                           </li>
                           <li><i class="fa-regular fa-circle-check"></i> Together We Can</li>
                           <li><i class="fa-regular fa-circle-check"></i> Healing Communities</li>
                           <li><i class="fa-regular fa-circle-check"></i> Every Act Counts</li>
                           <li><i class="fa-regular fa-circle-check"></i> Compassion in Action</li>
                        </ul>
                     </div>
                     <div class="difference-three-cta">
                        <a href="{{ route('about') }}" aria-label="about us" title="about us" class="btn--primary">About Us <i
                              class="fa-solid fa-arrow-right"></i></a>
                        {{-- <div class="author-info">
                           <div class="author-thumb">
                              <img src="{{ asset('assets/images/author-two.png') }}" alt="Image">
                           </div>
                           <div class="author-content">
                              <span>Software Engineer</span>
                              <h6>James Anderson</h6>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / difference section end ==== -->
      <!-- ==== donation section start ==== -->
      <section class="donation-future">
         <div class="container">
            <div class="row gutter-40">
               <div class="col-12 col-lg-6 col-xl-7">
                  <div class="donation-future__content">
                     <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating to save lifes</span>
                        <h2 class="title-animation">Building A Better <span>Future</span>
                           Together By Donations
                        </h2>
                        <div class="video-btn-wrapper">
                           <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"
                              class="open-video-popup">
                              <i class="icon-play"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-6 col-xl-5">
                  <div class="donation-future__thumb" data-background="{{ asset('assets/images/donation/thumb-bg.png') }}"
                     data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <h4>Support for Food Expenses</h4>
                     <div class="cause__progress progress-bar-single">
                        <div class="cause-progress__bar">
                           <div class="progress-bar-wrapper" data-percent="60%">
                              <div class="progress-bar">
                                 <div class="progress-bar-percent"><span class="percent-value"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="cause-progress__goal">
                        <p>Raised: <span class="raised">$60000</span></p>
                        <p>Goal: <span class="goal">$100,000</span></p>
                     </div>
                     <hr>
                     <div class="made-amount">
                        <span class="donation-amount">$100</span>
                        <span class="donation-amount">$200</span>
                        <span class="donation-amount active">$500</span>
                        <span class="donation-amount">$1000</span>
                        <span class="donation-amount">$10000</span>
                     </div>
                     <div class="cta">
                        <a href="{{ route('donate') }}" class="btn--primary">Donate Now <i class="icon-heart"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="donation-bg">
            <img src="{{ asset('assets/images/donation/bg.png') }}" alt="Image" class="parallax-image">
            <img src="{{ asset('assets/images/donation/shape.png') }}" alt="Image" class="shape">
         </div>
      </section>
      <!-- ==== / donation section end ==== -->
      <!-- ==== cause slider section start ==== -->
      <section class="cause cause-three">
         <div class="container">
            <div class="row gutter-30 align-items-center">
               <div class="col-12 col-md-8 col-xl-7">
                  <div class="section__header">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating to save lifes</span>
                     <h2 class="title-animation">Help & <span>donate</span> to save lifes
                     </h2>
                  </div>
               </div>
               <div class="col-12 col-md-4 col-xl-5">
                  <div class="slider-navigation">
                     <button type="button" aria-label="prev slide" title="prev slide" class="prev-cause slider-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                     </button>
                     <button type="button" aria-label="next slide" title="next slide"
                        class="next-cause slider-btn slider-btn-next">
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
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.html">
                                          <img src="{{ asset('assets/images/cause/one.png') }} " alt="Image">
                                       </a>
                                       <div class="tag">
                                          Health
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.html">Health support</a></h6>
                                       <p>
                                     We provide access to basic healthcare, medical support, and wellness programs 
      to ensure children grow up healthy and strong.
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">85%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="85%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="{{ route('donate') }}" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.html">
                                          <img src="{{ asset('assets/images/cause/two.png') }}" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.html">Food</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.html">Ending Hunger Together</a></h6>
                                       <p>We provide balanced meals and nutrition support to help children grow 
      strong and stay healthy.
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">90%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="90%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="{{ route('donate') }}" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.html">
                                          <img src="{{ asset('assets/images/cause/three.png') }}" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.html">Health</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.html">Health support</a></h6>
                                       <p> We step in to provide 
      treatment, support, and hope for a healthier future.
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">75%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="75%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="{{ route('donate') }}" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.html">
                                          <img src="{{ asset('assets/images/cause/four.png') }}" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.html">Food</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.html">Supporting Families with Food Aid</a></h6>
                                       <p>We provide nutritious meals to children and families facing hunger, 
      ensuring no one goes to bed hungry.
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">65%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="65%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="{{ route('donate') }}" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.html">
                                          <img src="{{ asset('assets/images/cause/one.png') }} " alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.html">Health</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.html">Health support</a></h6>
                                       <p>Medical outreach to improve 
      the overall health and wellbeing of vulnerable children.
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">85%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="85%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="{{ route('donate') }}" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.html">
                                          <img src="{{ asset('assets/images/cause/two.png') }}" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.html">Food</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.html">Promoting Healthy Nutrition</a></h6>
                                       <p>A simple meal can restore hope. We deliver food support to those 
      struggling to meet their daily needs.
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">90%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="90%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="{{ route('donate') }}" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.html">
                                          <img src="{{ asset('assets/images/cause/three.png') }}" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.html">Health</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.html">Help For Food</a></h6>
                                       <p>  We ensure children and families receive vital medical attention, health education, 
      and support needed to live safe and healthy lives.
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">75%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="75%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="{{ route('donate') }}" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cause__slider-inner">
                                 <div class="cause__slider-single">
                                    <div class="thumb">
                                       <a href="cause-details.html">
                                          <img src="{{ asset('assets/images/cause/four.png') }}" alt="Image">
                                       </a>
                                       <div class="tag">
                                          <a href="our-causes.html">Food</a>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <h6><a href="cause-details.html">Sustainable Food Support</a></h6>
                                       <p> We provide nutritious meals to children and families facing hunger, 
      ensuring no one goes to bed hungry.
                                       </p>
                                    </div>
                                    <div class="cause__slider-cta">
                                       <div class="cause__progress progress-bar-single">
                                          <div class="cause-progress__intro">
                                             <p><span>Donation</span>
                                                <span class="percent-value">65%</span>
                                             </p>
                                          </div>
                                          <div class="cause-progress__bar">
                                             <div class="progress-bar-wrapper" data-percent="65%">
                                                <div class="progress-bar">
                                                   <div class="progress-bar-percent">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="cause-progress__goal">
                                             <p>Raised: <span class="raised">$8500</span></p>
                                             <p>Goal: <span class="goal">$1,0000</span></p>
                                          </div>
                                       </div>
                                       <div class="cause__cta">
                                          <a href="{{ route('donate') }}" aria-label="donate now" title="donate now"
                                             class="btn--secondary">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
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
      <!-- ==== / cause slider section end ==== -->
      <!-- ==== team section start ==== -->
     <section class="team">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-lg-10 col-xl-6">
            <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
               <span class="sub-title"><i class="icon-donation"></i>Start donating to the poor</span>
               <h2 class="title-animation">Meet Our 
                  <span>Team</span> members
               </h2>
            </div>
         </div>
      </div>
     <div class="row gutter-40">

   @forelse ($teams as $team)

      <div class="col-12 col-sm-6 col-xl-3">
         <div class="team__single-wrapper">
            <div class="team__single">

               <div class="team__single-thumb">
                  <img 
                     src="{{ asset('storage/' . $team->image) }}" 
                     style="width:100%; height:260px; object-fit:cover;"
                  >

                  <div class="team__icons">
                     <div class="team__single__thumb-social">
                        <a href="https://wa.me/{{ $team->whatsapp }}" target="_blank">
                           <i class="fa-brands fa-whatsapp"></i>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="team__single-content">
                  <h6>{{ $team->name }}</h6>
                  <p>{{ $team->position }}</p>
               </div>

            </div>
         </div>
      </div>

   @empty
      <div class="col-12 text-center">
         <p>No team members yet</p>
      </div>
   @endforelse

</div>
      <div class="row">
         <div class="col-12">
            <div class="section__cta cta text-center">
               <a href="{{url('/team')}}" aria-label="our team" title="our team" class="btn--primary">View All Team Members
                  <i class="fa-solid fa-arrow-right"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="spade">
      <img src="{{ asset('assets/images/sprade-green.png') }} " alt="Image">
   </div>
</section>
      <!-- ==== / team section end ==== -->
      <!-- ==== help section start ==== -->
      <section class="help-three">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="help-three__inner">
                     <div class="section__header-secondary" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row gutter-30 align-items-center">
                           <div class="col-12 col-lg-8 col-xxl-7">
                              <div class="section__header mb-0">
                                 <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                                    people</span>
                                 <h2 class="title-animation">Helping each other can
                                    make the <span>world</span> better
                                 </h2>
                              </div>
                           </div>
                           <div class="col-12 col-lg-4 col-xxl-5">
                              <div class="help-cta">
                                 <a href="{{ route('about') }}" aria-label="our team" title="our team"
                                    class="btn--primary">More About Us<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="help-three__wrapper">
                        <div class="row gutter-60">
                           <div class="col-12 col-md-6 col-xxl-3">
                              <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000">
                                 <div class="help-three__thumb">
                                    <div class="thumb">
                                       <i class="icon-pack"></i>
                                    </div>
                                    <div class="help-three__tag">
                                       <h6>Step - 01</h6>
                                    </div>
                                 </div>
                                 <div class="help-three__content">
                                    <h6>Choose a Cause</h6>
                                    <p>
                                   Select a cause you are passionate about and want to support, 
                  from health, food, education, and more.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-xxl-3">
                              <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="300">
                                 <div class="help-three__thumb">
                                    <div class="thumb">
                                       <i class="icon-credit-card"></i>
                                    </div>
                                    <div class="help-three__tag">
                                       <h6>Step - 02</h6>
                                    </div>
                                 </div>
                                 <div class="help-three__content">
                                    <h6>Make a Donation</h6>
                                    <p> Contribute any amount you can. Every donation, big or small, 
                  helps us reach more people in need.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-xxl-3">
                              <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="600">
                                 <div class="help-three__thumb">
                                    <div class="thumb">
                                       <i class="icon-ship"></i>
                                    </div>
                                    <div class="help-three__tag">
                                       <h6>Step - 03</h6>
                                    </div>
                                 </div>
                                 <div class="help-three__content">
                                    <h6>We Deliver Support</h6>
                                    <p>Our team ensures your donation is used to provide help, 
                  resources, and support to those who need it most.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-xxl-3">
                              <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="help-three__thumb">
                                    <div class="thumb">
                                       <i class="icon-truck"></i>
                                    </div>
                                    <div class="help-three__tag">
                                       <h6>Step - 04</h6>
                                    </div>
                                 </div>
                                 <div class="help-three__content">
                                    <h6>See the Impact</h6>
                                    <p>Witness the difference your support makes in improving lives 
                  and building stronger communities.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <img src="{{ asset('assets/images/v-line.png') }}" alt="Image" class="v-line d-none d-xxl-block">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="help-three-bg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <img src="assets/images/bg-one.png" alt="Image" class="bg-help">
            <div class="poor-boy">
               <img src="{{ asset('assets/images/poor-boy.png') }}" alt="Image" class="poor">
               <img src="{{ asset('assets/images/shape-three.png') }}" alt="Image" class="shape">
            </div>
            <div class="parasuit">
               <img src="{{ asset('assets/images/parasuit.png') }}" alt="Image">
            </div>
         </div>
      </section>
      <!-- ==== / help section end ==== -->
      <!-- ==== partner section start ==== -->
      <div class="partner">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="partner__slider swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/one.png') }}" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/two.png') }}" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/three.png') }}" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/four.png') }}" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/five.png') }}" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/one.png') }}" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/two.png') }}" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/three.png') }}" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/four.png') }}" alt="Image">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner__slider-single">
                              <img src="{{ asset('assets/images/sponsor/five.png') }}" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== / partner section end ==== -->
      <!-- ==== counter section start ==== -->
      <section class="counter">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="counter__inner">
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1000">
                        <div class="thumb">
                           <i class="icon-support-hand"></i>
                        </div>
                        <div class="counter__content">
                           <h2><span class="odometer" data-odometer-final="40"></span><span class="prefix">+</span>
                           </h2>
                           <h5>Team member</h5>
                        </div>
                     </div>
                     <div class="divider"></div>
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="thumb">
                           <i class="icon-review"></i>
                        </div>
                        <div class="counter__content">
                           <h2><span class="odometer" data-odometer-final="80"></span>K<span class="prefix">+</span>
                           </h2>
                           <h5>Client's review</h5>
                        </div>
                     </div>
                     <div class="divider"></div>
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="thumb">
                           <i class="icon-documents"></i>
                        </div>
                        <div class="counter__content">
                           <h2><span class="odometer" data-odometer-final="2"></span>K<span class="prefix">+</span>
                           </h2>
                           <h5>Completed projects</h5>
                        </div>
                     </div>
                     <div class="divider"></div>
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                        <div class="thumb">
                           <i class="icon-award"></i>
                        </div>
                        <div class="counter__content">
                           <h2><span class="odometer" data-odometer-final="1"></span>K<span class="prefix">+</span>
                           </h2>
                           <h5>Winning award</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="poor">
            <img src="{{ asset('assets/images/poor-two.png') }}" alt="Image" class="parallax-image">
         </div>
         <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <img src="{{ asset('assets/images/cta/shape-left.png') }}" alt="Image" class="base-img">
         </div>
      </section>
      <!-- ==== / counter section end ==== -->
      <!-- ==== testimonial section start ==== -->
    <section class="testimonial-three">
   <div class="container">

      <!-- Section Header -->
      <div class="row justify-content-center">
         <div class="col-12 col-md-8 col-xl-7">
            <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
               <span class="sub-title">
                  <i class="icon-donation"></i>Voices of Impact
               </span>
               <h2 class="title-animation">
                  What Our <span>Volunteers</span> Say About Us
               </h2>
            </div>
         </div>
      </div>

      <!-- Slider -->
      <div class="row justify-content-center">
         <div class="col-12 col-lg-10 col-xl-9 col-xxl-12">
            <div class="testimonial-three__inner">
               <div class="testimonial-three__slider swiper">
                  <div class="swiper-wrapper">

                     <!-- Testimonial 1 -->
                     <div class="swiper-slide">
                        <div class="testimonial-three__single">
                           <div class="thumb">
                              <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image">
                              <div class="review">
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                              </div>
                           </div>
                           <div class="testimonial-three__content">
                              <div class="author-info">
                                 <div class="author-content">
                                    <h6>Grace Michael</h6>
                                    <p>Volunteer</p>
                                 </div>
                                 <div class="quote">
                                    <i class="icon-quotation-two"></i>
                                 </div>
                              </div>
                              <p>
                                 Volunteering here has been life-changing. Seeing the smiles on people's faces 
                                 reminds me that even small acts of kindness can make a huge difference.
                              </p>
                           </div>
                        </div>
                     </div>

                     <!-- Testimonial 2 -->
                     <div class="swiper-slide">
                        <div class="testimonial-three__single">
                           <div class="thumb">
                              <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image">
                              <div class="review">
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                              </div>
                           </div>
                           <div class="testimonial-three__content">
                              <div class="author-info">
                                 <div class="author-content">
                                    <h6>David John</h6>
                                    <p>Field Volunteer</p>
                                 </div>
                                 <div class="quote">
                                    <i class="icon-quotation-two"></i>
                                 </div>
                              </div>
                              <p>
                                 Being part of this foundation has given me purpose. We are not just helping 
                                 people—we are transforming lives and building hope for the future.
                              </p>
                           </div>
                        </div>
                     </div>

                     <!-- Testimonial 3 -->
                     <div class="swiper-slide">
                        <div class="testimonial-three__single">
                           <div class="thumb">
                              <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image">
                              <div class="review">
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                              </div>
                           </div>
                           <div class="testimonial-three__content">
                              <div class="author-info">
                                 <div class="author-content">
                                    <h6>Sarah Ahmed</h6>
                                    <p>Community Volunteer</p>
                                 </div>
                                 <div class="quote">
                                    <i class="icon-quotation-two"></i>
                                 </div>
                              </div>
                              <p>
                                 I have witnessed firsthand the impact of our work. From food distribution 
                                 to healthcare support, every effort truly changes lives.
                              </p>
                           </div>
                        </div>
                     </div>

                     <!-- Testimonial 4 -->
                     <div class="swiper-slide">
                        <div class="testimonial-three__single">
                           <div class="thumb">
                              <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image">
                              <div class="review">
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                              </div>
                           </div>
                           <div class="testimonial-three__content">
                              <div class="author-info">
                                 <div class="author-content">
                                    <h6>Daniel Okoro</h6>
                                    <p>Volunteer</p>
                                 </div>
                                 <div class="quote">
                                    <i class="icon-quotation-two"></i>
                                 </div>
                              </div>
                              <p>
                                 This organization is doing incredible work. I’m proud to be part of a team 
                                 that is committed to helping those in need every single day.
                              </p>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Navigation -->
      <div class="row">
         <div class="col-12">
            <div class="slider-navigation">
               <button type="button" class="prev-testimonial-three slider-btn">
                  <i class="fa-solid fa-arrow-left"></i>
               </button>
               <button type="button" class="next-testimonial-three slider-btn slider-btn-next">
                  <i class="fa-solid fa-arrow-right"></i>
               </button>
            </div>
         </div>
      </div>

   </div>

   <!-- Decorations -->
   <div class="spade">
      <img src="{{ asset('assets/images/community/spade.png') }}" alt="Image" class="base-img">
   </div>

   <div class="spade-green">
      <img src="{{ asset('assets/images/sprade-green.png') }}" alt="Image">
   </div>
</section>
      <!-- ==== / testimonial section end ==== -->
      <!-- ==== faq section start ==== -->
      <section class="faq">
         <div class="container">
            <div class="row align-items-center">
               {{-- <div class="col-12 col-lg-8 col-xl-6">
                  <div class="faq__content">
                     <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                        <h2 class="title-animation">Frequently <span>Asked</span>
                           Questions
                        </h2>
                     </div>
                     <div class="faq__content-inner cta" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="accordion" id="accordion">
                           <div class="accordion-item">
                              <h6 class="accordion-header" id="headingOne">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What kind of recipes can I find on your website?
                                 </button>
                              </h6>
                              <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne" data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                    <p>
                                       It is a long established fact that a reader will be distracted by
                                       the readable the a content of a page when looking at its layout.
                                       Many desktop publishing packages and web page editors.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h6 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Are the recipes suitable for beginners?
                                 </button>
                              </h6>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                    <p>
                                       It is a long established fact that a reader will be distracted by
                                       the readable the a content of a page when looking at its layout.
                                       Many desktop publishing packages and web page editors.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h6 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you offer cooking tips and techniques?
                                 </button>
                              </h6>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                    <p>
                                       It is a long established fact that a reader will be distracted by
                                       the readable the a content of a page when looking at its layout.
                                       Many desktop publishing packages and web page editors.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h6 class="accordion-header" id="headingFour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How frequently do you update your recipe collection?
                                 </button>
                              </h6>
                              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordion">
                                 <div class="accordion-body">
                                    <p>
                                       It is a long established fact that a reader will be distracted by
                                       the readable the a content of a page when looking at its layout.
                                       Many desktop publishing packages and web page editors.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> --}}
               <div class="col-12 col-lg-4 col-xl-5 offset-xl-1">
                  <div class="faq__thumb d-none d-lg-block">
                     <div class="faq__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <img src="{{ asset('assets/images/faq/thumb-lg.png') }}" alt="Image">
                        </div>
                        <div class="thumb-sm" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                           <img src="{{ asset('assets/images/faq/thumb-sm.png') }}" alt="Image">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape d-none d-lg-block">
            <img src="{{ asset('assets/images/faq/shape.png') }}" alt="Image">
         </div>
      </section>
      <!-- ==== / faq section end ==== -->
      <!-- ==== event section start ==== -->
      <section class="event">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-md-8 col-xl-7">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating to the poor
                        </span>
                     <h2 class="title-animation">Checkout our upcoming  <span>event</span> list</h2>
                  </div>
               </div>
            </div>
            <div class="row gutter-30">
               <div class="col-12 col-lg-6 col-xl-7">
                  <div class="event__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                     <div class="event__single van-tilt">
                        <div class="event__single-thumb">
                           <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image">
                        </div>
                        <div class="event__content">
                           <span>October 19, 2026</span>
                           <h4>
                           Educational support to students of Ovoko
                           </h4>
                           <p><i class="fa-solid fa-location-dot"></i> Ovoko town hall</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-6 col-xl-5">
                  <div class="event__single-wrapper" data-aos="fade-left" data-aos-duration="1000">
                     <div class="event__single event-single-alt van-tilt">
                        <div class="event__single-thumb">
                           <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image">
                        </div>
                        <div class="event__content">
                           <span>November 19, 2026</span>
                           <h4>
                          Health care outreach to people of Ovoko
                              
                           </h4>
                           <p><i class="fa-solid fa-location-dot"></i> Ovoko town hall</p>
                        </div>
                     </div>
                  </div>
                  <div class="event__single-wrapper" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                     <div class="event__single  event-single-alt van-tilt">
                        <div class="event__single-thumb">
                           <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="Image">
                        </div>
                        <div class="event__content">
                           <span>December 19, 2026</span>
                           <h4>
                         Educational support to students of Ovoko
                           </h4>
                           <p><i class="fa-solid fa-location-dot"></i> Ovoko town hall</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="section__cta cta text-center">
                     <a href="{{url('/beneficiaries')}}" aria-label="our events" title="our events" class="btn--primary">View
                        past events <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="spade">
            <img src="{{ asset('assets/images/blog/spade-base.png') }}" alt="Image" class="base-img">
         </div>
      </section>
      <!-- ==== / event section end ==== -->
      <!-- ==== contact section start ==== -->
      <section class="contact">
         <div class="container">
            <div class="row justify-content-end">
               <div class="col-12 col-md-10 col-xl-7">
                  <div class="contact__content">
                     <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating to the poor
                     </span>
                        <h2 class="title-animation">Send Us <span>message</span>
                           For donation!
                        </h2>
                     </div>
                     <div class="contact__form cta" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <form action="#" method="post">
                           <div class="input-group">
                              <div class="input-single">
                                 <input type="email" name="contact-email" id="contactEmail" placeholder="your email...">
                                 <i class="fa-solid fa-paper-plane"></i>
                              </div>
                              <div class="input-single">
                                 <input type="text" name="contact-number" id="contactNumber"
                                    placeholder="your phone...">
                                 <i class="fa-solid fa-phone"></i>
                              </div>
                           </div>
                           <div class="input-single">
                              <input type="text" name="contact-address" id="contactAddress"
                                 placeholder="your address...">
                              <i class="fa-solid fa-location-dot"></i>
                           </div>
                           <div class="input-single alter-input">
                              <textarea name="contact-message" id="contactMessage"
                                 placeholder="your message..."></textarea>
                              <i class="fa-solid fa-envelope"></i>
                           </div>
                           <div class="form-cta">
                              <button type="submit" aria-label="submit message" title="submit message"
                                 class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="contact-bg">
            <img src="{{ asset('assets/images/contact/contact-bg.png') }}" alt="Image" class="parallax-image">
         </div>
         <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <img src="{{ asset('assets/images/cta/shape-left.png') }}" alt="Image" class="base-img">
         </div>
      </section>



      <!-- ==== / contact section end ==== -->
      <!-- ==== footer start ==== -->
      @endsection
      