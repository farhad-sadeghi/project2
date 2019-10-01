@extends('layout')
@section('content')



    <br>

    <div class="box">
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>نام </th>
                    <th style="width: 40px">حذف</th>
                    <th style="width: 40px">حذف</th>
                    <th style="width: 40px">حذف</th>
                    <th style="width: 40px">تغییر</th>
                    <th style="width: 40px">تکمیل ثبت نام</th>
                    <th style="width: 40px">  وضعیت</th>
                </tr>
                @if($matches != null)
                    @foreach($matches->all() as $item)
                        <tr>
                            <td> # </td>
                            <td>
                                {{$item->ninja_code}}
                            </td>
                            <td><a href="{{route('boss_confirm_match',$item->id)}}" onclick="return confirm('تایید');"><span class="badge bg-red">تایید با پرداخت</span></a></td>


                            <td><a href="{{route('boss_confirm_match2',$item->id)}}" onclick="return confirm('تایید');"><span class="badge bg-red">تایید بدون پرداخت</span></a></td>
                            <td><a href="{{route('delete_match_boss',$item->id)}}" onclick="return confirm('تایید');"><span class="badge bg-red">  حذف</span></a></td>
                            <td><a href="{{route('boss_reject_match',$item->id)}}"><span class="badge bg-red">عدم تایید</span></a></td>

                            <td><a href="{{route('boss_match_complate_view',$item->id)}}"><span class="badge bg-green"> اطلاعات کامل</span></a></td>
                            @if($item->status == 1)
                                <td><a><span class="badge bg-green"> پرداخت نشده </span></a></td>
                            @elseif($item->status == 0)
                                <td><a><span class="badge bg-green">درحال انتظار </span></a></td>
                            @elseif($item->status == 2)
                                <td><a href="{{route('register_match_problem2',$item->id)}}"><span class="badge bg-green">نقص مدارک</span></a></td>
                            @elseif($item->status == 3)
                                <td><a><span class="badge bg-green">پرداخت شده</span></a></td>

                            @endif

                        </tr>
                    @endforeach
                @endif


            </table>
        </div>
    </div>
    <div class="text-center">{{$matches->appends(Request::input())->links()}}</div>

    @if(count($errors))
        @foreach($errors->all() as $error)
            {{$error}}
            <br>
        @endforeach
    @endif
@endsection
