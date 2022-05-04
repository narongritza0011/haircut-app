<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    function index()
    {
        $data = User::where('role', 2)->get();
        return view('dashboards.admins.member.index', compact('data'));
    }

    function edit($id)
    {

        $data = User::find($id);
        return view('dashboards.admins.member.edit', compact('data'));
    }


    function update(Request $request, $id)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string',  'max:255'],
            'tel' => 'required',

        ]);
        //อัพเดทข้อมูล
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.member')->with('success', "อัพเดทข้อมูลสำเร็จ");
    }

    function delete($id)
    {

        User::find($id)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
