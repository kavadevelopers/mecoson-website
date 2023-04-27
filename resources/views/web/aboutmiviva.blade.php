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
<section class="about-area ptb-100 pb-70">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-12">
                <div class="about-content mb-0">
                    <span class="top-title">About Us</span>
                    <h2>Mission, Vision & Values</h2>
                    <p>MECOSON LABS, A leading Manufacturer, Marketing Company, Exporter/supplier, PCD Pharma Franchise of Medical and Healthcare Products based in India that believes in 'Serving Life' that values affordability, accessibility and quality.</p>
                    <p>Wide range of products Pharmaceutical Finished Formulations, Nutraceuticals and Dietary Supplements, Medical & Surgical Disposables & Instruments, Laboratory Products, APIs/Chemicals and all other products for Medical & Healthcare. </p> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END ABOUT AREA -->

<!-- END SERVICES AREA -->
<section class="services-area bg-color pt-100 pb-70">
    <div class="container">
        
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <h3>Our Vision</h3>
                    <p>To be world's most trusted and preferred company which provides all products and services for Healthy Life.<br><br><br></p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <h3>Our Mission</h3>
                    <p>To become the preferred global supplier to all of our customers worldwide and achieve sustained growth, through consistent delivery of innovative, customer-centric, world-class quality products and services.</p>
                </div>
            </div>
            
            <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <h3>Integrity</h3>
                    <p>We uphold our reputation for integrity in the marketplace and provide an ethical work environment for all our employees. We do the right thing each time we face a tough decision.<br><br></p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <h3>Diversity</h3>
                    <p>We pursue diversity in our workforce, our markets, and our services because we recognize that optimum solutions require different backgrounds, new perspectives, and open minds. We leverage diversity through inclusion of employees, empowering them to shape the future of the corporation through collaboration and innovation.</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <h3>Innovation</h3>
                    <p>Through inventive processes and unique solutions, we provide unmatched value to our customers. We foster creative work environments where we always challenge ourselves to improve our processes and procedures.<br><br><br></p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <h3>Sustainbility</h3>
                    <p>In all that we do, we are conscious of the impact that our work has on the environment. We help our customers do the same by providing clean, efficient, healthy, and effective solutions on all of our projects.<br><br><br></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SERVICES AREA -->

@stop