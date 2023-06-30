@extends('web.layouts.main')
@section('content')

<!-- START PAGE TITLE AREA -->
<div class="page-title-area bg-12">
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
<section class="about-area ptb-100">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-12">
                <div class="about-content mb-0">
                    <span class="top-title">About Us</span>
                    <h2>Global Presence</h2>
                    <p>Global presence in all our current and potential markets is an essential element of our business strategy. We are supplying our products in more than 30 countries worldwide and increasing the numbers day by day. Below is the list of some countries where we are supplying our products. </p>
                    <p>Sri Lanka, UAE, Kenya, Zimbabwe, Uganda, Ivoire Coast, Ghana, Nepal, Australia, Singapore, Malaysia, USA, Jamaica, Peru, Seychelles, Maldives, Saudi Arabia, Kuwait, Qatar, Iraq, Germany, Netherlands, Tanzania, Namibia, Botswana, Ethiopia, Etc. </p> 
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-12">
                <img src="{{ url('themes/web/img/world_blank.jpg') }}" />
            </div>
        </div>
    </div>
</section>
<!-- END ABOUT AREA -->

@stop