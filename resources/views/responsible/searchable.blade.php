@extends('layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                پنل مدیریت
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبرد</li>
            </ol>
        </section>
        <form action="{{route('responsible_post_search')}}" method="get">
            @csrf
            <div class="row">
                <div class="col-md-7 col-md-offset-3" style="margin-top: 70px;">
                    <input name="name" type="text" class="col-md-4 form-control" placeholder=" نام" required>
                    <input type="submit" class="btn btn-primary col-md-offset-1 col-md-2" value="جستوجو">
                </div>
            </div>
        </form>
        <div class="box-table">
            <div class="box-header">
                <h3 class="box-title">لیست مبارزان</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th><a href="#"> نام</a></th>
                        <th><a href="#">کد نینجا</a></th>
                        <th><a href="#">اطلاعات کامل</a></th>
                        <th><a href="#">تایید </a></th>
                        <th><a href="#">عدم تایید </a></th>
                        <th><a href="#">حذف</a></th>
                        <th><a href="#"> وضعیت</a></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($user) )
                        @foreach($user->all() as $item)
                            <div class="row">
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->ninja_code}}</td>
                                    <td>
                                        <a href="{{route('registered_complate_view',$item->id)}}">
                                            <button class="btn btn-primary col-sm-8 ">اطلاعات کامل</button>
                                        </a>
                                    </td>

                                    <td><input type="button" href="" class="btn btn-success col-sm-8 col-sm-offset-1"
                                              onclick="return confirmm({{$item->id}})" value="تایید"></td>
                                    <td>
                                        <input type="button" href="" class="btn btn-danger col-sm-8 col-sm-offset-1"
                                               onclick="return reject({{$item->id}})" value="عدم تایید"></td>

                                    <form action="{{route('delete_user_responsible',$item->id)}}" method="post" name="f">
                                        @csrf @method('delete')
                                        <td><input type="submit"  class="btn btn-danger col-sm-8 col-sm-offset-1"
                                                   onclick="return delet()"
                                                   value="حذف "></td>
                                    </form>

                                    @if($item->status == 0)
                                        <td><input type="button"  class="btn btn-warning col-sm-8 col-sm-offset-1" value="در حال بررسی "></td>
                                    @elseif($item->status == 1)
                                        <td><a href="{{route('search_register_user_problem',$item->id)}}"><input type="button"  class="btn btn-danger col-sm-8 col-sm-offset-1" value="تایید نشده "></a></td>
                                    @elseif($item->status == 2)
                                        <td><input type="button" class="btn btn-success col-sm-8 col-sm-offset-1"  value="تایید شده "></td>
                                    @endif



                                </tr>
                            </div>
                        @endforeach
                    @endif



                    </tbody>
                    <!--<tfoot>-->
                    <!--<tr>-->
                    <!--<th>نام</th>-->
                    <!--<th>نام خانوادگی</th>-->
                    <!--<th>شماره ملی</th>-->
                    <!--<th>شماره نینجا</th>-->
                    <!--<th></th>-->
                    <!--</tr>-->
                    <!--</tfoot>-->
                </table>
            </div>
            <!-- /.box-body -->
            <!--</section>-->
        </div>
@if(isset($user))
        <div class="text-center">{{$user->appends(Request::input())->links()}}</div>
    @endif
    </div>


@include('parcial.javascript')
@include('parcial.javascript5')


@endsection