@extends('web.layouts.main')
@section('content')

<!-- START PAGE TITLE AREA -->
<div class="page-title-area bg-3">
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

<!-- END SERVICES AREA -->
<section class="services-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Company Documents</h2>
        </div>
        
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <i class="fa fa-building"></i>
                    <h3>Company Profile</h3>
                    <a href="{{ url('uploads/downloads/company-profile.pdf') }}" class="read-more" download>
                        Download
                    </a>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <i class="fa fa-list"></i>
                    <h3>Product List</h3>
                    <a href="{{ url('uploads/downloads/product-list.pdf') }}" class="read-more" download>
                        Download
                    </a>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <i class="fa fa-book"></i>
                    <h3>Product Brochure</h3>
                    <a href="{{ url('uploads/downloads/product-brochure.pdf') }}" class="read-more" download>
                        Download
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SERVICES AREA -->

@stop