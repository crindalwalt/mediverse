<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return redirect()->route('medicines.index');
    }

    public function medicines()
    {
        $medicines = Medicine::latest()->get();

        // dd($medicines);
        return view('site.medicines', compact('medicines'));
    }


    public function medicineDetails( Medicine $med){
        return view('site.medicine-detail',compact('med'));
    }
}
