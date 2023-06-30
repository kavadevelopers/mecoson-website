@extends('web.layouts.main')
@section('content')

<!-- START PAGE TITLE AREA -->
<div class="page-title-area bg-6">
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
            @foreach ($list as $item)
                <div data-aos="fade-up" class="col-lg-3 col-sm-6">
                    <div class="single-services">
                        {{-- <i class="fa fa-building"></i> --}}
                        <h3>{{ $item->item }}</h3>
                        <a href="{{ url('uploads/cms/downloads/'.$item->value) }}" class="read-more" download="{{ $item->item.'.'.explode('.',$item->value)[2] }}">
                            Download
                        </a>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
</section>
<!-- END SERVICES AREA -->

@stop