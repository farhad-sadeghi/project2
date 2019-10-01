<?php

namespace App\Http\Controllers;

use App\Bitpay;
use App\Match;
use App\Tablematch;
use App\User;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:state_coach');
    }


    /*برای نمایش صفحه مسابقات نمایده استان*/
    public function view_match_state(Tablematch $tablematch)
    {
        return view('state_coach.match_state', compact('tablematch'));
    }

    /*برای نمایش فرم  مسابقات نمایده استان*/
    public function view_match_state2($name)
    {
        $tablematch = Tablematch::where('slug', $name)->firstOrFail();
        $tablematch2 = $tablematch->id;
        return view('state_coach.match_state2', compact('tablematch', 'tablematch2'));
    }

    /*برای ارسال فرم مسابقات نمایده استان*/
    public function insert_match_state(Request $request,$id)
    {

        $user= User::where('ninja_code',$request->ninja_code)->get();

       if (!count($user) == 0) {

           $table = new match();
           $table->ninja_code = $request->ninja_code;
           $table->age = $request->age;
           $table->weight = $request->weight;
           $table->status = 0;
           $table->admin_id = Auth::user('admin')->id;
           $table->tablematch_id = $id;
           $table->save();
           return back();
       }
       else{
          return back();
       }
    }

    /*برای حذف فرم مسابقات نمایده استان*/
    public function delete_match_state($id)
    {

        $find = Match::findOrFail($id);
        $find->delete();
        return back();

    }

    /*برای نمایش صفحه لیست مسابقات نمایده استان*/
    public function view_match_state_list(Tablematch $tablematch)
    {

        return view('state_coach.match_state_list', compact('tablematch'));

    }

    /*برای نمایش صفحه لیست مسابقات نمایده استان2*/
    public function view_match_state2_list($name)
    {

        $tablematch = Tablematch::where('slug', $name)->firstOrFail();
        $tablematch2 = $tablematch->id;
        $admin = Admin::findOrFail(Auth::user('admin')->id);
        $admin2 = $admin->matches()->where('tablematch_id','=',$tablematch2)->paginate(1);
        //$admin2 = Match::where('tablematch_id','=',$tablematch2)->paginate(1);
        return view('state_coach.match_state2_list', compact('tablematch', 'tablematch2', 'admin2'));

    }

    /*برای خرید از تکمیل ثبت نام */
    public function buy($id)
    {

        $p=Match::findOrFail($id);
        $tb= $p->tablematch;

        if($p->status == 1) {
            $url = 'http://bitpay.ir/payment-test/gateway-send';
            $api = 'adxcv-zzadq-polkjsad-opp13opoz-1sdf455aadzmck1244567';
            $amount = $tb->price;
            $redirect = route('buyback', $p->id);
            $name = 'fsd';
            $email = '';
            $description = '';
            $factorId = random_int('0', '100000000');

            $result = Bitpay::send($url, $api, $amount, $redirect, $factorId, $name, $email, $description);

            if ($result > 0 && is_numeric($result)) {
                return redirect("http://bitpay.ir/payment-test/gateway-$result");

            } else {

                return 'خطا';
            }
        }
     else{
             return back();

     }

    }

    /*برای ارسال خرید از تکمیل ثبت نام */
    public function buyback(Request $request,$id)
    {
        $url = 'http://bitpay.ir/payment-test/gateway-result-second';
        $api = 'adxcv-zzadq-polkjsad-opp13opoz-1sdf455aadzmck1244567';
        $trans_id =  $request->trans_id;
        $id_get =  $request->id_get;

        $result = Bitpay::get($url,$api,$trans_id,$id_get);

        if($result == 1)
        {
            $match=Match::findOrFail($id);
            $match->status = 3;
            $match->save();
            return redirect()->route('admin.home');

        }
        else
        {
            echo 'وجود خطا';
        }

    }

    /*برای نمایش نقص مدارک*/
    public function register_match_problem($id)
    {
        $find =Match::findOrFail($id);

        session()->flash('commentt',$find->why);

        return back();
    }

    /*برای نمایش کامل اطلاعات مسابقات*/
    public function state_match_complate_view($id)
    {
        $user = Match::findOrFail($id);

        return view('state_coach.state_match_complate_view', compact('user'));

    }

    /*برای ارسال اطلاعات مسابقات*/
    public function state_match_complate_view2(Request $request,$id)
    {

        $find = Match::findOrFail($id);
        $find->weight = $request->weight;
        $find->age = $request->age;
        $find->ninja_code = $request->ninja_code;
        $find->status = 0;
        $find->save();
        return back();

    }

}
