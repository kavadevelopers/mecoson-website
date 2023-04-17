<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ isset($_title) ? $_title.' | ':'' }}{{ CommonHelper::setting('app_name') }}</title>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Kava Developers">
        <meta name="keywords" content="Kava Developers">
        <meta name="author" content="Kava Developers">
        <!-- Favicon icon -->
        <link rel="icon" href="{{ url('themes/logos/favicon.png') }}" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/bootstrap/css/bootstrap.min.css') }} ">
        <!-- feather Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/icon/feather/css/feather.css') }} ">

        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
        <!-- feather Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/icon/feather/css/feather.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/icon/icofont/css/icofont.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/icon/font-awesome/css/font-awesome.min.css') }}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{ url('themes/admin/bower_components/bootstrap-daterangepicker/css/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ url('themes/admin/bower_components/datepicker/datepicker3.css') }}">
        
        <!-- PNotify -->
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/pnotify/css/pnotify.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/pnotify/css/pnotify.brighttheme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/pnotify/css/pnotify.buttons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/pnotify/css/pnotify.history.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/pnotify/css/pnotify.mobile.css') }}">
        
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/bower_components/sweetalert/css/sweetalert.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/croppie/croppie.css') }}">
        <!-- Select 2 css -->
        <link rel="stylesheet" href="{{ url('themes/admin/bower_components/select2/css/select2.min.css') }}">

        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/css/style.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/css/jquery.mCustomScrollbar.css') }} ">

        <script type="text/javascript" src="{{ url('themes/admin/bower_components/jquery/js/jquery.min.js') }}"></script>

        <link rel="stylesheet" type="text/css" href="{{ url('themes/admin/assets/photoswipe/photoswipe.css') }} ">

        @include('admin.layouts.style')
    </head>
    <body>
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


        {{-- <div class="ajaxLoader">
            
        </div> --}}

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header" >
                    <div class="navbar-wrapper">
    
                        <div class="navbar-logo" >
                            <a class="mobile-menu" id="mobile-collapse" href="javascript:;">
                                <i class="feather icon-menu"></i>
                            </a>
                            <a href="{{ url(CommonHelper::admin('dashboard')) }}">
                                <img class="img-fluid" src="{{ url('themes/logos/logo-head.png') }}" alt="Theme-Logo">
                            </a>
                            <a class="mobile-options">
                                <i class="feather icon-more-horizontal"></i>
                            </a>
                        </div>
    
                        <div class="navbar-container container-fluid">
                            <ul class="nav-right">
                                <li class="user-profile header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{ CommonHelper::getAdminProfileImage() }}" class="img-radius" alt="">
                                            <span>{{ CommonHelper::getAdmin()->name }}</span>
                                            <i class="feather icon-chevron-down"></i>
                                        </div>
                                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <li style="padding: 0;">
                                                <a href="{{ CommonHelper::admin('profile') }}" class="dis-block" style="padding: 0.7em 20px;">
                                                    <i class="feather icon-user"></i> Profile
                                                </a>
                                            </li>
                                            <li style="padding: 0;">
                                                <a href="{{ CommonHelper::admin('logout') }}" class="dis-block" style="padding: 0.7em 20px;">
                                                    <i class="feather icon-log-out"></i> Logout
                                                </a>
                                            </li>
                                        </ul>
    
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <!-- Sidebar -->
                        @include('admin.layouts.sidebar')
                        <!-- End sidebar -->

                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                


            </div>
        </div>


        <script type="text/javascript" src="{{ url('themes/admin/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/popper.js/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/modernizr/js/modernizr.js') }}"></script>

        <script src="{{ url('themes/admin/assets/js/pcoded.min.js') }}"></script>
        <script src="{{ url('themes/admin/assets/js/vartical-layout.min.js') }}"></script>
        <script src="{{ url('themes/admin/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/assets/js/script.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/assets/js/SmoothScroll.js') }}"></script>

        <!-- bootstrap-datepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <script src="{{ url('themes/admin/bower_components/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ url('themes/admin/bower_components/datepicker/bootstrap-datepicker.js') }}"></script>

        <script src="{{ url('themes/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('themes/admin/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('themes/admin/assets/pages/data-table/js/jszip.min.js') }}"></script>
        <script src="{{ url('themes/admin/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
        <script src="{{ url('themes/admin/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
        <script src="{{ url('themes/admin/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ url('themes/admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ url('themes/admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ url('themes/admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('themes/admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        
        <!-- pnotify js -->
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/pnotify/js/pnotify.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/pnotify/js/pnotify.desktop.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/pnotify/js/pnotify.buttons.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/pnotify/js/pnotify.confirm.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/pnotify/js/pnotify.callbacks.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/pnotify/js/pnotify.animate.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/pnotify/js/pnotify.history.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/pnotify/js/pnotify.mobile.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/pnotify/js/pnotify.nonblock.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/bower_components/sweetalert/js/sweetalert.min.js') }}"></script>

        <script src="{{ url('themes/admin/bower_components/select2/js/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/assets/croppie/croppie.js') }}"></script>

        <script type="text/javascript" src="{{ url('themes/admin/assets/photoswipe/photoswipe.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('themes/admin/assets/photoswipe/photoswipe-ui-default.min.js') }}"></script>

        <script type="text/javascript" src="{{ url('themes/js/master.js') }}"></script>

        

        @include('admin.layouts.script')
        @include('admin.layouts.modals')

        <script type="text/javascript">
            @if (Session::has('error'))
                PNOTY('{{ Session::get("error") }}','error');
            @endif
            @if (Session::has('success'))
                PNOTY('{{ Session::get("success") }}','success');
            @endif
        </script>
    </body>
</html>

        

        

