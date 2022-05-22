<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {

        $data = Contact::all();
        return view('dashboards.admins.contact.index', compact('data'));
    }


    function edit($id)
    {
        $data = Contact::find($id);
        // dd($data);
        return view('dashboards.admins.contact.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {


        // dd($request->all());


        Contact::find($id)->update([
            'work' => $request->work,
            'tel' => $request->tel,
            'email' => $request->email,
            'map' => $request->map,
            'address' => $request->address,
            'fb' => $request->fb,
            'ig' => $request->ig,
        ]);
        return redirect()->route('admin.contact')->with('success', "อัพเดทข้อมูลเรียบร้อย");
    }
}
