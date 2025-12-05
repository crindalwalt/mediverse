<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    /** @use HasFactory<\Database\Factories\MedicineFactory> */
    use HasFactory;



    public function category(){
        return $this->belongsTo(Category::class , 'category_id');
    }


    public function sideEffects(){
        return $this->hasMany(SideEffect::class);
    }
}
