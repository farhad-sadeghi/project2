@extends('layout')
@section('content')


    <div class="main">
        <h1>

            پروفایل کاربری

        </h1>
    </div>
    <div class="clear"></div>

    <div class="main">
        <div class="clear"></div>
        <div class="clprofile">

            <a href="">
                <img src="{{asset('./g_files/profileico1.png')}}" width="90" height="90" alt="">
                <span>کارت هنرجو</span>
            </a>

            <a href="">
                <img src="{{asset('./g_files/profileico1.png')}}" width="90" height="90" alt="">
                <span>تایید ثبت نام</span>
            </a>
            <a href="">
                <img src="{{asset('./g_files/profileico1.png')}}" width="90" height="90" alt="">
                <span> ثبت نام</span>
            </a>

            <a href="">
                <img src="{{asset('./g_files/profileico1.png')}}" width="90" height="90" alt="">
                <span>ثبت نام</span>
            </a>



            <a href="">
                <img src="{{asset('./g_files/profileico3.png')}}" width="90" height="90" alt="">
                <span>مسابقات</span>
            </a>
            <a href="">
                <img src="{{asset('./g_files/profileico3.png')}}" width="90" height="90" alt="">
                <span>مسابقات</span>
            </a>
            <a href="">
                <img src="{{asset('./g_files/profileico3.png')}}" width="90" height="90" alt="">
                <span>تاییدیه مسابقات</span>
            </a>
            <a href="">
                <img src="{{asset('./g_files/profileico3.png')}}" width="90" height="90" alt="">
                <span>تاییدیه فیش</span>
            </a>
            <br>

            <a href="">
                <img src="{{asset('./g_files/profileico10.png')}}" width="90" height="90" alt="">
                <span>{{Auth::user()->ninja_code}}</span>
            </a>
            <a href="{{route('logout')}}">
                <img src="{{asset('./g_files/profileico9.png')}}" width="90" height="90" alt="">
                <span>خروج</span>
            </a>
        </div>
    </div>





@endsection