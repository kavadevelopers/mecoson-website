@extends('web.layouts.main')
@section('content')

    <!-- START PAGE TITLE AREA -->
    <div class="page-title-area bg-4">
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

    <section class="contact-form-area ptb-100">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-12">
                    <div class="get-in-touch">
                        <p>{!! $item->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop