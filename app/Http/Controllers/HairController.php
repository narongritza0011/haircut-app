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







    public function update(Request $request, $id)
    {


        // dd($request->all());
        //การเข้ารหัสรูปภาพ
        $service_image = $request->file('image');

        //อัพเดทภาพเเละชื่อ
        if ($service_image) {



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
            //  dd($full_path);



            //อัพเดทข้อมูล
            Hair::find($id)->update([
                'name' => $request->name,
                'status' => $request->status,
                'image' => $full_path,



            ]);

            //ลบภาพเก่าเเละอัพภาพใหม่เเทนที่
            $old_image = $request->old_image;
            unlink($old_image);

            //อัพโหลดภาพ
            $service_image->move($upload_location, $img_name);

            return redirect()->route('admin.hair')->with('success', "อัพเดทข้อมูลเรียบร้อย");
        } else {
            //อัพเดทชื่ออย่างเดียว
            //อัพเดทข้อมูล
            Hair::find($id)->update([
                'name' => $request->name,
                'status' => $request->status,
            ]);
            return redirect()->route('admin.hair')->with('success', "อัพเดทข้อมูลเรียบร้อย");
        }
        // dd($request->all());
        // // ตรวจสอบข้อมูล

        // RoomType::find($id)->update([
        //     'name' => $request->name,
        // ]);
        // // return redirect()->route('services')->with('success', "อัพเดทประเภทห้องพักเรียบร้อย");
        // return redirect()->route('admin.room_type')->with('success', "อัพเดทประเภทห้องพักเรียบร้อย");
    }


    function delete($id)
    {

        //1.ลบภาพ
        $image = Hair::find($id)->image;
        unlink($image);


        //2.ลบข้อมูลจากฐานข้อมูล
        Hair::find($id)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
