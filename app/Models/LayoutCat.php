<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayoutCat extends Model
{
    use HasFactory;

    public function getCatName() {

        return $this->belongsTo(Cat::class,'cat_id','id') ;
    }
}
