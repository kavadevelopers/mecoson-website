@extends('web.layouts.main')
@section('content')

<!-- START PAGE TITLE AREA -->
<div class="page-title-area bg-5">
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
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-12">
                <div class="about-content mb-0">
                    <span class="top-title">About Us</span>
                    <h2>History & Development</h2>
                    <p>Our history began in the year 2010 with the start of a first company named Mecoson Labs as a local pharmaceutical trading company. Through the years, our business has developed from a trading company to leading global company with the help of our visionary leaders and expert team. The company is having privilege of availing his valuable guidance from time to time.</p>
                    <p>Step by step the company has progressed very fast and expanded its business from trading and marketing to manufacturing and exporting of pharmaceutical products and become one of the leading pharmaceutical company in India and made its name in Medical and Healthcare Sector. </p> 
                    <p>Utilizing experience and success in the domestic market, in the year 2017, we have extended our business from domestic market to international market. We have expanded our range of products which includes Pharmaceutical Formulations, Dental Products and Instruments, Medical and Surgical Disposables, APIs and Chemicals and Contract Manufacturing.</p>
                </div>
            </div>
            <div class="about-time-line">
                <h3 class="text-center">Milestones Reached</h3>
                <ul style="margin-top: 50px;">
                    <li style="--accent-color:#41516C">
                        <div class="date">2010</div>
                        <div class="title">Wholesale Trading of Pharma Products</div>
                    </li>
                    <li style="--accent-color:#FBCA3E">
                        <div class="date">2014</div>
                        <div class="title">Established Marketing Company</div>
                    </li>
                    <li style="--accent-color:#E24A68">
                        <div class="date">2017</div>
                        <div class="title">Started Export of Pharma Products</div>
                    </li>
                    <li style="--accent-color:#1B5F8C">
                        <div class="date">2021</div>
                        <div class="title">Manufacturing Unit of Tablet, Capsule & Syrup</div>
                    </li>
                </ul>
            </div>
            {{-- <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-12">
                <img src="{{ url('themes/web/img/about-history.jpg') }}" />
            </div> --}}
        </div>
    </div>
</section>

<!-- END ABOUT AREA -->

@stop