<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact ->save();
        return redirect()->route('admin')->with("success", " well added article");

    }

    public function destroy(Contact $id)
    {
        $id->delete();
        return redirect()->back()->with("warning", "deleted data");
    }

    public function show(Contact $id) {
        $contact = $id;
        return view("admin.components.contact.show", compact("contact"));
    }
}
