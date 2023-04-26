@extends('web.layouts.main')
@section('content')

<!-- START SHOP AREA -->
<section class="shop-area ptb-100">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
            <span class="top-title">Product's</span>
            <h2>Our Products</h2>
        </div>

        <div class="row">
            @if ($list->count() > 0)
                @foreach ($list->get() as $product)
                    <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-4 col-sm-6">
                        <div class="single-shop">
                            <a href="{{ url('product/'.$product->slug) }}">
                                <div class="shop-img">
                                    <div class="shop-img-1">
                                        <img src="{{ CommonHelper::getProductImage($product->image) }}" alt="Image">
                                        <div class="shop-img-2">
                                            <img src="{{ CommonHelper::getProductImage($product->image) }}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </a>
        
                            <div class="shop-content">
                                <span class="title">{{ $product->_category->name }}</span>
                                <h3>{{ $product->name }}</h3>
                                @if ($product->amount > 0)
                                    <span class="price">₹{{ CommonHelper::moneyFormatIndia($product->price) }}</span>
                                @endif
                            </div>
        
                            <div class="purchase-bar">
                                <ul>
                                    <li>
                                        <a href="{{ url('product/'.$product->slug) }}">
                                            <i class="bx bx-search-alt"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-4 col-sm-12"></div>
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-4 col-sm-12">
                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_oga1x3jk.json"  background="transparent"  speed="1" loop  autoplay></lottie-player>
                </div>
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-4 col-sm-12"></div>
            @endif
            





            
        </div>
    </div>
</section>
<!-- END SHOP AREA -->

@stop