@extends('layout')
@section('content')

    <div class="box">
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>لیست کامنت</th>
                    <th style="width: 40px">حذف</th>
                    <th style="width: 40px">تغییرات</th>
                    <th style="width: 40px">تکمیل ثبت نام</th>
                </tr>
                @foreach($admin2->all() as $item)
                        <tr>
                            <td> # </td>
                            <td> {{$item->age}} </td>
                            <td><a href="{{route('delete_match_state',$item->id)}}" onclick="return confirm('حذف');"><span class="badge bg-red">حذف</span></a></td>
                            <td><a href="{{route('state_match_complate_view',$item->id)}}" ><span class="badge bg-red">تغییرات</span></a></td>

                            @if($item->status == 1)
                                <td><a href="{{route('buy',$item->id)}}"><span class="badge bg-green">تکمیل ثبت نام</span></a></td>
                            @elseif($item->status == 0)
                                <td><a><span class="badge bg-green">درحال بررسی میباشد</span></a></td>
                            @elseif($item->status == 2)
                                <td><a href="{{route('register_match_problem',$item->id)}}"><span class="badge bg-green">نقص مدارک</span></a></td>
                            @elseif($item->status == 3)
                                <td><a><span class="badge bg-green">تایید شده</span></a></td>

                            @endif

                        </tr>
                @endforeach


            </table>
        </div>
    </div>

    @if(count($admin2) != 0)
  <div class="text-center">{{$admin2->appends(Request::input())->links()}}</div>

@endif

@endsection
