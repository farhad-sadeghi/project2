@extends('layout')
@section('content')

    <br>
    <div class="clear"></div>

    <div class="main">
        <div class="profileSidebar">

            <ul class="profilemenu">

                @foreach($tablematch->all() as $item)

                    @if( $item->status == 1)
                        <li>
                            <a href="{{route('view_match_state2',$item->slug)}}">
                                <img src="{{asset('./g_files/profileico1.png')}}" width="32" height="32" alt="">
                                <span>{{$item->name}}</span>
                            </a>
                        </li>
                    @endif
                @endforeach

            </ul>

        </div>

        <div class="clear"></div>
    </div>

@endsection