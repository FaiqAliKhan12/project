<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\DoctorController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\DepartmentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth Routes
Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('user-login',[LoginController::class,'user_login'])->name('user.login');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::post('user-rigester',[RegisterController::class,'store_user'])->name('user.store');

Route::get('/', [HomeController::class, 'index' ])->name('home');
Route::post('book-appointment', [HomeController::class, 'book_appointment' ])->name('book.appointment');
Route::get('/about', [AboutController::class, 'index' ]);
Route::get('/doctor', [DoctorController::class, 'index' ]);
Route::get('/service', [ServiceController::class, 'index' ]);
Route::get('/department', [DepartmentController::class, 'index' ]);
Route::get('/contact', [ContactController::class, 'index' ]);
Route::post('contact-us', [ContactController::class, 'contact_us' ])->name('contact.us');


Route::get('/admin',[AdminController::class,'index'])->name('admin.dashboard');
Route::get('doctor-form',[AdminController::class,'create'])->name('admin.create.doctor');
Route::get('patient-list',[AdminController::class,'patient_list'])->name('admin.list.patient');

