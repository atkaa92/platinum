<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as M;

class Manufacturer extends M
{
    public $timestamps = false;

    public function models()
    {
        return $this->hasMany('App\Models\Model', 'mark_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'manufacture', 'id');
    }
}
