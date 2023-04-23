@extends('web.layouts.main')
@section('content')

<!-- START SHOP DETAILS AREA -->
<section class="shop-details-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-6 col-md-12">
                <div class="product-details-image">
                    <img src="{{ CommonHelper::getProductImage($product->image) }}" alt="Image">
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6 col-md-12">
                <div class="product-details-desc">
                    <h3>{{ $product->name }}</h3>

                    @if ($product->price > 0)
                        <div class="price">
                            <span class="new-price">₹{{ CommonHelper::moneyFormatIndia($product->price) }}</span>
                            {{-- <span class="old-price">$80.00</span> --}}
                        </div>    
                    @endif

                    <p>{{ nl2br($product->short_description) }}</p>

                    {{-- <div class="custom-payment-options">
                        <span>Share Now:</span>

                        <div class="payment-methods">
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                            <a href="#">
                                <i class="bx bxl-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="bx bxl-youtube"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-12 col-md-12">
                <div class="tab products-details-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="tabs">
                                <li>
                                    <a href="#">
                                        Description
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <div class="products-details-tab-content">
                                        {!! $product->long_description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SHOP DETAILS AREA -->

<!-- START CONTACT FORM AREA --> 
<section class="contact-form-area ptb-100">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
            <h2>Drop Us A Enquiry</h2>
        </div>
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-12">
                <div class="contact-form">
                    <form method="post" action="{{ url('product-enquiry') }}" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Your Phone</label>
                                    <input type="text" name="phone" maxlength="10" minlength="10" class="form-control numbers" placeholder="Phone" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" readonly value="{{ $product->name }}">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="message" class="form-control" cols="30" rows="8" placeholder="Message" required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>  
                    </form>
                </div>    
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT FORM AREA -->

@stop