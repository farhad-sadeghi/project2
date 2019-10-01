<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>داشبرد | کنترل پنل مدیریت</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-theme.css')}}">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('dist/css/rtl.css')}}">
    <!-- persian Date Picker -->
    <link rel="stylesheet" href="{{asset('dist/css/persian-datepicker-0.4.5.min')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('dist/css/register.css')}}">

    <link rel="stylesheet" href="{{asset('dist/css/pop.css')}}">



    <script src="{{ asset('js/sweetalert.js') }}"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">پنل</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>



            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                     {{--Messages: style can be found in dropdown.less--}}
                    <li>
                        <a href="{{route('logout')}}" class="btn hidden-xs" style="margin:6px 100px;padding:9px 50px;background-color:#d61577;border-color:#ad0b5d;font-weight:bold;color:#FFF">خروج از سیستم  </a>
                    </li>
                    {{--<li class="dropdown notifications-menu">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">--}}
                            {{--<i class="fa fa-bell-o"></i>--}}
                            {{--<span class="label label-warning">۱۰</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li class="header">۱۰ اعلان جدید</li>--}}
                            {{--<li>--}}
                                {{--<!-- inner menu: contains the actual data -->--}}
                                {{--<ul class="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<i class="fa fa-warning text-yellow"></i> اخطار دقت کنید--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<i class="fa fa-users text-red"></i> ۴ کاربر جدید ثبت نام کردند--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<i class="fa fa-shopping-cart text-green"></i> ۲۵ سفارش جدید--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<i class="fa fa-user text-red"></i> نام کاربریتان را تغییر دادید--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="footer"><a href="#">نمایش همه</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                   {{-- <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"> --}}
                </div>
                <div class="pull-right info">
                    <p></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
                </div>
            </div>

            <ul class="sidebar-menu" data-widget="tree">
                <li class="header"> منو</li>

                <li>
                    <a href="{{route('register')}}">
                        <i class="fa fa-sign-in"></i> <span>ثبت نام</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('show_registered_list')}}">
                        <i class="fa fa-sign-in"></i> <span>  لیست ثبت نام</span>
                    </a>
                </li>
                @admin('responsible_coach')
                <li>
                    <a href="{{route('responsible_confirm')}}">
                        <i class="fa fa-sign-in"></i> <span>   تایید ثبت نام</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('responsible_view_search')}}">
                        <i class="fa fa-sign-in"></i> <span>  جستجوی کاربر</span>
                    </a>
                </li>
                @endadmin

                @admin('state_coach')

                <li>
                    <a href="{{route('view_match_state')}}">
                        <i class="fa fa-sign-in"></i> <span>   مسابقات</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('view_match_state_list')}}">
                        <i class="fa fa-sign-in"></i> <span>   لیست مسابقات</span>
                    </a>
                </li>

                @endadmin

                @admin('boss')

                <li>
                    <a href="{{route('boss_match')}}">
                        <i class="fa fa-sign-in"></i> <span>  مسابقات</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('boss_view_confirm_match_list')}}">
                        <i class="fa fa-sign-in"></i> <span>   تاییدیه مسابقات</span>
                    </a>
                </li>

                @endadmin

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    @yield('content')

</div>


@include('parcial.javascript4')


</body>
</html>





