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

<!-- START CONTACT FORM AREA --> 
<section class="contact-form-area ptb-100">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
            <h2>Get In Touch</h2>
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repellendus molestiae, neque earum magnam enim, magni maiores laudantium ratione libero sapiente eum molestias.</p> --}}
        </div>
        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-6">
                <div class="get-in-touch">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="bx bx-location-plus"></i>
                            </div>
                            <span>Address:</span>
                            {{ CommonHelper::setting('web_address') }}
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bx bx-envelope"></i>
                            </div>
                            <span>Email:</span>
                            {{ CommonHelper::setting('web_email') }}
                        </li>
                        <li>
                            <div class="icon">
                                <i class="bx bx-phone-call"></i>
                            </div>
                            <span>Phone:</span>
                            {{ CommonHelper::setting('web_mobile') }}
                        </li>
                    </ul>
                    
                    <!-- START MAP AREA -->
                    <div data-aos="fade-up" data-aos-duration="1600" class="contact-map">
                        <iframe src="{{ CommonHelper::setting('web_google_map_url') }}" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- END MAP AREA -->
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6">
                <div class="contact-form">
                    <h3>Drop Us A Message</h3>
                    <form method="post" action="" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label>Your Phone</label>
                                    <input type="text" name="phone" maxlength="10" minlength="10" class="form-control numbers" placeholder="Phone" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
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