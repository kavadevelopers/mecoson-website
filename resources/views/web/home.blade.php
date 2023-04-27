@extends('web.layouts.main')
@section('content')


    <!-- START HERO SLIDER AREA -->
    <section class="hero-slider-area">
        <div class="hero-slider-wrap owl-carousel owl-theme">
            @foreach ($banners as $key => $banner)
                <div class="slider-item">
                    <img src="{{ CommonHelper::getHomeBanner($banner->image) }}" />
                </div>    
            @endforeach
        </div>
    </section>
    <!-- END HERO SLIDER AREA -->

    <!-- START ABOUT AREA -->
    <section class="about-area pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-6">
                    <div class="about-content">
                        <span class="top-title">About Us</span>
                        <h2>Welcome to <br><span>Mecoson Labs</span></h2>
                        <p>We, Mesocon Labs are glad to represent ourselves as a leading pharma manufacturer, exporters, contract manufacturer and global sourcing company in the world of pharmaceutical. We believe in providing the best cutomer service, in term of Quality, Cost and Timelines.</p>

                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                Pharmaceutical Finished Formulations 
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Medical & Surgical Products
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Active Pharmaceutical Ingredients (APIs)
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Nutraceuticals
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Contract Manufacturing
                            </li>
                        </ul>

                        <a href="{{ url('about-us') }}" class="default-btn">
                            More About Us
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="features-content about-home-block">
                        <div class="row">
                            <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-6 col-sm-6">
                                <div class="single-features">
                                    <i class="flaticon-first-aid-kit"></i>
                                    <h3>Pharmaceutical Manufacturer</h3>
                                    <p>With a skilled workforce we provide pharma manufacturing facilities for tablet, capsules and syrups.</p>
                                    <a href="{{ url('about-us') }}" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-6 col-sm-6">
                                <div class="single-features">
                                    <i class="flaticon-medicine"></i>
                                    <h3>PCD pharma Franchise</h3>
                                    <p>A growing PCD Pharma company & committed to provide high-quality healthcare services.</p>
                                    <a href="{{ url('about-us') }}" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-6 col-sm-6">
                                <div class="single-features">
                                    <i class="flaticon-paper-plane"></i>
                                    <h3>Exporters</h3>
                                    <p>With an astounding emergence in the global market we become fastest growing exporters.</p>
                                    <a href="{{ url('about-us') }}" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                
                            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6 col-sm-6">
                                <div class="single-features">
                                    <i class="flaticon-personal-information"></i>
                                    <h3>Contract Manufacturer</h3>
                                    <p>We offer contract manufacturing for the wide range of pharma products.<br><br></p>
                                    <a href="{{ url('about-us') }}" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                
                            
                
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT AREA -->

    <!-- START COUNTER AREA CSS -->
    <section class="counter-area pb-70">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-4 col-sm-6">
                    <div class="single-counter">
                        <i class="bx bx-user-circle"></i>
                        
                        <h2>
                            <span class="odometer" data-count="250">00</span> 
                            <span class="target">+</span>
                        </h2>

                        <p>Customers</p>
                    </div>
                </div>

                

                <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-4 col-sm-6">
                    <div class="single-counter">
                        <i class="bx bx-certification"></i>

                        <h2>
                            <span class="odometer" data-count="825">00</span> 
                            <span class="traget">+</span>
                        </h2>

                        <p>Products</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-4 col-sm-6">
                    <div class="single-counter">
                        <i class="bx bx-check-circle"></i>
                    
                        <h2>
                            <span class="odometer" data-count="23">00</span> 
                            <span class="target">+</span>
                        </h2>

                        <p>Countries</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COUNTER AREA CSS -->

    <!-- END SERVICES AREA -->
    <section class="services-area bg-color pt-100 pb-70">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <span class="top-title">Our Services</span>
                <h2>Our Healthcare <span>Products & Services</span></h2>
            </div>
            
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-medicine"></i>
                        <h3>Pharmaceutical Finished Formulations</h3>
                        <p>We are a leading name in the field of Export, Manufacturing and Supplier of Pharmaceutical Finished Formulation across the global.</p>
                        <a href="{{ url('products') }}" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-eye"></i>
                        <h3>Active Pharmaceutical Ingredients (APIs)</h3>
                        <p>With using deep technical strengths in the development of complex APIs we consistently deliver high-quality APIs.</p>
                        <a href="{{ url('products') }}" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-heart"></i>
                        <h3>Nutraceuticals Supplements<br><br></h3>
                        <p>We, Mecoson Labs offer cost-effective and the quality nutraceuticals to enhance your wellbeing & general Health.</p>
                        <a href="{{ url('products') }}" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="2200" class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-dental-care"></i>
                        <h3>Contract Manufacturing</h3>
                        <p>We provide contract manufacturing service for the Domestic as well as Export Markets as per our cutomer needs.</p>
                        <a href="{{ url('products') }}" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-neurology"></i>
                        <h3>Medical & Surgical Products</h3>
                        <p>We offer innovative products and services in Medical and Surgical consumables to improve your outcomes.</p>
                        <a href="{{ url('products') }}" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>
                
                

                <div data-aos="fade-up" data-aos-duration="2200" class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-stethoscope"></i>
                        <h3>Healthcare Services</h3>
                        <p> We have a powerful element of social responsibility inscribed in its values and its' concern for the society beyound the business motives.</p>
                        <a href="{{ url('products') }}" class="read-more">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICES AREA -->

    <!-- START WHY CHOOSE AREA -->
    <section class="why-choose-area ptb-100">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <span class="top-title">Why Choose Us</span>
                <h2>Why We Are Different</h2>
            </div>
        
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-2 col-sm-3">
                    <div class="single-services">
                        <i class="flaticon-brain"></i>
                        <h3>One Stop Center</h3>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-2 col-sm-3">
                    <div class="single-services">
                        <i class="flaticon-medicine"></i>
                        <h3>Wide Range of Products</h3>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-2 col-sm-3">
                    <div class="single-services">
                        <i class="flaticon-paper-plane"></i>
                        <h3>Timely Delievery</h3>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-2 col-sm-3">
                    <div class="single-services">
                        <i class="flaticon-envelope"></i>
                        <h3>Certified Company</h3>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-2 col-sm-3">
                    <div class="single-services">
                        <i class="flaticon-call-1"></i>
                        <h3>Global Supplier</h3>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-2 col-sm-3">
                    <div class="single-services">
                        <i class="flaticon-personal-information"></i>
                        <h3>Reliable <br><br></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WHY CHOOSE AREA -->

    <!-- START TESTIMONIALS AREA -->
    <section class="testimonial-area pt-100 pb-70">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <span class="top-title">Testimonials</span>
                <h2>What Our Client’s Say</h2>
            </div>

            <div class="testimonial-wrap owl-carousel owl-theme">
                <div data-aos="fade-up" data-aos-duration="1400" class="single-testimonial">
                    <img src="{{ url('themes/web/assets/img/testimonial/1.jpg') }}" alt="img">

                    <p>I came in contact with several pharmaceutical companies and I must say, partinering with Mecoson Labs Pvt. Ltd. Is the best decision comparing to other companies. Because this company is not only empathic  but consider their duty to provide high-quality products with affordable range.</p>

                    <h3>Garry Daire</h3>
                </div>
                
                <div data-aos="fade-up" data-aos-duration="1600" class="single-testimonial">
                    <img src="{{ url('themes/web/assets/img/testimonial/3.jpg') }}" alt="img">
                    <p>Very happy to be a customer of Mecoson Labs and very happy with their services. They offer a comprehensive package of services which meet all my expectations.<br><br></p>
                    <h3>Melanie Hall</h3>
                </div>

                <div data-aos="fade-up" data-aos-duration="1800" class="single-testimonial">
                    <img src="{{ url('themes/web/assets/img/testimonial/2.jpg') }}" alt="img">
                    <p>We're very greatful that we found this website Since it has fulfil our pharmaceutical requirements more convinient with all quality products. We'll definitely recommanded Mecoson Labs.<br><br></p>
                    <h3>Hazel Walden</h3>
                </div>

                <div data-aos="fade-up" data-aos-duration="1800" class="single-testimonial">
                    <img src="{{ url('themes/web/assets/img/testimonial/4.jpg') }}" alt="img">
                    <p>Great Place to work with..  <br><br><br><br></p>
                    <h3>Jack J. Ashton</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- End TESTIMONIALS AREA -->


@stop