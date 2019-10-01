<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ورود</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-theme.css')}}">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('dist/css/rtl.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="{{asset('dist/css/login.css')}}">
</head>
<body class="">
<img src="{{asset('dist/img/baclog.jpg')}}" class="bac-img" alt="">
<form method="post" action="{{ route('login') }}" class="login-box">

    @csrf

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 tittle user-tittle" >ورود مبارزان</div>
        <div class="col-md-4"></div>
    </div>
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-offset-2 col-md-8" >
            <input name="ninja_code" type="text" class="usernamebox" placeholder="کد نینجا">
            <input name="password" type="password" class="usernamebox" placeholder="رمز عبور">
        </div>
    </div>
    <div class="row" style="margin-top: 80px;">
        <div class="col-md-offset-4 col-md-4">
            <input type="submit" value="ورود" class="col-md-12 btn btn-user btns">
        </div>
    </div>
</form>
</body>
</html>