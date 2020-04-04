<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    public function user(){
        return $this->belongsTo('Add');
    }
}
