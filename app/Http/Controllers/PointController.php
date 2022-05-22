<?php

namespace App\Http\Controllers;

use App\Models\Collect;
use App\Models\Point;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PointController extends Controller
{
    function index()
    {

        $count_point = Point::count();
        // $count_point = 11;
        $point = Point::where('status', 1)->get();
        // dd($point);
        return view('dashboards.users.point.index', compact('point', 'count_point'));
    }

    function store(Request $request)
    {
        // dd($request->user_id);

        $data = new Collect();
        $data->user_id = $request->user_id;
        $data->email = $request->email;
        $data->status = 1;
        if ($data->save()) {

            Point::where('tel', Auth::user()->tel)->take(10)->delete();
            return redirect()->back()->with('success', 'ใช้เเต้มสำเร็จ');
        } else {
            return redirect()->back()->with('error', 'ใช้เเต้มสำเร็จไม่สำเร็จ!');
        }
    }


    function collect()
    {



        $data = Collect::join('users', 'users.id', '=', 'collects.user_id')
            ->get(['collects.*', 'users.name',]);



        // dd($data);
        return view('dashboards.admins.collect.index', compact('data'));
    }



    function collect_delete($id)
    {

        Collect::find($id)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลสำเร็จ");
    }
}
