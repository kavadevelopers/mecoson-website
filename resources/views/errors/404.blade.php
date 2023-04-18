@extends('web.layouts.main')
@section('content')

<!-- Start 404 Error -->
<div class="error-area ptb-100">
    <div class="error-content-wrap">
        <img data-aos="fade-up" data-aos-duration="1200" src="{{ url('themes/web/assets/img/404.jpg') }}" alt="Image">
        <h3 data-aos="fade-up" data-aos-duration="1600" >Page Not Found</h3>
        <p data-aos="fade-up" data-aos-duration="2000" >We’re sorry, the page you have looked for does not exist in our database! Maybe go to our home page or try to use a search?</p>
        <a data-aos="fade-up" data-aos-duration="2400" href="{{ url('home') }}" class="default-btn page-btn active">
            Return To Home
        </a>
    </div>
</div>
<!-- End 404 Error -->


@stop