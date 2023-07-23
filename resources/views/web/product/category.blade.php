@extends('web.layouts.main')
@section('content')

<!-- START SHOP AREA -->
<section class="shop-area ptb-100">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
            <span class="top-title">Product's</span>
            <h2>Our Products</h2>
        </div>

        <div class="row products_page">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="category b-gray">
                    <h3 class="t-blue fonarto text-center m-0">Category</h3>
                    <ul>
                        <li>
                            <a href="{{ url('products') }}">All</a>
                        </li>

                        @foreach ($categories as $category)
                            <li class="<?= $category->slug==Request::segment(2)?'active':'' ?>"><a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a></li>    
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="inline-block-100 float-100">
                    <ul class="list">
                        @foreach ($list->get() as $product)
                            <li><div class="text"><a href="{{ url('product/'.$product->slug) }}">{{ $product->name }}</a></div></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SHOP AREA -->

@stop