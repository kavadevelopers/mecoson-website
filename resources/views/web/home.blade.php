@extends('web.layouts.main')
@section('content')


    <!-- START HERO SLIDER AREA -->
    <section class="hero-slider-area">
        <div class="hero-slider-wrap owl-carousel owl-theme">
            <div class="slider-item slider-item-bg-1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text one">
                                <span class="top-title">Welcome To Medic</span>
                                <h1>Specializing Cosmetic Medical Surgery</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil architecto laborum eaque! Deserunt maxime, minus quas molestiae reiciendis.</p>

                                <div class="slider-btn">
                                    <a class="default-btn" href="appointment.html">
                                        Book An Appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item slider-item-bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text two">
                                <span class="top-title">Welcome To Medic</span>
                                <h1>Exceptional Medical Specialty Healthcare</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil architecto laborum eaque! Deserunt maxime, minus quas molestiae reiciendis.</p>
                                
                                <div class="slider-btn">
                                    <a class="default-btn" href="appointment.html">
                                        Book An Appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO SLIDER AREA -->

    <!-- END FEATURES AREA -->
    <section class="features-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-3 col-sm-6">
                    <div class="single-features">
                        <i class="flaticon-doctor"></i>
                        <h3>Skilled Doctors</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="department-details-right-sidebar.html" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-3 col-sm-6">
                    <div class="single-features">
                        <i class="flaticon-personal-information"></i>
                        <h3>Quality Services</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="department-details-right-sidebar.html" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-3 col-sm-6">
                    <div class="single-features">
                        <i class="flaticon-rate"></i>
                        <h3>Positive Reviews</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="department-details-right-sidebar.html" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="2400" class="col-lg-3 col-sm-6">
                    <div class="single-features">
                        <i class="flaticon-first-aid-kit"></i>
                        <h3>Latest Equipment</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="department-details-right-sidebar.html" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FEATURES AREA -->

    <!-- START ABOUT AREA -->
    <section class="about-area-two bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-6">
                    <div class="about-img-two">
                        <img decoding="async" src="{{ url('themes/web/assets/img/about-img.jpg') }}" alt="Image">
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6">
                    <div class="about-content-two">
                        <span class="top-title">About Us</span>
                        <h2>Tackle The Challenge Of Delivering Health Care</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi consectetur adipiscing elit incididunt labore dolore magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi consectetur adipiscing elit incididunt labore dolore magna.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi consectetur adipiscing elit incididunt labore dolore magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi consectetur adipiscing elit incididunt labore dolore magna.</p>

                        <!-- Button Part Start --> 
                        <a href="shop-grid.html" class="default-btn">
                            Our Product
                        </a>
                        <!-- Button Part End -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT AREA -->
    
    <!-- START VIDEO AREA -->  
    <section data-aos="fade-up" data-aos-duration="1200" class="about-video-area ptb-100">
        <div class="container">
            <div class="video-section-title">
                <h2>See How We Provide Services to Our Clients</h2>
            </div>

            <div class="row">
                <div class="about-video-button">
                    <a href="https://www.youtube.com/watch?v=TdK0jRFpWPQ" class="popup-youtube video-btn">
                        <i class="bx bx-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END VIDEO AREA -->

    <!-- END SERVICES AREA -->
    <section class="services-area bg-color pt-100 pb-70">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <span class="top-title">Our Services</span>
                <h2>Our Healthcare <span>Services</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
            </div>
            
            <div class="department-wrap owl-carousel owl-theme">
                <div data-aos="fade-up" data-aos-duration="1200" class="single-services">
                    <i class="flaticon-medicine"></i>
                    <h3>Medicine</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit, unde fugiat autem earum luptatem sequuntur.</p>

                    <a href="department-details-right-sidebar.html" class="read-more">
                        Read More
                    </a>
                </div>

                <div data-aos="fade-up" data-aos-duration="1400" class="single-services">
                    <i class="flaticon-neurology"></i>
                    <h3>Neurology</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit, unde fugiat autem earum luptatem sequuntur.</p>

                    <a href="department-details-right-sidebar.html" class="read-more">
                        Read More
                    </a>
                </div>

                <div data-aos="fade-up" data-aos-duration="1600" class="single-services">
                    <i class="flaticon-eye"></i>
                    <h3>Eye Care</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit, unde fugiat autem earum luptatem sequuntur.</p>

                    <a href="department-details-right-sidebar.html" class="read-more">
                        Read More
                    </a>
                </div>

                <div data-aos="fade-up" data-aos-duration="1800" class="single-services">
                    <i class="flaticon-heart"></i>
                    <h3>Cardiology</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit, unde fugiat autem earum luptatem sequuntur.</p>

                    <a href="department-details-right-sidebar.html" class="read-more">
                        Read More
                    </a>
                </div>

                <div data-aos="fade-up" data-aos-duration="2000" class="single-services">
                    <i class="flaticon-dental-care"></i>
                    <h3>Dental Care</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit, unde fugiat autem earum luptatem sequuntur.</p>

                    <a href="department-details-right-sidebar.html" class="read-more">
                        Read More
                    </a>
                </div>

                <div data-aos="fade-up" data-aos-duration="2200" class="single-services">
                    <i class="flaticon-lungs"></i>
                    <h3>Pulmonary</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit, unde fugiat autem earum luptatem sequuntur.</p>

                    <a href="department-details-right-sidebar.html" class="read-more">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICES AREA -->

    <!-- START DOCTORS AREA -->
    <section class="doctor-area pt-100 pb-70">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <span class="top-title">Our Doctor's</span>
                <h2>Our Expert Doctor's</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
            </div>

            <div class="doctor-wrap owl-carousel owl-theme">
                <div data-aos="fade-up" data-aos-duration="1200" class="single-doctor">
                    <img src="{{ url('themes/web/assets/img/doctor/4.jpg') }}" alt="Image">

                    <div class="doctor-content">
                        <h3>Dr. Anna</h3>
                        <span>Internist</span>
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

                <div data-aos="fade-up" data-aos-duration="1400" class="single-doctor">
                    <img src="{{ url('themes/web/assets/img/doctor/5.jpg') }}" alt="Image">

                    <div class="doctor-content">
                        <h3>Dr. Dilken</h3>
                        <span>Orthopedic</span>
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

                <div data-aos="fade-up" data-aos-duration="1600" class="single-doctor">
                    <img src="{{ url('themes/web/assets/img/doctor/6.jpg') }}" alt="Image">

                    <div class="doctor-content">
                        <h3>Dr. Jack</h3>
                        <span>Surgeon</span>
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

                <div data-aos="fade-up" data-aos-duration="1800" class="single-doctor">
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
    </section>
    <!-- END DOCTORS AREA -->

    <!-- START TESTIMONIALS AREA -->
    <section class="testimonial-page bg-color pt-100 pb-70">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <span class="top-title">Testimonials</span>
                <h2>What Our Client’s Say</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
            </div>

            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-6 col-md-6">
                    <div class="single-testimonial">
                        <img src="{{ url('themes/web/assets/img/testimonial/1.jpg') }}" alt="img">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing and Quis suspendisse typesetting ipsum dolor sit amet, consectetur magna aliqua. Lorem Ipsum is simply ipsum dolor</p>

                        <ul>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>	

                        <h3>William Robart</h3>
                        <span>Consulting Doctor</span>
                    </div>
                </div>
                
                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-6 col-md-6">
                    <div class="single-testimonial">
                        <img src="{{ url('themes/web/assets/img/testimonial/2.jpg') }}" alt="img">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing and Quis suspendisse typesetting ipsum dolor sit amet, consectetur magna aliqua. Lorem Ipsum is simply ipsum dolor</p>

                        <ul>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>	

                        <h3>Jeson Smith</h3>
                        <span>Dental Hygienist</span>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6 col-md-6">
                    <div class="single-testimonial">
                        <img src="{{ url('themes/web/assets/img/testimonial/5.jpg') }}" alt="img">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing and Quis suspendisse typesetting ipsum dolor sit amet, consectetur</p>

                        <ul>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>

                        <h3>Jivle jeck</h3>
                        <span>Consulting</span>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-6 col-md-6">
                    <div class="single-testimonial rsm-0">
                        <img src="{{ url('themes/web/assets/img/testimonial/6.jpg') }}" alt="img">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing and Quis suspendisse typesetting ipsum dolor sit amet, consectetur</p>

                        <ul>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>

                        <h3>Kilva jeck</h3>
                        <span>Consulting</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End TESTIMONIALS AREA -->

    <!-- START SHOP AREA -->
    <section class="shop-area ptb-100">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <span class="top-title">Product's</span>
                <h2>Our Featured Products</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
            </div>

            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-4 col-sm-6">
                    <div class="single-shop">
                        <a href="shop-details.html">
                            <div class="shop-img">
                                <div class="shop-img-1">
                                    <img src="{{ url('themes/web/assets/img/shop/1.jpg') }}" alt="Image">
                                    <div class="shop-img-2">
                                        <img src="{{ url('themes/web/assets/img/shop/1.jpg') }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="shop-content">
                            <span class="title">Armani</span>
                            <h3>Digital BP Monitor</h3>
                            <span class="price">$399.00</span>
                        </div>

                        <div class="purchase-bar">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-search-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-loader"></i>
                                    </a>
                                </li>
                            </ul>

                            <a href="cart.html" class="default-btn">
                                Add To Cart
                            </a>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-4 col-sm-6">
                    <div class="single-shop">
                        <a href="shop-details.html">
                            <div class="shop-img">
                                <div class="shop-img-1">
                                    <img src="{{ url('themes/web/assets/img/shop/2.jpg') }}" alt="Image">
                                    <div class="shop-img-2">
                                        <img src="{{ url('themes/web/assets/img/shop/2.jpg') }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="shop-content">
                            <span class="title">Canada</span>
                            <h3>Non-Touch Thermometer</h3>
                            <span class="price">$590.00</span>
                        </div>

                        <div class="purchase-bar">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-search-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-loader"></i>
                                    </a>
                                </li>
                            </ul>

                            <a href="cart.html" class="default-btn">
                                Add To Cart
                            </a>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-4 col-sm-6">
                    <div class="single-shop">
                        <a href="shop-details.html">
                            <div class="shop-img">
                                <div class="shop-img-1">
                                    <img src="{{ url('themes/web/assets/img/shop/3.jpg') }}" alt="Image">
                                    <div class="shop-img-2">
                                        <img src="{{ url('themes/web/assets/img/shop/3.jpg') }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="shop-content">
                            <span class="title">Moshi</span>
                            <h3>Patient Monitor</h3>
                            <span class="price">$450.00</span>
                        </div>

                        <div class="purchase-bar">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-search-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-loader"></i>
                                    </a>
                                </li>
                            </ul>

                            <a href="cart.html" class="default-btn">
                                Add To Cart
                            </a>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-4 col-sm-6">
                    <div class="single-shop">
                        <a href="shop-details.html">
                            <div class="shop-img">
                                <div class="shop-img-1">
                                    <img src="{{ url('themes/web/assets/img/shop/4.jpg') }}" alt="Image">
                                    <div class="shop-img-2">
                                        <img src="{{ url('themes/web/assets/img/shop/4.jpg') }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="shop-content">
                            <span class="title">Armani</span>
                            <h3>Object Thermometer</h3>
                            <span class="price">$120.00</span>
                        </div>

                        <div class="purchase-bar">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-search-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-loader"></i>
                                    </a>
                                </li>
                            </ul>

                            <a href="cart.html" class="default-btn">
                                Add To Cart
                            </a>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-4 col-sm-6">
                    <div class="single-shop">
                        <a href="shop-details.html">
                            <div class="shop-img">
                                <div class="shop-img-1">
                                    <img src="{{ url('themes/web/assets/img/shop/5.jpg') }}" alt="Image">
                                    <div class="shop-img-2">
                                        <img src="{{ url('themes/web/assets/img/shop/5.jpg') }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="shop-content">
                            <span class="title">Turnout</span>
                            <h3>Esperanza Inhaler</h3>
                            <span class="price">$370.00</span>
                        </div>

                        <div class="purchase-bar">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-search-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-loader"></i>
                                    </a>
                                </li>
                            </ul>

                            <a href="cart.html" class="default-btn">
                                Add To Cart
                            </a>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="2200" class="col-lg-4 col-sm-6">
                    <div class="single-shop">
                        <a href="shop-details.html">
                            <div class="shop-img">
                                <div class="shop-img-1">
                                    <img src="{{ url('themes/web/assets/img/shop/6.jpg') }}" alt="Image">
                                    <div class="shop-img-2">
                                        <img src="{{ url('themes/web/assets/img/shop/6.jpg') }}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="shop-content">
                            <span class="title">Swiss</span>
                            <h3>BP Machine</h3>
                            <span class="price">$399.00</span>
                        </div>

                        <div class="purchase-bar">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-search-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-loader"></i>
                                    </a>
                                </li>
                            </ul>

                            <a href="cart.html" class="default-btn">
                                Add To Cart
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- END SHOP AREA -->

    <!-- START BLOG AREA -->
    <section class="blog-area bg-color pt-100 pb-70">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <span class="top-title">News</span>
                <h2>Our Latest News</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
            </div>

            <div class="blog-wrap owl-carousel owl-theme">
                <div data-aos="fade-up" data-aos-duration="1400" class="single-blog">
                    <a href="blog-details-right-sidebar.html">
                        <img src="{{ url('themes/web/assets/img/blog/4.jpg') }}" alt="Image">
                    </a>
                
                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="#">Admin</a>
                            </li>
                            <li>
                                01 / 03 / 2023
                            </li>
                        </ul>

                        <a href="blog-details-right-sidebar.html">
                            <h3>Aspirin For Prevention</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt recusandae suscipit commodi quis molestiae. Nihil magnam iure iste</p>

                        <a href="blog-details-right-sidebar.html" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1600" class="single-blog">
                    <a href="blog-details-right-sidebar.html">
                        <img src="{{ url('themes/web/assets/img/blog/5.jpg') }}" alt="Image">
                    </a>
                    
                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="#">Admin</a>
                            </li>
                            <li>
                                02 / 03 / 2023
                            </li>
                        </ul>

                        <a href="blog-details-right-sidebar.html">
                            <h3>New Operating Suites</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt recusandae suscipit commodi quis molestiae. Nihil magnam iure iste</p>

                        <a href="blog-details-right-sidebar.html" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1800" class="single-blog">
                    <a href="blog-details-right-sidebar.html">
                        <img src="{{ url('themes/web/assets/img/blog/6.jpg') }}" alt="Image">
                    </a>
                    
                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="#">Admin</a>
                            </li>
                            <li>
                                03 / 03 / 2023
                            </li>
                        </ul>
                    
                        <a href="blog-details-right-sidebar.html">
                            <h3>Medical Specialty Health</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt recusandae suscipit commodi quis molestiae. Nihil magnam iure iste</p>

                        <a href="blog-details-right-sidebar.html" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="2000" class="single-blog">
                    <a href="blog-details-right-sidebar.html">
                        <img src="{{ url('themes/web/assets/img/blog/3.jpg') }}" alt="Image">
                    </a>
                    
                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="#">Admin</a>
                            </li>
                            <li>
                                03 / 03 / 2023
                            </li>
                        </ul>
                    
                        <a href="blog-details-right-sidebar.html">
                            <h3>A Heading Presence</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt recusandae suscipit commodi quis molestiae. Nihil magnam iure iste</p>

                        <a href="blog-details-right-sidebar.html" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG AREA -->


@stop