<?php

namespace App\Http\Controllers;

use App\Models\Hair;
use Illuminate\Http\Request;

class HairController extends Controller
{
    function index()
    {
        $data = Hair::get();
        return view('dashboards.admins.hair.index', compact('data'));
    }


    function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png|max:2000',
            'name' => 'required|unique:hairs|max:255',

        ]);



        //การเข้ารหัสรูปภาพ
        $service_image = $request->file('image');
        // dd($service_image);
        //generate ชื่อภาพ
        $name_gen = hexdec(uniqid());
        //ดึงนามสกุลไฟล์ภาพ
        $img_ext = strtolower($service_image->getClientOriginalExtension());
        //รวมชื่อกับนามสกุลไฟล์ 
        $img_name = $name_gen . '.' . $img_ext;


        //บันทึกข้อมูลเเละอัพโหลด
        $upload_location = 'image/hair/';
        $full_path = $upload_location . $img_name;
        // dd($full_path);



        $data = new Hair();
        $data->image = $full_path;
        $data->name = $request->name;

        $data->status = 1;

        if ($data->save()) {
            //อัพโหลดภาพ
            $service_image->move($upload_location, $img_name);
            return redirect()->back()->with('success', 'เพิ่มรูปภาพทรงผมสำเร็จ');
        } else {
            return redirect()->back()->with('error', 'เพิ่มรูปภาพทรงผมไม่สำเร็จ!');
        }
    }



    function edit($id)
    {

        $data = Hair::find($id);
        return view('dashboards.admins.hair.edit', compact('data'));
    }



    function update(Request $request, $id)
    {
        $request->validate([
            'time' => ['required'],


        ]);
        //อัพเดทข้อมูล
        Hair::find($id)->update([
            'time' => $request->time,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.time')->with('success', "อัพเดทข้อมูลสำเร็จ");
    }

    function delete($id)
    {

        Hair::find($id)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
