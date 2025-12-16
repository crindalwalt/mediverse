<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("admin.dashboard");
    }


    public function medicine()
    {
        $categories = Category::count();
        $published_medicines = Medicine::where('status', 'published')->count();
        $draft_medicines = Medicine::where('status', 'draft')->count();
        $medicines = Medicine::all();
        return view("admin.medicine.index", compact("medicines", "published_medicines", "draft_medicines", "categories"));
    }


    public function createMedicine()
    {
        return view("admin.medicine.create");
    }


    public function showMedicine(Medicine $medicine)
    {
        return view("admin.medicine.show", compact("medicine"));
    }

    public function storeMedicine(Request $request)
    {

        // validate the request data
        $request->validate([
            "name" => ['required',],
            "generic_name" => ['required'],
            "category_id" => ['required'],
            "summary" => ['required'],
            "long_description" => ['required'],
            "status" => ['required'],
            "published_at" => ['required']
        ]);

        // manage the data creation
        $slug = Str::slug($request->name, "-");
        $userId = Auth::user()->id;


        // save the data to the database
        Medicine::create([
            "name" => $request->name,
            "slug" => $slug,
            "generic_name" => $request->generic_name,
            "summary" => $request->summary,
            "long_description" => $request->long_description,
            "status" => "draft",
            "published_at" => $request->published_at,
            "user_id" => $userId,
            "category_id" => $request->category_id,

        ]);


        // redrect to the medicines list with success message
        // TODO: add success notification
        return redirect()->route("dashboard.medicines");
    }
}
