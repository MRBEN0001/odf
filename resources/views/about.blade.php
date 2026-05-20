@extends('layouts.guest')
@section('content')
<style>
   #mission2 .content-wrapper {
    max-height: none !important;
    height: auto !important;
    overflow: visible !important;
    padding-bottom: 30px;
}
</style>
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="common-banner__content text-center">
                    <span class="sub-title"><i class="icon-donation"></i>
                     {{-- Start donating to the poor --}}
                  </span>
                    <h2 class="title-animation">About Us</h2>
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
    <section class="difference-two">
        <div class="container">
            <div class="row gutter-40 align-items-center">
                <div class="col-12 col-lg-4 col-xxl-5 d-none d-lg-block">
                    <div class="difference-two__thumb-wrapper">
                        <div class="difference-two__thumb">
                            <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                                <img src="{{ asset('assets/images/difference/thumb-sm.png') }}" alt="Image">
                                <div class="grid-line">
                                    <img src="{{ asset('assets/images/odf-logo.jpeg') }}"
                                        alt="{{ config('app.name') }} logo"
                                        style="width: 80px; border-radius: 2rem; height: auto; display: block; margin: 0 auto;">

                                    <img src="{{ asset('assets/images/help/grid.png') }}" alt="Image" class="base-img">
                                </div>
                                <div class="video-btn-wrapper">
                                    <a href="https://www.youtube.com/watch?v=vqg4LhUGg4U" target="_blank"
                                        title="video Player" class="open-video-popup">
                                        <i class="icon-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">


                                <img src="{{ asset('assets/images/odf-logo.jpeg') }}" alt="{{ config('app.name') }} logo"
                                    style="width: 300px; border-radius: 2rem; height: auto; display: block; margin: 0 auto;">

                                {{-- <img src="{{ asset('assets/images/difference/thumb-lg.png') }}" alt="Image"> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xxl-7">
                    <div class="difference-two__content">
                        {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating to the poor
                        </span>
                        <h2 class="title-animation">Donate, <span>Support</span> to Save <span>Lifes</span>.
                        </h2>
                        <p>
                            Ovoko Development Foundation (ODF) is a community-driven, non-profit
                            organization committed to advancing sustainable development, social welfare,
                            and economic empowerment in Ovoko community and its surrounding areas.
                            Founded on the principles of unity, collective responsibility, and progressive
                            leadership, ODF serves as a platform for mobilizing local and diaspora
                            resources to address critical development challenges and improve the quality
                            of life of it's people.
                        </p> --}}
                        <div class="difference-two__inner cta">
                            <div class="difference-two__inner-content">
                                <div class="difference-two__tab">
                                    <div class="difference-two__tab-btns">
                                        <button class="difference-two__tab-btn active" data-target="#mission"
                                            aria-label="mission" title="mission">Our Mission</button>
                                        <button class="difference-two__tab-btn" data-target="#vision" aria-label="vision"
                                            title="vision">Our Vision</button>
                                        <button class="difference-two__tab-btn" data-target="#excellence"
                                            aria-label="excellence" title="excellence">Core Values</button>
                                    </div>
                                    <div class="difference-two__tab-content">
                                        <div class="difference-two__content-single" id="mission">
                                            <p>
                                                To mobilize people, resources, and partnerships to drive sustainable
                                                community development through social welfare, economic empowerment,
                                                education, and infrastructure initiatives, while fostering unity,
                                                accountability,
                                                and inclusive participation among Ovoko indigenes at home and in the
                                                diaspora.
                                            </p>
                                        </div>
                                        <div class="difference-two__content-single" id="vision">
                                            <p>
                                                To build a prosperous, inclusive, and sustainable Ovoko community that
                                                serves as a model for grassroots-driven development, social cohesion, and
                                                economic empowerment in Africa and beyond.
                                            </p>
                                        </div>
                                        <div class="difference-two__content-single" id="excellence">
                                            <ul>
                                                <li><i class="fa-solid fa-check"></i>
                                                    Integrity & Accountability
                                                </li>
                                                <li><i class="fa-solid fa-check"></i>
                                                    Community-Driven Development
                                                </li>
                                                <li><i class="fa-solid fa-check"></i>Unity & Inclusiveness</li>
                                                <li><i class="fa-solid fa-check"></i>Excellence & Impact</li>
                                                <li><i class="fa-solid fa-check"></i>Innovation & Adaptability</li>
                                                <li><i class="fa-solid fa-check"></i>Partnership & Collaboration</li>
                                                <li><i class="fa-solid fa-check"></i>Service & Social Responsibility</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- <div class="difference-two__card">
                                <div class="card-group">
                                    <div class="thumb">
                                        <i class="icon-donation-card"></i>
                                    </div>
                                    <div class="content">
                                        <h6>Donate Now</h6>
                           <p>$40,456</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-group card-group-alt">
                                    <div class="thumb">
                                        <i class="icon-fund"></i>
                                    </div>
                                    <div class="content">
                                        <h6>Funds Needed</h6>
                           <p>$1,540,456</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>




                        <div class="difference-two__inner cta">
                            <div class="difference-two__inner-content">
                                <div class="difference-two__tab">
                                    <div class="difference-two__tab-btns">
                                        <button class="difference-two__tab-btn active" data-target="#mission2"
                                            aria-label="mission" title="mission">ORGANIZATION PROFILE</button>
                                        {{-- <button class="difference-two__tab-btn" data-target="#vision2" aria-label="vision"
                              title="vision">Our Vision</button>
                           <button class="difference-two__tab-btn" data-target="#excellence2"
                              aria-label="excellence" title="excellence">Core Values</button> --}}
                                    </div>
                                    <div class="difference-two__tab-content">
        <div class="difference-two__content-single" id="mission2">
    <div class="content-wrapper">
        
        <h6> <strong>NAME</strong> </h6>
        <p><strong>Ovoko Development Foundation (ODF)</strong></p>

        <h6><strong>LEGAL STATUS</strong></h6>
        <p>Registered Incorporated Trustee under the Corporate Affairs Commission (CAC), Nigeria.</p>

        <h6><strong>ABOUT US</strong></h6>
        <p>
            Ovoko Development Foundation (ODF) is a community-driven, non-profit organization committed to advancing sustainable development, social welfare, and economic empowerment in Ovoko community and its surrounding areas. Founded on the principles of unity, collective responsibility, and progressive leadership, ODF serves as a platform for mobilizing local and diaspora resources to address critical development challenges and improve the quality of life of its people.
        </p>

        <h6><strong>OUR VISION</strong></h6>
        <p>
            To build a prosperous, inclusive, and sustainable Ovoko community that serves as a model for grassroots-driven development, social cohesion, and economic empowerment in Africa and beyond.
        </p>

        <h6><strong>OUR MISSION</strong></h6>
        <p>
            To mobilize people, resources, and partnerships to drive sustainable community development through social welfare, economic empowerment, education, and infrastructure initiatives, while fostering unity, accountability, and inclusive participation among Ovoko indigenes at home and in the diaspora.
        </p>

        <h6><strong>CORE VALUES</strong></h6>
        <ul class="values-list">
            <li><strong>Integrity & Accountability:</strong> We uphold transparency, ethical leadership, and responsible stewardship of all resources.</li>
            <li><strong>Community-Driven Development:</strong> We prioritize solutions that are designed, owned, and sustained by the Ovoko people.</li>
            <li><strong>Unity & Inclusiveness:</strong> We foster collaboration across age, gender, and geographic boundaries, including both local and diaspora communities.</li>
            <li><strong>Excellence & Impact:</strong> We are committed to delivering measurable, sustainable, and high-impact interventions.</li>
            <li><strong>Innovation & Adaptability:</strong> We embrace modern tools, technology, and creative approaches to solve local challenges.</li>
            <li><strong>Partnership & Collaboration:</strong> We actively engage governments, NGOs, private sector actors, and international development institutions.</li>
            <li><strong>Service & Social Responsibility:</strong> We exist to improve lives, especially for the most vulnerable in our community.</li>
        </ul>

        <h6><strong>FOCUS</strong> </h6>
        <p>
            <strong>Primary:</strong> Ovoko Community, Enugu State, Nigeria<br>
            <strong>Secondary:</strong> Surrounding rural communities (scalable across South-East Nigeria)
        </p>

        <h6><strong>STRATEGIC PILLARS: CORE AREAS OF INTERVENTION</strong></h6>

        <h6>PILLAR 1: HEALTH & SOCIAL WELFARE</h6>
        <p><strong>Focus:</strong> Expanding access to quality healthcare and strengthening community support systems</p>
        <ul>
            <li>Medical outreaches and rural health programmes</li>
            <li>Health awareness campaigns (maternal, child health, and noncommunicable diseases)</li>
            <li>Emergency support for vulnerable individuals and households</li>
        </ul>

        <h6>PILLAR 2: EDUCATION & HUMAN CAPITAL DEVELOPMENT</h6>
        <p><strong>Focus:</strong> Building knowledge, skills, and future leaders</p>
        <ul>
            <li>Scholarships and bursaries</li>
            <li>School infrastructure support</li>
            <li>Mentorship programmes</li>
            <li>Digital literacy and skills development initiatives</li>
        </ul>

        <h6>PILLAR 3: ECONOMIC EMPOWERMENT & LIVELIHOODS</h6>
        <p><strong>Focus:</strong> Promoting income generation and financial independence</p>
        <ul>
            <li>SME support and cooperative schemes</li>
            <li>Agricultural development programmes</li>
            <li>Skills acquisition and vocational training</li>
            <li>Access to micro-financing and enterprise support</li>
        </ul>

        <h6>PILLAR 4: INFRASTRUCTURE & COMMUNITY DEVELOPMENT</h6>
        <p><strong>Focus:</strong> Enhancing physical and social infrastructure</p>
        <ul>
            <li>Advocacy for rural roads, water supply, and electrification</li>
            <li>Development of community halls, schools, libraries, and health centres</li>
            <li>Smart village and digital community initiatives</li>
        </ul>

        <h6>PILLAR 5: GOVERNANCE, DIASPORA ENGAGEMENT & INSTITUTIONAL STRENGTHENING</h6>
        <p><strong>Focus:</strong> Strengthening systems, leadership, and global engagement</p>
        <ul>
            <li>Promoting responsive leadership, good governance, and accountability</li>
            <li>Policy advocacy for sustainable community development</li>
            <li>Diaspora investment platforms and global partnerships</li>
            <li>Community peacebuilding and conflict resolution mechanisms</li>
        </ul>

        <h6>OUR APPROACH</h6>
        <ol>
            <li><strong>Community-Led Solutions</strong> – All projects are designed with direct input and participation from beneficiaries.</li>
            <li><strong>Partnership-Driven Implementation</strong> – We collaborate with Government agencies, NGOs and development partners, Private sector investors, and Diaspora networks.</li>
            <li><strong>Transparency & Accountability</strong> – We maintain strong governance systems, financial controls, and reporting mechanisms to ensure responsible resource management.</li>
        </ol>

        <h6>KEY STRENGTHS</h6>
        <ul>
            <li>Strong grassroots legitimacy and community trust</li>
            <li>Active and resourceful diaspora network</li>
            <li>Structured governance framework backed by a formal constitution</li>
            <li>Proven capacity to mobilize community participation and resources</li>
        </ul>

        <h6>PARTNERSHIP OPPORTUNITIES</h6>
        <p>Ovoko Development Foundation welcomes collaboration in:</p>
        <ul>
            <li>Grant funding and donor-supported programmes</li>
            <li>Technical assistance and capacity development</li>
            <li>Impact investment and social enterprise initiatives</li>
            <li>Public-private partnerships (PPP)</li>
            <li>Research and development collaborations</li>
        </ul>

    </div>
</div>

                                    </div>
                                    {{-- <div class="difference-two__card">
                     <div class="card-group">
                        <div class="thumb">
                           <i class="icon-donation-card"></i>
                        </div>
                        <div class="content">
                           <h6>Donate Now</h6>
                           <p>$40,456</p>
                        </div>
                     </div>
                     <hr>
                     <div class="card-group card-group-alt">
                        <div class="thumb">
                           <i class="icon-fund"></i>
                        </div>
                        <div class="content">
                           <h6>Funds Needed</h6>
                           <p>$1,540,456</p>
                        </div>
                     </div>
                  </div> --}}
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="spade">
                    <img src="{{ asset('assets/images/spade-green-two.png') }}" alt="Image">
                </div>
    </section>


    <!-- ==== / cta section end ==== -->
    <!-- ==== team section start ==== -->
    {{-- <section class="team">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-lg-10 col-xl-6">
            <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
               <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                  people</span>
               <h2 class="title-animation">Meet Our Volunteer
                  <span>Team</span> members
               </h2>
            </div>
         </div>
      </div>
      <div class="row gutter-40">
         <div class="col-12 col-sm-6 col-xl-3">
            <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
               <div class="team__single van-tilt">
                  <div class="team__single-thumb">
                     <a href="team-details.html">
                        <img src="{{ asset('assets/images/team/one.png') }}" alt="Image">
                     </a>
                     <div class="team__icons">
                        <div class="team__single-content__icon">
                           <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="team__single__thumb-social">
                           <ul>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-facebook-f"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-instagram"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-behance"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="team__single-content">
                     <h6><a href="team-details.html">Michel Fokluz</a></h6>
                     <p>Volunteer</p>
                  </div>
               </div>
            </div>
         </div>
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
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-facebook-f"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-instagram"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-behance"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="team__single-content">
                     <h6><a href="team-details.html">Arian Drobloas</a></h6>
                     <p>Volunteer</p>
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
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-facebook-f"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-instagram"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-behance"></i>
                                 </a>
                              </li>
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
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-facebook-f"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-instagram"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="index.html">
                                    <i class="fa-brands fa-behance"></i>
                                 </a>
                              </li>
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
            <div class="section__cta cta text-center">
               <a href="our-team.html" aria-label="our team" title="our team" class="btn--primary">View All
                  <i class="fa-solid fa-arrow-right"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="spade">
      <img src="{{ asset('assets/images/sprade-green.png') }} " alt="Image">
   </div>
</section> --}}
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
