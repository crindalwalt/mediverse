<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
    }


    public function medicine(){
        $categories = Category::count();
        $published_medicines = Medicine::where('status', 'published')->count();
        $draft_medicines = Medicine::where('status', 'draft')->count();
        $medicines = Medicine::all();
        return view("admin.medicine.index", compact("medicines", "published_medicines", "draft_medicines", "categories"));
    }


    public function createMedicine (){
        return view("admin.medicine.create");
    }


    public function showMedicine(Medicine $medicine){
        return view("admin.medicine.show", compact("medicine"));
    }
}
