<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    function index()
    {
        $data = Time::get();
        return view('dashboards.admins.time.index', compact('data'));
    }


    function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'time' => ['required'],


        ]);
        $data = new Time();
        $data->time = $request->time;
        $data->status = 1;

        if ($data->save()) {
            return redirect()->back()->with('success', 'เพิ่มเวลาจองสำเร็จ');
        } else {
            return redirect()->back()->with('error', 'เพิ่มเวลาจองไม่สำเร็จ!');
        }
    }



    function edit($id)
    {

        $data = Time::find($id);
        return view('dashboards.admins.time.edit', compact('data'));
    }



    function update(Request $request, $id)
    {
        $request->validate([
            'time' => ['required'],


        ]);
        //อัพเดทข้อมูล
        Time::find($id)->update([
            'time' => $request->time,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.time')->with('success', "อัพเดทข้อมูลสำเร็จ");
    }

    function delete($id)
    {

        Time::find($id)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
