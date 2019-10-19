<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daren's Movie</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/admin_template/img/favicon.ico">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/admin_template/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="/admin_template/css/font-awesome.min.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="/admin_template/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/admin_template/css/animate.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="/admin_template/css/notika-custom-icon.css">

    <link rel="stylesheet" href="/admin_template/css/bootstrap-select/bootstrap-select.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="/admin_template/css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/admin_template/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/admin_template/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/admin_template/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/admin_template/js/vendor/modernizr-2.8.3.min.js"></script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
</head>

<body>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="/admin"><img src="/admin_template/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item nc-al"><a href="/logout" ><span>Logout <i class="notika-icon notika-next"></i></span></a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Movies</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="/admin/create">Create New Movie</a></li>
                                        <li><a href="/admin">List Of Movie</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-form"></i> Movies</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="/admin/create">Create New Movie</a>
                                </li>
                                <li><a href="/admin">List Of Movies</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

    @yield('content')

    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="/admin_template/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="/admin_template/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="/admin_template/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/admin_template/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/admin_template/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/admin_template/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/admin_template/js/meanmenu/jquery.meanmenu.js"></script>

    <script src="/admin_template/js/bootstrap-select/bootstrap-select.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/admin_template/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="/admin_template/js/data-table/jquery.dataTables.min.js"></script>
    <script src="/admin_template/js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/admin_template/js/main.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
      @if(Session::has('message'))
        var type="{{Session::get('alert-type','success')}}"
      
        switch(type){
          case 'success':
           toastr.info("{{ Session::get('message') }}");
           break;
        case 'error':
          toastr.error("{{ Session::get('message') }}");
          break;
        }
      @endif
    </script>
    @yield('js')

</html>