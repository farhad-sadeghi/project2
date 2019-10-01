@extends('layout')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                پنل مدیریت
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('show_registered_list')}}"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبرد</li>
            </ol>
        </section>
        <div class="row">
            <div class=" col-md-5" style="margin: 15px;">
                <a href="{{route('register')}}">
                    <button class="btn btn-success">ثبت نام عضو جدید</button>
                </a>
            </div>
        </div>
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
                                <th><a href="#">وضعیت </a></th>
                                <th></th>
                            </tr>
                    </thead>
                    <tbody>
                    @if($admin2 != null)
                        @foreach($admin2->all() as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->ninja_code}}</td>
                    @if($item->status == 0)
                            <td><a><span class="label label-warning">درحال بررسی میباشد</span></a></td>
                        @elseif($item->status == 1)
                            <td><a href="{{route('register_user_problem',$item->id)}}"><span class="label label-danger">نقص مدارک</span></a></td>
                        @elseif($item->status == 2)
                            <td><a><span class="label label-success">تایید شده</span></a></td>

                        @endif
                        <td>
                            <a href="{{route('register_user_edit',$item->id)}}" title="نمایش" aria-label="View" data-pjax="1">
                                <span class="fa fa-eye"></span>
                            </a>

                            <form action="{{route('delete_registered_user',$item->id)}}" method="post" name="f">
                                @csrf @method('delete')
                                <button  type="submit" class="trash" onclick="return delet();" title="حذف" aria-label="Delete" data-pjax="0" data-confirm="از حذف این مورد مطمین هستید..؟">
                                    <i class="fa fa-trash "></i>
                                </button>
                            </form>

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
        <!--</section>-->
    </div>

        <div class="text-center">{{$admin2->appends(Request::input())->links()}}</div>
    </div>

    @include('parcial.javascript5')

@endsection
