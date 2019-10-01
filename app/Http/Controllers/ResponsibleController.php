<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditRequest;
use App\User;
use Illuminate\Http\Request;

class ResponsibleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:responsible_coach');
    }


    /*برای نمایش صفحه تایید ثبت نام**/
    public function responsible_confirm()
    {
        $users = User::where('status', '==', '0')->paginate(10);

        return view('responsible.responsible_confirm', compact('users'));

        }

        /*برای تایید کاربر توسط مسعول ثبت نام*/
    public function confirm_register_user($id)
    {
        $find = User::findOrFail($id);
        $find->status = 2;
        $find->save();
        return back();
    }


    /*برای رد کاربر توسط مسعول ثبت نام*/
    public function reject_register_user($id,$text)
    {
        $find = User::findOrFail($id);
        $find->status = 1;
        $find->why = $text ;
        $find->save();
        return back();

    }


    /*برای نمایش کامل اطلاعات کاربر*/
    public function registered_complate_view($id)
    {
        $user = User::findOrFail($id);
        return view('responsible.registered_complate_view', compact('user'));



    }

    /*برای تغییر کامل اطلاعات کاربر*/
    public function registered_complate_view2(EditRequest $request,$id)
    {
        $find =User::findOrFail($id);
        $find->update($request->all());
        $find->save();
        return back()->with('commentt','تغییر  با موفقیت انجام شد');
    }

    public function responsible_view_search()
    {

        return view('responsible.searchable');

    }

    public function responsible_post_search(Request $request)
    {

         $user =User::where('ninja_code','LIKE',"%{$request->name}%")->Orwhere('phone_number','LIKE',"%{$request->name}%")->paginate(10);

         if (count($user) != 0)
         {
             return view('responsible.searchable',compact('user'));

         }
         else{

             return back()->with('search','موردی یافت نشد');
         }

    }

    public function delete_user_responsible($id)
    {

        $find = User::findOrFail($id);
        if ($find->image != Null)
        {
            unlink("storage/$find->image");
            unlink("storage/$find->nation_image");
            unlink("storage/$find->ninja_image");
        }
        $find->delete();
        return redirect()->route('responsible_view_search');
    }

    public function search_register_user_problem($id)
    {
        $find =User::findOrFail($id);

        session()->flash('commentt',$find->why);

        return back();
    }
}
