@extends('layout')
@section('content')

    <br>
    <div class="clear"></div>


    <form action="{{route('state_match_complate_view2',$user->id)}}" method="post">
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
                                <input name="ninja_code" type="text" value="{{$user->ninja_code}}" maxlength="50"  class="txt">
                            </td>

                        </tr>


                        <tr>
                            <td>
                                <span class="red">*</span> وزن:
                            </td>
                            <td>
                                <input name="weight" type="text" maxlength="50" class="txt" value="{{$user->weight}}">
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <span class="red">*</span>سن:
                            </td>
                            <td>
                                <input name="age" type="text" maxlength="50" class="txt" value="{{$user->age}}">
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
