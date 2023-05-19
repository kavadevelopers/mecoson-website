@extends('web.layouts.main')
@section('content')



<section class="contact-form-area pb-70 pt-100">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-12">
            <div class="contact-form">
                <h3>Drop Us A Message</h3>
                <form method="post" action="" >
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
</section>
<!-- END CONTACT FORM AREA -->

@stop