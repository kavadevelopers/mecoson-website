@extends('web.layouts.main')
@section('content')

<!-- START PAGE TITLE AREA -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ $_title }}</h2>
            <ul>
                <li>
                    <a href="{{ url('home') }}">
                        Home 
                    </a>
                </li>

                <li class="active">{{ $_title }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- END PAGE TITLE AREA -->

<!-- START ABOUT AREA -->
<section class="about-area bg-color ptb-100">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-6">
                <div class="about-content mb-0">
                    <span class="top-title">About Us</span>
                    <h2>Tackle The Challenge Of Delivering Health Care</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi consectetur adipiscing elit incididunt labore dolore magna</p>

                    <ul>
                        <li>
                            <i class="bx bx-check"></i>
                            Consultations Wif Specialized Pediatricians
                        </li>
                        <li>
                            <i class="bx bx-check"></i>
                            A Wide Range Of Laboratory Studies
                        </li>
                        <li>
                            <i class="bx bx-check"></i>
                            Ultrasound Examination
                        </li>
                        <li>
                            <i class="bx bx-check"></i>
                            ECG, Echocardiography
                        </li>
                    </ul>

                    <a href="department-slider.html" class="default-btn">
                        Our Departments
                    </a>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6">
                <div class="about-img">
                    <div class="video-wrap">
                        <a href="https://www.youtube.com/watch?v=TdK0jRFpWPQ" class="popup-youtube video-btn">
                            <i class="bx bx-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END ABOUT AREA -->

<!-- START COUNTER AREA CSS -->
<section class="counter-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <i class="bx bx-user-circle"></i>
                    
                    <h2>
                        <span class="odometer" data-count="540">00</span> 
                        <span class="target">+</span>
                    </h2>

                    <p>Expert Doctors</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <i class="bx bx-check-circle"></i>
                
                    <h2>
                        <span class="odometer" data-count="990">00</span> 
                        <span class="target">+</span>
                    </h2>

                    <p>Successful Story</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <i class="bx bx-trophy"></i>
                    
                    <h2>
                        <span class="odometer" data-count="3500">00</span> 
                        <span class="traget">+</span>
                    </h2>

                    <p>Global Presence</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <i class="bx bx-certification"></i>

                    <h2>
                        <span class="odometer" data-count="54">00</span> 
                        <span class="traget">+</span>
                    </h2>

                    <p>Experiences</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END COUNTER AREA CSS -->

<!-- START WHY CHOOSE AREA -->
<section class="why-choose-area bg-color ptb-100">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
            <span class="top-title">Why Choose Us</span>
            <h2>Why We Are Different</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
        </div>
    
        <div class="tab choose-tab">
            <ul data-aos="fade-up" data-aos-duration="1600" class="tabs">
                <li>
                    Certified Doctor's
                </li>
                <li>
                    Success Treatment
                </li>
                <li>
                    Modern Technology
                </li>
            </ul>
            
            <div data-aos="fade-up" data-aos-duration="2000" class="why-choose-wrap">
                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="why-choose-img bg-1">
                                    <div class="video-wrap">
                                        <a href="https://www.youtube.com/watch?v=TdK0jRFpWPQ" class="popup-youtube video-btn">
                                            <i class="bx bx-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="about-content why-choose-content">
                                    <span class="top-title">Certified Doctor's</span>
                                    <h2>Tackle The Challenge Of Delivering Health Care</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque quibusdam fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint dolores, voluptatum consequatur ad est enim fuga natus non necessitatibus.</p>

                                    <ul>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            Consultations Wif Specialized Pediatricians
                                        </li>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            A wide Range Of Laboratory Studies
                                        </li>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            Ultrasound Examination
                                        </li>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            ECG, Echocardiography
                                        </li>
                                    </ul>
                                    
                                    <a class="default-btn" href="contact-style-one.html">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-content why-choose-content thard">
                                    <span class="top-title">Success Treatment</span>
                                    <h2>Tackle The Challenge Of Delivering Health Care</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque quibusdam fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint dolores, voluptatum consequatur ad est enim fuga natus non necessitatibus.</p>

                                    <ul>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            Consultations Wif Specialized Pediatricians
                                        </li>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            A wide Range Of Laboratory Studies
                                        </li>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            Ultrasound Examination
                                        </li>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            ECG, Echocardiography
                                        </li>
                                    </ul>
                                    
                                    <a class="default-btn" href="about-style-one.html">
                                        More Learn About
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="why-choose-img bg-2">
                                    <div class="video-wrap">
                                        <a href="https://www.youtube.com/watch?v=TdK0jRFpWPQ" class="popup-youtube video-btn">
                                            <i class="bx bx-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="why-choose-img bg-3">
                                    <div class="video-wrap">
                                        <a href="https://www.youtube.com/watch?v=TdK0jRFpWPQ" class="popup-youtube video-btn">
                                            <i class="bx bx-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="about-content why-choose-content">
                                    <span class="top-title">Modern Technology</span>
                                    <h2>Tackle The Challenge Of Delivering Health Care</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque quibusdam fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint dolores, voluptatum consequatur ad est enim fuga natus non necessitatibus.</p>

                                    <ul>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            Consultations Wif Specialized Pediatricians
                                        </li>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            A wide Range Of Laboratory Studies
                                        </li>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            Ultrasound Examination
                                        </li>
                                        <li>
                                            <i class="bx bx-check"></i>
                                            ECG, Echocardiography
                                        </li>
                                    </ul>
                                    
                                    <a class="default-btn" href="about-style-one.html">
                                        More Learn About
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END WHY CHOOSE AREA -->

<!-- START DOCTORS AREA -->
<section class="doctor-area pt-100 pb-70">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
            <span class="top-title">Our Doctor's</span>
            <h2>Our Expert Doctor's</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
        </div>

        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-4 col-sm-6">
                <div class="single-doctor">
                    <img src="{{ url('themes/web/assets/img/doctor/1.jpg') }}" alt="Image">

                    <div class="doctor-content">
                        <h3>Dr. Anthony</h3>
                        <span>Surgeon, Сardiologist</span>
                    </div>

                    <ul>
                          <li>
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-4 col-sm-6">
                <div class="single-doctor">
                    <img src="{{ url('themes/web/assets/img/doctor/2.jpg') }}" alt="Image">

                    <div class="doctor-content">
                        <h3>Dr. Anna</h3>
                        <span>Internist, General Practitioner</span>
                    </div>

                    <ul>
                          <li>
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="single-doctor">
                    <img src="{{ url('themes/web/assets/img/doctor/3.jpg') }}" alt="Image">

                    <div class="doctor-content">
                        <h3>Dr. Andrew</h3>
                        <span>Internist, Orthopedic Surgeon</span>
                    </div>

                    <ul>
                          <li>
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END DOCTORS AREA -->

@stop