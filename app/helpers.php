<?php

use App\Models\Appointment;
use App\Models\Collect;
use App\Models\Hair;
use App\Models\Service;
use App\Models\Time;
use App\Models\User;

function count_user()
{
    $count_user = User::where('role', 2)->count();
    return $count_user;
}


function count_admin()
{
    $count_admin = User::where('role', 1)->count();
    return $count_admin;
}



function count_order()
{
    $count_order = Appointment::count();
    return $count_order;
}



function count_service()
{
    $count_service = Service::count();
    return $count_service;
}



function count_hair()
{
    $count_hair = Hair::count();
    return $count_hair;
}


function count_time()
{
    $count_time = Time::count();
    return $count_time;
}


function count_collect()
{
    $count_collect = Collect::count();
    return $count_collect;
}
