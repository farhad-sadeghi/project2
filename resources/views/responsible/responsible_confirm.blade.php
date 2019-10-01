
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

    <div class="box-table">
        <div class="box-header">
            <h3 class="box-title">لیست مبارزان</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><a href="#">نام </a></th>
                    <th><a href="#">نام خانوادگی</a></th>

                    <th></th>
                </tr>
                </thead>
                <tbody>

                @if($users != null)
                    @foreach($users->all() as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>1234567890</td>
                            <td>
                                <a href="{{route('registered_complate_view',$item->id)}}">
                                    <button class="btn btn-primary col-sm-4 ">نمایش کامل اطلاعات</button>
                                </a>
                                <input type="button" href="" class="btn btn-success col-sm-3 col-sm-offset-1" onclick="return confirmm({{$item->id}})" value="تایید">

                                <input type="button" href="" class="btn btn-danger col-sm-3 col-sm-offset-1" onclick="return reject({{$item->id}})" value="عدم تایید">

                            </td>

                        </tr>
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
    </div>
    <!--</section>-->
    <!-- /.content -->

    <div class="text-center">{{$users->appends(Request::input())->links()}}</div>


</div>

    @include('parcial.javascript')

    @endsection