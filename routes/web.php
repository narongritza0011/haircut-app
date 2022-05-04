<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HairController;
use App\Http\Controllers\MemberController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
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
    Route::get('hair/delete/{id}', [HairController::class, 'delete'])->name('admin.hair.del');
});



Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
