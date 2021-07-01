<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corder extends Model
{
    use HasFactory;
    public function item(){
        return $this->belongsTo('App\Models\Item','iid');
    }
    public function morder(){
        return $this->belongsTo('App\Models\Morder','moid');
    }
}
