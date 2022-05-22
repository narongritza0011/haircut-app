<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index()
    {

        $count_order_all = Appointment::count();
        $data = Appointment::join('times', 'times.id', '=', 'appointments.time')
            ->join('services', 'services.id', '=', 'appointments.service')
            ->get(['appointments.*', 'services.service', 'times.time', 'services.price'])->where('tel', Auth::user()->email);

        return view('dashboards.users.dashboard.index', compact('data','count_order_all'));
    }




    function profile()
    {
        return view('dashboards.users.profile.index');
    }



    function update(Request $request, $id)
    {

        dd($request->all());
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
}
