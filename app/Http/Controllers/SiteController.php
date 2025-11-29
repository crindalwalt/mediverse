<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return redirect()->route('medicines.index');
    }

    public function medicines()
    {
        return view('site.medicines');
    }
}
