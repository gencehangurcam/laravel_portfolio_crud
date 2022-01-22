<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function store(Request $request)
    {
        $service = new Service();
        $service->icone = $request->icone;
        $service->title = $request->title;
        $service->description = $request->description;
        $service ->save();
        return redirect()->route('admin');
    }
}
