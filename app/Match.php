<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function Tablematch()
    {

        return $this->belongsTo('App\Tablematch');

    }
    public function Admin()
    {

        return $this->belongsTo('Bitfumes\Multiauth\Model\Admin');

    }


}
