<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\collectpoint;
use App\Models\Point;
use App\Models\Service;
use App\Models\Time;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    function index()
    {


        $data = Appointment::join('times', 'times.id', '=', 'appointments.time')
            ->join('services', 'services.id', '=', 'appointments.service')
            ->get(['appointments.*', 'services.service', 'times.time', 'services.price']);

        // dd($data);

        return view('dashboards.admins.appointment.index', compact('data'));
    }


    function edit($id)
    {

        $service = Service::where('status', 1)->get();
        $t = Time::where('status', 1)->get();

        $data = Appointment::find($id);

        // dd($data);
        return view('dashboards.admins.appointment.edit', compact('data', 'service', 't'));
    }








    public function update(Request $request, $id)
    {


        // dd($request->all());


        Appointment::find($id)->update([
            'name' => $request->name,
            'date' => $request->date,
            'time' => $request->time,
            'service' => $request->service,
            'tel' => $request->tel,
            'status' => $request->status,
        ]);
        if ($request->status == 3) {
            // dd($request->all());
            $data = new Point();
            $data->tel = $request->tel;
            $data->score = 1;
            $data->status = 1;

            if ($data->save()) {
                return redirect()->back()->with('success', 'เพิ่มเเต้มสะสมสำเร็จ');
            }
        }

        return redirect()->route('admin.appointment.all')->with('success', "อัพเดทข้อมูลเรียบร้อย");
    }








    function delete($id)
    {
        Appointment::find($id)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
