<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $rememberTokenName=false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','mother_name', 'father_name',
        'ninja_code', 'password','status','image','state',
        'birthday','height','sanguis','birth_certificate'
        ,'admin_id','nation_image','ninja_image','nation_certificate','father_job',
        'mother_job','father_education','mother_education','job','education',
        'wife_education','child_number','home_number','phone_number','work_number',
        'home_address','job_address','why','sick','body_problem','father_death','mother_death',
        'single'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','ninja_code'
    ];

    public function setImageAttribute($value)
    {

        $this->attributes['image'] = substr($value,7);

    }

        public function setNationImageAttribute($value)
        {

            $this->attributes['nation_image'] = substr($value,7);

        }
    public function setNinjaImageAttribute($value)
    {

        $this->attributes['ninja_image'] = substr($value,7);

    }



    public function admin()
    {

        return $this->belongsTo('Bitfumes\Multiauth\Model\Admin');

    }
}
