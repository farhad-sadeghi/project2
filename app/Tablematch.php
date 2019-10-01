<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tablematch extends Model
{

    use Sluggable;


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function matches()
    {

        return $this->hasMany('App\Match');

    }
}
