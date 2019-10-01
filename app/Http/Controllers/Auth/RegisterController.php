<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'admin/show_registered_list';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
        $this->middleware('auth:admin');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:40'],
            'job' => ['required', 'string', 'max:40'],
            'education' => ['required', 'string', 'max:30'],
            'home_number' => ['required', 'string', 'max:30'],
            'phone_number' => ['required', 'string', 'max:30'],
            'work_number' => ['nullable', 'string', 'max:30'],
            'wife_education' => ['nullable', 'string', 'max:30'],
            'child_number' => ['nullable', 'string', 'max:30'],
            'father_name' => ['required', 'string', 'max:40'],
            'mother_name' => ['required', 'string', 'max:40'],
            'father_job' => ['required', 'string', 'max:40'],
            'mother_job' => ['required', 'string', 'max:40'],
            'father_education' => ['required', 'string', 'max:40'],
            'mother_education' => ['required', 'string', 'max:40'],
            'birthday' => ['required', 'string', 'max:30'],
            'state' => ['required', 'string', 'max:30'],
            'home_address' => ['required', 'string', 'max:600'],
            'job_address' => ['nullable', 'string', 'max:600'],
            'why' => ['nullable', 'string', 'max:600'],
            'sick' => ['nullable', 'string', 'max:600'],
            'body_problem' => ['nullable', 'string', 'max:600'],
            'height' => ['required', 'string', 'max:30'],
            'sanguis' => ['required', 'string', 'max:20'],
            'father_death' => ['required'],
            'mother_death' => ['required'],
            'single' => ['required'],
            'ninja_code' => ['required', 'string', 'max:13', 'unique:users'],
            'password' => [ 'string', 'min:12', 'unique:users'],
            'birth_certificate' => ['required', 'string','max:20', 'unique:users'],
            'nation_certificate' => ['required', 'string','max:20', 'unique:users'],
            'image' => ['mimes:jpeg,jpg,png,gif','max:300',],
            'nation_image' => ['mimes:jpeg,jpg,png,gif','max:300',],
            'ninja_image' => ['mimes:jpeg,jpg,png,gif','max:300',],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $request = request();
        $fields = collect(Schema::getColumnListing('users'));
        foreach ($fields as $field) {
            if (isset($request->$field)) {
                $user->$field = $request->$field;
            }
        }
        $name = $request->file('image')->store('public');
        $name2 = $request->file('nation_image')->store('public');
        $name3 = $request->file('ninja_image')->store('public');
        $user->image =$name;
        $user->nation_image =$name2;
        $user->ninja_image =$name3;
        $user->status =0;
        $user->admin_id = Auth::user('admin')->id;
        $user->password =bcrypt($request->birth_certificate);
        $user->save();
    }
}
