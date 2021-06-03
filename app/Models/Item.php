<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    public function vendor(){
        return $this->belongsTo('App\Models\Vendor','vid');
    }
    public function subcategory(){
        return $this->belongsTo('App\Models\Subcategory','scid');
    }
    public function brand(){
        return $this->belongsTo('App\Models\Brand','bid');
    }
}
