@extends('web.layouts.main')
@section('content')

<!-- START PAGE TITLE AREA -->
<div class="page-title-area bg-7">
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

<section class="about-area pt-100 bg-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content mb-0">
                    <h2>Make your career thrive.</h2>
                    <p>Empower yourself with the multifaceted work environment and get the chance to be a part of a workforce. Our employees are our assets and we are always in need of good employees who are looking for challenging & worthwhile career.</p>
                    <p>At Mecoson Labs, we seek to discover and champion the latest, most promising advancements against the world’s greatest challenges in international business.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-area ptb-100">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-6">
                <div class="why-choose-img">
                    <div class="video-wrap">
                        <img src="{{ url('themes/web/img/career-banner.jpg') }}" />
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6">
                <div class="get-in-touch">
                    <p>If you are interested in a career with our company, please send us your CV and we will respond to you as soon as we can.</p>
                    <p><br></p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="bx bx-location-plus"></i>
                            </div>
                            <span>Address:</span>
                            {!! nl2br(CommonHelper::setting('web_address')) !!}
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bx bx-envelope"></i>
                            </div>
                            <span>Email:</span>
                            {{ CommonHelper::setting('web_email') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@stop