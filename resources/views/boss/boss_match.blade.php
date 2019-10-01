@extends('layout')
@section('content')


    <form  action="{{route('insert_boss_match')}}" method="post">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">وارد کردن مسابقه</label>
                <input name="name" type="text" class="form-control"  placeholder="برچسب" required><br>
                <input name="price" type="text" class="form-control"  placeholder="هزینه" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">اضافه</button>
    </form>

    <br>
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>نام </th>
                    <th>هزینه </th>
                    <th style="width: 40px">حذف</th>
                    <th style="width: 40px">وضعیت</th>
                </tr>
                @foreach($tablematch->all() as $item)

                    <tr>
                        <td> # </td>
                        <td> {{$item->name}} </td>
                        <td> {{$item->price}} </td>
                        <td><a href="{{route('delete_boss_match',$item->id)}}" onclick="return confirm('حذف');"><span class="badge bg-red">حذف</span></a></td>


                        @if($item->status == 1)
                            <td><a href="{{route('disable_status_boss_match',$item->id)}}"><span class="badge bg-green">غیرفعال</span></a></td>
                            @else

                            <td><a href="{{route('able_status_boss_match',$item->id)}}"><span class="badge bg-green">فعال</span></a></td>

                            @endif


                    </tr>
                    @endforeach


            </table>
        </div>
    </div>
    @if(count($errors))
        @foreach($errors->all() as $error)
            {{$error}}
            <br>
        @endforeach
    @endif

    @endsection