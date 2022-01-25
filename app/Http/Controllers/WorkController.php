<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $work = Work::all();
        return view("admin.pages.work.work", compact("work"));
    }

    public function store(Request $request)
    {
        request()->validate([
            "title" => ["required", "min:1", "max:20"],
            // 'path' => 'required|png,jpg|max:2048',
            // "description" => ["required", "min:1", "max:30"],
        ]);

        $work = new Work();

        $work->title = $request->title;
        $work->file = $request->file;
        $work->datum = $request->datum;
        $work ->save();
        return redirect()->route('admin')->with("success", " well added article");

    }

    public function destroy(Work $id)
    {
        $id->delete();
        return redirect()->back()->with("warning", "deleted data");
    }

    public function edit(Work $id) {
        $work = $id;
        return view("admin.components.work.edit", compact("work"));
    }

    public function update(Work $id, Request $request)
    {
        $work = $id;
        $work->title = $request->title;
        $work->datum = $request->datum;
        $work ->save();
        return redirect("/") . $work->id;
    }
}


