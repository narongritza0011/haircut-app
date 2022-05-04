<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{
    function index()
    {
        $data = Service::get();
        return view('dashboards.admins.service.index', compact('data'));
    }



    function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'service' => ['required', 'string',  'max:255',],
            'price' => ['required', 'max:255']

        ]);
        $data = new Service();
        $data->service = $request->service;
        $data->price = $request->price;
        $data->status = 1;

        if ($data->save()) {
            return redirect()->back()->with('success', 'เพิ่มบริการสำเร็จ');
        } else {
            return redirect()->back()->with('error', 'เพิ่มบริการไม่สำเร็จ!');
        }
    }

    function edit($id)
    {

        $data = Service::find($id);
        return view('dashboards.admins.service.edit', compact('data'));
    }



    function update(Request $request, $id)
    {

        $request->validate([
            'service' => ['required', 'string',  'max:255',],
            'price' => ['required', 'max:255']

        ]);
        //อัพเดทข้อมูล
        Service::find($id)->update([
            'service' => $request->service,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.service')->with('success', "อัพเดทข้อมูลสำเร็จ");
    }

    function delete($id)
    {

        Service::find($id)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
