<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        $service = Service::all();
        return view("admin.home", compact("about", "service"));
    }
    public function store(Request $request)
    {
        request()->validate([
            "competence" => ["required", "min:1", "max:20"],
            "level" => ["required", "numeric"],
        ]);

        $about = new About();
        $about->competence = $request->competence;
        $about->level = $request->level;
        $about ->save();
        return redirect()->route('admin')->with("success", " well added article");
    }
    public function destroy(About $id){
        $id->delete();
        return redirect()->back()->with("warning", "deleted data");
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
