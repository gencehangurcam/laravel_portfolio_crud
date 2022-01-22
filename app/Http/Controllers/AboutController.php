<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view("admin.home", compact("about"));
    }
    public function store(Request $request)
    {
        $about = new About();
        $about->competence = $request->competence;
        $about->level = $request->level;
        $about ->save();
        return redirect()->route('admin');
    }
    public function destroy(About $id){
        $id->delete();
        return redirect()->back();
    }
    public function edit(About $id) {
        $about = $id;
        return view("admin.components.about.edit", compact("about"));
    }

    public function update(About $id, Request $request)
    {
        $about = $id;
        $about->competence = $request->competence;
        $about->level = $request->level;
        $about ->save();
        return redirect("/") . $about->id;
    }

}
