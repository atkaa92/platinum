<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as M;

class Model extends M
{
    protected $guarded = [];
    public $timestamps = false;

    public function manufacture(){
        return $this->belongsTo(Manufacturer::class, 'mark_id', 'id');
    }
}
