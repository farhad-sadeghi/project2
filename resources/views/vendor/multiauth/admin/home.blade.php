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
            <a href="{{route('register')}}">
                <img src="{{asset('./g_files/profileico1.png')}}" width="90" height="90" alt="">
                <span> ثبت نام</span>
            </a>
            <a href="{{route('show_registered_list')}}">
                <img src="{{asset('./g_files/profileico1.png')}}" width="90" height="90" alt="">
                <span> لیست ثبت نام ها</span>
            </a>


            @admin('responsible_coach')

            <a href="{{route('responsible_confirm')}}">
                <img src="{{asset('./g_files/profileico1.png')}}" width="90" height="90" alt="">
                <span>تایید ثبت نام</span>
            </a>
            <a href="{{route('responsible_view_search')}}">
                <img src="{{asset('./g_files/profileico1.png')}}" width="90" height="90" alt="">
                <span>سرچ</span>
            </a>

          @endadmin

            @admin('state_coach')
            <a href="{{route('view_match_state')}}">
                <img src="{{asset('./g_files/profileico3.png')}}" width="90" height="90" alt="">
                <span>مسابقات</span>
            </a>

            <a href="{{route('view_match_state_list')}}">
                <img src="{{asset('./g_files/profileico3.png')}}" width="90" height="90" alt="">
                <span> لیست مسابقات</span>
            </a>
            @endadmin

            @admin('boss')

            <a href="{{route('boss_match')}}">
                <img src="{{asset('./g_files/profileico3.png')}}" width="90" height="90" alt="">
                <span>مسابقات</span>
            </a>
            <a href="{{route('boss_view_confirm_match_list')}}">
                <img src="{{asset('./g_files/profileico3.png')}}" width="90" height="90" alt="">
                <span>تاییدیه مسابقات</span>
            </a>
            @endadmin
            <br>

            <a href="">
                <img src="" width="90" height="90" alt="">
                <span>{{Auth::user()->ninja_code}}</span>
            </a>
            <a href="{{route('admin.logout')}}">
                <img src="{{asset('./g_files/profileico9.png')}}" width="90" height="90" alt="">
                <span>خروج</span>
            </a>
        </div>
    </div>





@endsection