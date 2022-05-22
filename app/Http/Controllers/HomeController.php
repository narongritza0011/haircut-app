<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Hair;
use App\Models\Service;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    // public function __construct()
    // {
    //     // $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data_service = Service::where('status', 1)->get();
        $data = Time::where('status', 1)->get();
        return view('frontend.layouts.home', compact('data', 'data_service'));
    }


    public function service()
    {

        $project = Hair::where('status', 1)->get();
        $data_service = Service::where('status', 1)->get();
        $data = Time::where('status', 1)->get();
        return view('frontend.layouts.service', compact('data', 'data_service', 'project'));
    }

    public function about()
    {

        $data_service = Service::where('status', 1)->get();
        $data = Time::where('status', 1)->get();;
        return view('frontend.layouts.about', compact('data', 'data_service'));
    }

    public function contact()
    {
        $map = Contact::get();
        $data_service = Service::where('status', 1)->get();
        $data = Time::where('status', 1)->get();
        return view('frontend.layouts.contact', compact('data', 'data_service', 'map'));
    }



    public function appointment(Request $request)
    {


        $data = new Appointment();
        $data->date = $request->date;
        $data->time = $request->time;
        $data->service = $request->service;
        $data->name = $request->name;
        $data->tel = $request->tel;
        $data->status = 1;


        if ($data->save()) {
            return redirect()->back()->with('success', 'จองคิวสำเร็จ');
        } else {
            return redirect()->back()->with('error', 'จองคิวไม่สำเร็จ!');
        }
    }
}
