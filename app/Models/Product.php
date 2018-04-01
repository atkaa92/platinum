<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [''];

    public function models(){
        return $this->belongsTo('App\Models\Model', 'model_id', 'id');
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'manufacture', 'id');
    }
}
