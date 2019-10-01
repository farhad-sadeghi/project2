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

    <form action="{{route('insert_match_state',$tablematch->id)}}" method="post">
        @csrf
        <div class="pdleft">
            <h2 class="formtitle">فرم مشخصات کاربری</h2>


            <div>
                <div class="">
                    <table class="tbl-form">
                        <tbody>
                        <tr>
                            <td style="width: 35%">
                                <span class="red">*</span> کد نینجا:
                            </td>
                            <td>
                                <input name="ninja_code" type="text" value="farhad" maxlength="50"  class="txt">
                            </td>

                        </tr>


                        <tr>
                            <td>
                                <span class="red">*</span> وزن:
                            </td>
                            <td>
                                <input name="weight" type="text" maxlength="50" class="txt">
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <span class="red">*</span>سن:
                            </td>
                            <td>
                                <input name="age" type="text" maxlength="50" class="txt">
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <span class="red">*</span>سن:
                            </td>
                            <td>
                                <input  type="submit" maxlength="50" class="txt">
                            </td>

                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </form>
    @if(count($errors))
        @foreach($errors->all() as $error)
            {{$error}}
            <br>
        @endforeach
    @endif
@endsection
