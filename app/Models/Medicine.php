<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    /** @use HasFactory<\Database\Factories\MedicineFactory> */
    use HasFactory;
    protected $fillable = [
        "name",
        "slug",
        "category_id",
        "generic_name",
        "summary",
        "long_description",
        "status",
        "published_at",
        "user_id"
    ];

    protected $guarded = [];


    public function category(){
        return $this->belongsTo(Category::class , 'category_id');
    }


    public function sideEffects(){
        return $this->hasMany(SideEffect::class);
    }
}
