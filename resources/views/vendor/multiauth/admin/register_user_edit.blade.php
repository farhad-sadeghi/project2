
@extends('layout')
@section('content')



    <!-- Content Wrapper. Contains page content -->
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
        <form action="{{route('register_user_edit2',$user->id)}}" enctype="multipart/form-data" style="margin:15px" method="post" class="form-group">
            @csrf @method('patch')
            <a >
                <h4 style="margin-top: 50px;"> مشخصات فردی</h4>

            </a>
            <div class="row" >
                <div class="row col-md-12 ">
                    <div class="col-md-12 col-md-offset-1" style="margin-top: 40px;margin-bottom: 40px">
                        <div class="row " >
                            <div class="col-sm-2 imgUp">
                                <img src="{{asset("storage/$user->image")}}" alt="" id="img1" class="imagePreview">

                                <label class="btn btn-prmy btn-primary">
                                    آپلود عکس 3*4<input type="file" id="input1" onclick="changeImage1()" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="image">
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-sm-4 imgUp">
                                <img src="{{asset("storage/$user->nation_image")}}" alt="" id="img2" class="imagePreview">
                                <label class="btn btn-prmy btn-primary">
                                    آپلود عکس کارت ملی<input type="file" id="input2" onclick="changeImage2();" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"  name="nation_image">
                                </label>
                            </div><!-- col-2 -->
                            <div class="col-sm-4 imgUp">
                                <img src="{{asset("storage/$user->ninja_image")}}" alt="" id="img3" class="imagePreview">
                                <label class="btn btn-prmy btn-primary">
                                    آپلود عکس کارت نینجا<input type="file" class="uploadFile img" onclick="changeImage3()" id="input3" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"  name="ninja_image">
                                </label>
                            </div><!-- col-2 -->
                        </div><!-- row -->

                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4"> نام :</label>
                                <input type="text" placeholder="نام" class=" col-md-8 form-control" name="name" value="{{ $user->name }}" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4"> کد نینجا :</label>
                                <input type="text" placeholder="کد نینجا " class=" col-md-8 form-control" name="ninja_code" value="{{ $user->ninja_code }}" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4"> تاریخ تولد :</label>
                                <input type="text" id="tarikh" placeholder="تاریخ تولد" class=" col-md-8  form-control pull-right" name="birthday" value="{{ $user->birthday }}" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">محل صدور :</label>
                                <input type="text" placeholder="محل صدور" class=" col-md-8 form-control"  name="state" value="{{ $user->state }}" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4">شغل :</label>
                                <input type="text" placeholder="شغل" class=" col-md-8 date form-control pull-right" name="job" value="{{ $user->job }}" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">میزان تحصیلات :</label>
                                <select class="form-control col-md-8" style="height: auto" name="education"  autofocus>
                                    <option value="0" {{ old('education',$user->education) == 0 ? 'selected' : ''}}>هیچ کدام</option>
                                    <option value="1" {{ old('education',$user->education) == 1 ? 'selected' : ''}}>سیکل</option>
                                    <option value="2" {{ old('education',$user->education) == 2 ? 'selected' : ''}}>دیپلم</option>
                                    <option value="3" {{ old('education',$user->education) == 3 ? 'selected' : ''}}>فوق دیپلم</option>
                                    <option value="4" {{ old('education',$user->education) == 4 ? 'selected' : ''}}>لیسانس</option>
                                    <option value="5" {{ old('education',$user->education) == 5 ? 'selected' : ''}}>فوق لیسانس</option>
                                    <option value="6" {{ old('education',$user->education) == 6 ? 'selected' : ''}}>دکترا</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4">قد :</label>
                                <input type="text"  placeholder="قد"  class="col-md-8 date form-control" name="height" value="{{ $user->height }}" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">گروه خونی :</label>
                                <select class="form-control col-md-8" style="height: auto" name="sanguis"  required autofocus>
                                    <option value="1" {{old('sanguis',$user->sanguis) == 1 ? 'selected' : ''}}>A+</option>
                                    <option value="2" {{old('sanguis',$user->sanguis) == 2 ? 'selected' : ''}}>A-</option>
                                    <option value="3" {{old('sanguis',$user->sanguis) == 3 ? 'selected' : ''}}>B+</option>
                                    <option value="4" {{old('sanguis',$user->sanguis) == 4 ? 'selected' : ''}}>B-</option>
                                    <option value="5" {{old('sanguis',$user->sanguis) == 5 ? 'selected' : ''}}>O+</option>
                                    <option value="6" {{old('sanguis',$user->sanguis) == 6 ? 'selected' : ''}}>O-</option>
                                    <option value="7" {{old('sanguis',$user->sanguis) == 7 ? 'selected' : ''}}>AB+</option>
                                    <option value="8" {{old('sanguis',$user->sanguis) == 8 ? 'selected' : ''}}>AB-</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4"> شماره شناسنامه :</label>
                                <input type="text" placeholder="شماره شناسنامه" class=" col-md-8  form-control" name="birth_certificate" value="{{ $user->birth_certificate }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">شماره ملی :</label>
                                <input type="text" placeholder="شماره ملی" class=" col-md-8 form-control"  name="nation_certificate" value="{{ $user->nation_certificate }}" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4"> شماره تماس منزل(با کد استان) :</label>
                                <input type="text" placeholder="شماره تماس" class=" col-md-8 form-control"  name="home_number" value="{{ $user->home_number }}" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">شماره همراه :</label>
                                <input type="text" placeholder="شماره همراه" class=" col-md-8 form-control" name="phone_number" value="{{ $user->phone_number }}" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4"> آدرس محل سکونت :</label>
                                <input type="text" placeholder="آدرس محل سکونت" class=" col-md-8 form-control" name="home_address" value="{{ $user->home_address }}" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">آدرس محل کار :</label>
                                <input type="text" placeholder="آدرس محل کار (الزامی نیست)" class=" col-md-8 form-control" name="job_address" value="{{ $user->job_address }}">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4">شماره تلفن محل کار :</label>
                                <input type="text" placeholder="شماره تلفن محل کار(الزامی نیست) " class=" col-md-8 form-control" name="work_number" value="{{ $user->work_number }}">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-6"> آیا از مریضی خاصی رنج میبرد :</label>
                                <!--<input type="checkbox"  class="checkbox  form-control ">-->
                                <div class="icheckbox_flat-green col-md-2" id="check-sick" aria-checked="false" onclick="checks();" aria-disabled="false" style="position: relative;">
                                    <input type="checkbox" class="flat-red" style="position: absolute; opacity: 0;">
                                    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                                <input type="text" placeholder="نام بیماری" id="sick-name" class="form-control col-md-4" readonly="readonly" style="    margin-right: 65px;" name="sick" value="{{ $user->sick }}">
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-6"> آیا نقص عضو بدن دارد :</label>
                                <!--<input type="checkbox"  class="checkbox  form-control ">-->
                                <div class="icheckbox_flat-green col-md-2" id="check-body" aria-checked="false" onclick="checkb();" aria-disabled="false" style="position: relative;">
                                    <input type="checkbox" class="flat-red" style="position: absolute; opacity: 0;">
                                    <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                                <input type="text" placeholder="نام عضو قطع شده" id="body-name" class="form-control col-md-4" readonly="readonly" style="    margin-right: 65px;"  name="body_problem" value="{{ $user->body_problem }}">
                            </div>
                        </div>
                    </div>

                    <a >
                        <h4 style="margin-top: 50px;"> اطلاعات وابستگان</h4>

                    </a>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-6">


                            <div style="display: flex; margin-right: 20px; " class=" form-group">
                                <div>
                                متاهل<input type="radio" name="single" onclick="radio()"  value="1" @if(old('single',$user->single) == '1') checked @endif >
                                </div>
                                <div style="margin-right: 20px;">
                                مجرد<input type="radio" name="single" onclick="Unradio()" value="0" @if(old('single',$user->single) == '0') checked @endif >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12" >
                            <div class="col-md-6">
                                <label class="col-md-4">میزان تحصیلات همسر:</label>
                                <select class="form-control col-md-8" style="height: auto" id="edu-wife" readonly="readonly" name="" >
                                    <option value="0" {{old('wife_education',$user->wife_education) == 0 ? 'selected' : ''}}>هیچ کدام</option>
                                    <option value="1" {{old('wife_education',$user->wife_education) == 1 ? 'selected' : ''}}>سیکل</option>
                                    <option value="2" {{old('wife_education',$user->wife_education) == 2 ? 'selected' : ''}}>دیپلم</option>
                                    <option value="3" {{old('wife_education',$user->wife_education) == 3 ? 'selected' : ''}}>فوق دیپلم</option>
                                    <option value="4" {{old('wife_education',$user->wife_education) == 4 ? 'selected' : ''}}>لیسانس</option>
                                    <option value="5" {{old('wife_education',$user->wife_education) == 5 ? 'selected' : ''}}>فوق لیسانس</option>
                                    <option value="6" {{old('wife_education',$user->wife_education) == 6 ? 'selected' : ''}}>دکترا</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">تعداد فرزندان :</label>
                                <input type="text" readonly="readonly" id="cont-child" placeholder="تعداد فرزندان" class=" col-md-8 date form-control pull-right" name="child_number" value="{{ old('child_number') }}">
                            </div>
                        </div>
                    </div>
                    <a >
                        <h5  style="margin-top:50px;">مشخصات پدر</h5>

                    </a>
                    <div class="row" style="margin-top: 20px">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4"> نام :</label>
                                <input type="text" placeholder="نام" class=" col-md-8 form-control" name="father_name" value="{{ $user->father_name }}" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">شغل :</label>
                                <input type="text" placeholder="شغل" class=" col-md-8 form-control" name="father_job" value="{{ $user->father_job }}" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4">میزان تحصیلات :</label>
                                <select class="form-control col-md-8" style="height: auto" name="father_education"  required autofocus>
                                    <option value="0" {{old('father_education',$user->father_education) == 0 ? 'selected' : ''}}>هیچ کدام</option>
                                    <option value="1" {{old('father_education',$user->father_education) == 1 ? 'selected' : ''}}>سیکل</option>
                                    <option value="2" {{old('father_education',$user->father_education) == 2 ? 'selected' : ''}}>دیپلم</option>
                                    <option value="3" {{old('father_education',$user->father_education) == 3 ? 'selected' : ''}}>فوق دیپلم</option>
                                    <option value="4" {{old('father_education',$user->father_education) == 4 ? 'selected' : ''}}>لیسانس</option>
                                    <option value="5" {{old('father_education',$user->father_education) == 5 ? 'selected' : ''}}>فوق لیسانس</option>
                                    <option value="6" {{old('father_education',$user->father_education) == 6 ? 'selected' : ''}}>دکترا</option>
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <div style="display: flex" class="form-group">
                                    <div>
                                    در قید حیات هستند<input type="radio" name="father_death" value="1" @if(old('father_death',$user->father_death) == '1') checked @endif>
                                    </div>
                                    <div style="margin-right: 20px;">

                                        نیستند<input type="radio" name="father_death"  value="0" @if(old('father_death',$user->father_death) == '0') checked @endif>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a >
                        <h5 style="margin-top: 50px;"> مشخصات مادر</h5>

                    </a>
                    <div class="row" style="margin-top: 20px">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4"> نام :</label>
                                <input type="text" placeholder="نام" class=" col-md-8 form-control"  name="mother_name" value="{{ $user->mother_name }}" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-4">شغل :</label>
                                <input type="text" placeholder="شغل" class=" col-md-8 form-control" name="mother_job" value="{{ $user->mother_job }}" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; ">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label class="col-md-4">میزان تحصیلات :</label>
                                <select class="form-control col-md-8" style="height: auto"  name="mother_education" required autofocus>
                                    <option value="0" {{old('mother_education',$user->mother_education) == 0 ? 'selected' : ''}}>هیچ کدام</option>
                                    <option value="1" {{old('mother_education',$user->mother_education) == 1 ? 'selected' : ''}}>سیکل</option>
                                    <option value="2" {{old('mother_education',$user->mother_education) == 2 ? 'selected' : ''}}>دیپلم</option>
                                    <option value="3" {{old('mother_education',$user->mother_education) == 3 ? 'selected' : ''}}>فوق دیپلم</option>
                                    <option value="4" {{old('mother_education',$user->mother_education) == 4 ? 'selected' : ''}}>لیسانس</option>
                                    <option value="5" {{old('mother_education',$user->mother_education) == 5 ? 'selected' : ''}}>فوق لیسانس</option>
                                    <option value="6" {{old('mother_education',$user->mother_education) == 6 ? 'selected' : ''}}>دکترا</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div style="display: flex" class="form-$user->mother_jobgroup">
                                    <div>
                                    در قید حیات هستند <input type="radio" name="mother_death" value="1"  @if(old('mother_death',$user->mother_death) == '1') checked @endif>
                                    </div>
                                    <div style="margin-right: 20px;">
                                    نیستند<input type="radio" name="mother_death"  value="0"  @if(old('mother_death',$user->mother_death) == '0') checked @endif>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-8 col-md-3" style="margin-bottom: 40px;margin-top: 20px;">
                            <input type="submit" class="form-control btn btn-primary" value=" ذخیره اطلاعات">
                        </div>
                    </div>
                </div></div>
        </form>


        <!--</section>-->
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
@include('parcial.javascript3')

@endsection


