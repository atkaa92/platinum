<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as M;

class Model extends M
{
    protected $guarded = [];
    public $timestamps = false;

    public function category(){
        return $this->hasOne('App\Models\Product', 'model_id');
    }
}
