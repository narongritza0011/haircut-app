<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index()
    {
        $todaytime = Carbon::now()->format('Y.m.d');
        // dd($todaytime);

        $count_order = Appointment::where('status', 1)->whereDate('created_at', date('Y-m-d'))->count();
        $count_order_all = Appointment::count();
        $count_user = User::where('role', 2)->count();


        $data = Appointment::join('times', 'times.id', '=', 'appointments.time')
            ->join('services', 'services.id', '=', 'appointments.service')->whereDate('appointments.created_at', date('Y-m-d'))
            ->get(['appointments.*', 'services.service', 'times.time', 'services.price'])->where('status', 1);
        return view('dashboards.admins.dashboard.index', compact('data', 'count_order', 'count_order_all', 'count_user'));
    }
    function users()
    {
        $data = User::where('role', 1)->get();
        return view('dashboards.admins.user.index', compact('data'));
    }


    function add(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string',  'max:255', 'unique:users'],
            'tel' => 'required',
            'password' => ['required', 'string', 'min:4'],
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->tel = $request->tel;
        $data->role = 1;
        $data->password = Hash::make($request->password);

        if ($data->save()) {
            return redirect()->back()->with('success', 'เพิ่มสมาชิกสำเร็จ');
        } else {
            return redirect()->back()->with('error', 'เพิ่มสมากชิกไม่สำเร็จ!');
        }
    }

    function edit($id)
    {

        $data = User::find($id);
        return view('dashboards.admins.user.edit', compact('data'));
    }






    function profile()
    {
        return view('dashboards.admins.profile.index');
    }



    function ProfileUpdate(Request $request, $id)
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

        return redirect()->back()->with('success', "อัพเดทข้อมูลสำเร็จ");
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

        return redirect()->route('admin.users')->with('success', "อัพเดทข้อมูลสำเร็จ");
    }

    function delete($id)
    {

        User::find($id)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
