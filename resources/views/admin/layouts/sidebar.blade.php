<style type="text/css">
    .new-mainmenu{
        float: left;
        width: 240px;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    .new-mainmenu::-webkit-scrollbar {
      display: none;
    }
    .pcoded-inner-navbar {
        height: calc(100% - 80px);
    }
</style>

<script type="text/javascript">
    $(document).ready(function($) {
        target = $('.pcoded-inner-navbar .kava-active');
        $('.pcoded-inner-navbar').stop().animate({
                scrollTop: $(target).offset().top - 100
        }, 600, function() {
                //location.hash = target;
        });
    });
</script>


<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar new-mainmenu" style="overflow-y: scroll;">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="{{ CommonHelper::adminMenu(2,['dashboard'])[2] }}">
                <a href="{{ CommonHelper::admin('dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>

            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu {{ CommonHelper::adminMenu(2,['enquiries'])[2] }}">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                        <span class="pcoded-mtext">Enquiries</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ CommonHelper::adminMenu(3,['contact'],'enquiries')[1] }}">
                            <a href="{{ CommonHelper::admin('enquiries/contact') }}">
                                <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                <span class="pcoded-mtext">Contact</span>
                            </a>
                        </li>
                        <li class="{{ CommonHelper::adminMenu(3,['product'],'enquiries')[1] }}">
                            <a href="{{ CommonHelper::admin('enquiries/product') }}">
                                <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                <span class="pcoded-mtext">Product</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <li class="{{ CommonHelper::adminMenu(2,['products'])[2] }}">
                <a href="{{ CommonHelper::admin('products') }}">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Products</span>
                </a>
            </li>

            @if (CommonHelper::hasPermission([2,3]) || Auth::guard('admin')->user()->admin_type == '0')
                <li class="{{ CommonHelper::adminMenu(2,['settings'])[2] }}">
                    <a href="{{ CommonHelper::admin('settings') }}">
                        <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                        <span class="pcoded-mtext">Settings</span>
                    </a>
                </li>
            @endif

            

            <li class="">
                <a href="{{ CommonHelper::admin('logout') }}">
                    <span class="pcoded-micon"><i class="fa fa-sign-out"></i></span>
                    <span class="pcoded-mtext">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>