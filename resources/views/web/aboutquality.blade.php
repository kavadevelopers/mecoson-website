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
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-12">
                <div class="about-content mb-0">
                    <span class="top-title">About Us</span>
                    <h2>Quality Assurance</h2>
                    <p>In the context of an increasingly challenging healthcare environment, we are reinforcing our culture, boosting our skills and building a diverse workforce. Quality in everything we do is integral to all our working practices. It is critical to the success of our business and our long term sustainability and profitability.</p>
                    <h3>Why We Are Different</h3>
                    <p>Products we supply are in compliance with global standards and which is globally approved and acceptable. Also, Mecoson Labs follows the standards in manufacturing which are given by FDA Approved facilities. We understand the need for high-quality drugs at convinient price and this is the reason, we are committed to fulfilling this demand with our quality products.</p> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END ABOUT AREA -->

@stop