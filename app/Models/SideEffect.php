<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideEffect extends Model
{
    /** @use HasFactory<\Database\Factories\SideEffectFactory> */
    use HasFactory;



    public function medicine(){
        return $this->belongsTo(Medicine::class , 'medicine_id');
    }
}
