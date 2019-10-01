<?php

namespace App\Http\Controllers;

use App\Http\Requests\TablematchRequest;
use App\Match;
use App\Tablematch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BossController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:boss');
    }

    /*برای نمایش صفحه مسابقات اقای ملکی*/
    public function boss_match(Tablematch $tablematch)
    {

        return view('boss.boss_match', compact('tablematch'));

    }

    /*برای ارسال صفحه مسابقات اقای ملکی*/
    public function insert_boss_match(TablematchRequest $request)
    {

        $table = new Tablematch();
        $table->name = $request->name;
        $table->price = $request->price;
        $table->status = 0;
        $table->save();
        return back();
    }

    /*برای حذف صفحه مسابقات اقای ملکی*/
    public function delete_boss_match($id)
    {
        $find = Tablematch::findOrFail($id);
        $find->delete();
        return back();
    }

    /*برای غیرفعال کردن صفحه مسابقات اقای ملکی*/
    public function disable_status_boss_match($id)
    {
        $find = Tablematch::findOrFail($id);
        $find->status = 0;
        $find->save();
        return back();
    }

    /*برای فعال کردن صفحه مسابقات اقای ملکی*/
    public function able_status_boss_match($id)
    {
        $find = Tablematch::findOrFail($id);
        $find->status = 1;
        $find->save();
        return back();
    }

    /*برای نمایش  مسابقات اقای ملکی*/
    public function boss_view_confirm_match($slug)
    {
        $match = Tablematch::where('slug',$slug)->firstOrFail();
        $matches = $match->matches()->paginate(1);
        return view('boss.boss_confirm_match', compact('matches'));

    }

    /*برای نمایش لیست مسابقات اقای ملکی*/
    public function boss_view_confirm_match_list(Tablematch $tablematch)
    {
        return view('boss.boss_confirm_match_list', compact('tablematch'));

    }

    /*برای تایید مسابقات اقای ملکی با پرداخت*/
    public function boss_confirm_match($id)
    {
        $find = Match::findOrFail($id);
        $find->status = 1;
        $find->save();
        return back();
    }

    /*برای تایید مسابقات اقای ملکی بدون پرداخت*/
    public function boss_confirm_match2($id)
    {
        $find = Match::findOrFail($id);
        $find->status = 3;
        $find->save();
        return back();
    }

    /*برای رد مسابقات اقای ملکی*/
    public function boss_reject_match($id)
    {
        $find = Match::findOrFail($id);
        $find->status = 2;
        $find->save();
        return back();
    }

    /*برای نمایش کامل اطلاعات مسابقات*/
    public function boss_match_complate_view($id)
    {
        $user = Match::findOrFail($id);

            return view('boss.boss_match_complate_view', compact('user'));

    }

    /*برای ارسال اطلاعات مسابقات*/
    public function boss_match_complate_view2(Request $request,$id)
    {

        $find = Match::findOrFail($id);
        $find->weight = $request->weight;
        $find->age = $request->age;
        $find->ninja_code = $request->ninja_code;
        $find->save();
        return back();

    }

    /*برای نمایش نقص مدارک*/
    public function register_match_problem2($id)
    {
        $find =Match::findOrFail($id);

        session()->flash('commentt',$find->why);

        return back();
    }

    /*برای حذف مسابقه توسط ملکی*/
    public function delete_match_boss($id)
    {

        $find = Match::findOrFail($id);
        $find->delete();
        return back();

    }

}
