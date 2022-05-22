<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HairController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.layouts.home');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/appointment', [HomeController::class, 'appointment'])->name('appointment');



Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');


    //profile
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('profile/update/{id}', [AdminController::class, 'ProfileUpdate'])->name('admin.profile.update');


    //พนักงาน
    Route::get('users', [AdminController::class, 'users'])->name('admin.users');
    Route::post('users/add', [AdminController::class, 'add'])->name('admin.users.add');
    Route::get('users/edit/{id}', [AdminController::class, 'edit'])->name('admin.users.edit');
    Route::post('users/update/{id}', [AdminController::class, 'update'])->name('admin.users.update');
    Route::get('users/delete/{id}', [AdminController::class, 'delete'])->name('admin.users.del');


    //สมาชิก
    Route::get('member', [MemberController::class, 'index'])->name('admin.member');
    Route::get('member/edit/{id}', [MemberController::class, 'edit'])->name('admin.member.edit');
    Route::post('member/update/{id}', [MemberController::class, 'update'])->name('admin.member.update');
    Route::get('member/delete/{id}', [MemberController::class, 'delete'])->name('admin.member.del');

    //บริการ
    Route::get('service', [ServiceController::class, 'index'])->name('admin.service');
    Route::post('service/add', [ServiceController::class, 'store'])->name('admin.service.store');
    Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('admin.service.edit');
    Route::post('service/update/{id}', [ServiceController::class, 'update'])->name('admin.service.update');
    Route::get('service/delete/{id}', [ServiceController::class, 'delete'])->name('admin.service.del');

    //เวลาจอง
    Route::get('time', [TimeController::class, 'index'])->name('admin.time');
    Route::post('time/add', [TimeController::class, 'store'])->name('admin.time.store');
    Route::get('time/edit/{id}', [TimeController::class, 'edit'])->name('admin.time.edit');
    Route::post('time/update/{id}', [TimeController::class, 'update'])->name('admin.time.update');
    Route::get('time/delete/{id}', [TimeController::class, 'delete'])->name('admin.time.del');

    //รูปภาพทรงผม
    Route::get('hair', [HairController::class, 'index'])->name('admin.hair');
    Route::post('hair/add', [HairController::class, 'store'])->name('admin.hair.store');
    Route::get('hair/edit/{id}', [HairController::class, 'edit'])->name('admin.hair.edit');
    Route::post('hair/update/{id}', [HairController::class, 'update'])->name('admin.hair.update');
    Route::get('hair/delete/{id}', [HairController::class, 'delete'])->name('admin.hair.del');


    //จัดการจองคิว
    Route::get('appointment/all', [AppointmentController::class, 'index'])->name('admin.appointment.all');
    Route::get('appointment/edit/{id}', [AppointmentController::class, 'edit'])->name('admin.appointment.edit');
    Route::post('appointment/update/{id}', [AppointmentController::class, 'update'])->name('admin.appointment.update');
    Route::get('appointment/delete/{id}', [AppointmentController::class, 'delete'])->name('admin.appointment.del');


    //จัดการช่องทางการติดต่อ
    Route::get('contact/all', [ContactController::class, 'index'])->name('admin.contact');
    Route::get('contact/edit/{id}', [ContactController::class, 'edit'])->name('admin.contact.edit');
    Route::post('contact/update/{id}', [ContactController::class, 'update'])->name('admin.contact.update');


    Route::get('collect/all', [PointController::class, 'collect'])->name('admin.collect');
    Route::get('collect/delete/{id}', [PointController::class, 'collect_delete'])->name('admin.collect.del');
});



Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {

    //dashboard
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');

    //profile
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('user/update/{id}', [UserController::class, 'update'])->name('user.profile.update');


    //สะสมเเต้ม
    Route::get('point', [PointController::class, 'index'])->name('user.point');
    Route::post('point/add', [PointController::class, 'store'])->name('user.point.store');
});
