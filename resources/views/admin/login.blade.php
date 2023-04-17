<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ isset($_title) ? $_title.' | ':'' }}{{ CommonHelper::setting('app_name') }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ url('themes/logos/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/icon/icofont/css/icofont.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/css/style.css') }}">
    <script type="text/javascript" src="{{ url('themes/admin/bower_components/jquery/js/jquery.min.js') }}"></script>
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login-block" style="background: #fafafa;">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material" method="post" action="#" id="login">
                            <div class="text-center">
                                <img src="{{ url('themes/logos/logo.png') }}" style="max-width:120px" alt="logo.png">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Sign In</h3>
                                        </div>
                                        <div class="col-md-12">

                                            <div class="alert alert-danger icons-alert" style="margin-bottom: 0px; display: none;" id="error">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top: 9px;">
                                                 <i class="icofont icofont-close-line-circled"></i>
                                                </button>
                                                <p style="font-weight: bold; margin: 9px 0;" id="error-message">
                                                </p>
                                            </div>

                                            <div class="alert alert-success icons-alert" style="margin-bottom: 0px; display: none;" id="success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top: 9px;">
                                                 <i class="icofont icofont-close-line-circled"></i>
                                                </button>
                                                <p style="font-weight: bold; margin: 9px 0;">
                                                    Login Successfull...
                                                </p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="username" class="form-control" required placeholder="Username">
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required placeholder="Password">
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary d-">
                                                {{-- <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label> --}}
                                            </div>
                                            <div class="forgot-phone text-right f-right">
                                                {{-- <a href="#" class="text-right f-w-600"> Forgot Password?</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" style="font-size: 18px" id="sign-in-button">
                                                <span id="sign-in">Sign in</span>
                                                <span id="sign-in-loader" style="display: none;">
                                                    <i class="fa fa-circle-o-notch fa-spin"></i> Checking...
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <script>
        $(function(){
            $(document).on('submit','#login', function(event){
                event.preventDefault();   
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url : "{{ url(CommonHelper::admin('login')) }}",
                    dataType: "JSON",
                    data : $(this).serialize(),
                    cache : false,
                    beforeSend: function() {
                        $("#sign-in").hide();
                        $("#sign-in-loader").show();
                        $("#sign-in-button").attr("disabled",true);       
                    },      
                    success: function(response){
                        if(response._return){
                            $("#error").hide();
                            $("#success").show();
                            $("#sign-in-loader").html('<i class="fa fa-circle-o-notch fa-spin"></i> Redirecting...');
                            setTimeout(function(){
                                window.location = "{{ url(CommonHelper::admin('dashboard')) }}";
                            },1000);
                        }else{
                            $("#error-message").html(response.msg);
                            $("#error").show();
                            $("#success").hide();
                            $("#sign-in").show();
                            $("#sign-in-loader").hide();
                            $("#sign-in-button").removeAttr("disabled"); 
                        }
                    }
                });
            });
        })
    </script>

    <script type="text/javascript" src="{{ url('themes/admin/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('themes/admin/bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('themes/admin/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ url('themes/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ url('themes/admin/bower_components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ url('themes/admin/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ url('themes/admin/assets/js/common-pages.js') }}"></script>
</body>

</html>
