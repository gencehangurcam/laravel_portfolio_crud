<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            "title" => ["required", "min:1", "max:20"],
            "description" => ["required", "min:1", "max:30"],
        ]);

        $work = new Service();
        $work->title = $request->title;
        $work->photo = $request->photo;
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
        return view("admin.components.services.edit", compact("work"));
    }

    public function update(Work $id, Request $request)
    {
        $work = $id;
        $work->title = $request->title;
        $work->photo = $request->photo;
        $work->datum = $request->datum;
        $work ->save();
        return redirect("/") . $work->id;
    }
}

}
