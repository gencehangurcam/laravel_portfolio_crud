<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function index()
    {
        $service = Service::all();
        return view("admin.pages.services.services", compact("service"));
    }

    public function store(Request $request)
    {
        request()->validate([
            "title" => ["required", "min:1", "max:20"],
            "description" => ["required", "min:1", "max:30"],
        ]);

        $service = new Service();
        $service->icone = $request->icone;
        $service->title = $request->title;
        $service->description = $request->description;
        $service ->save();
        return redirect()->route('admin')->with("success", " well added article");
    }

    public function destroy(Service $id)
    {
        $id->delete();
        return redirect()->back()->with("warning", "deleted data");
    }

    public function edit(Service $id) {
        $service = $id;
        return view("admin.components.services.edit", compact("service"));
    }

    public function update(Service $id, Request $request)
    {
        $service = $id;
        $service->title = $request->title;
        $service->icone = $request->icone;
        $service->description = $request->description;
        $service ->save();
        return redirect("/") . $service->id;
    }
}
