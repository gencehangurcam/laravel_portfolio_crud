<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $about = About::all();
        $service = Service::all();
        return view("home", compact("about", "service"));
    }
}
