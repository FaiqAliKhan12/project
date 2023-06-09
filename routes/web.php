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
Route::get('/service', [ServiceController::class, 'index' ]);
Route::get('/department', [DepartmentController::class, 'index' ]);
Route::get('/contact', [ContactController::class, 'index' ]);
Route::post('contact-us', [ContactController::class, 'contact_us' ])->name('contact.us');

// Admin Routes
Route::get('/admin',[AdminController::class,'index'])->name('admin.dashboard');
Route::get('admin-profile/{id}',[AdminController::class,'admin_profile'])->name('admin.profile');
Route::post('admin-update-profile/{id}',[AdminController::class,'update_profile'])->name('admin.update.profile');
Route::get('doctor-form',[AdminController::class,'create'])->name('admin.create.doctor');
Route::post('store-doctor',[AdminController::class,'store'])->name('admin.store.doctor');
Route::get('doctoe-list',[AdminController::class,'listing'])->name('admin.list.doctor');
Route::get('destroy/{id}',[AdminController::class,'destroy'])->name('admin.delete.doctor');
Route::get('edit/{id}',[AdminController::class,'edit'])->name('admin.edit.doctor');
Route::post('update',[AdminController::class,'update'])->name('admin.update.doctor');
Route::get('patient-list',[AdminController::class,'patient_list'])->name('admin.list.patient');
Route::get('patient-edit/{id}',[AdminController::class,'patient_edit'])->name('admin.edit.patient');
Route::post('patient-update',[AdminController::class,'patient_update'])->name('admin.update.patient');
Route::get('depart-form',[AdminController::class,'depart_create'])->name('admin.create.depart');
Route::post('depart-store',[AdminController::class,'store_depart'])->name('admin.store.depart');
Route::get('depart-edit/{id}',[AdminController::class,'depart_edit'])->name('admin.edit.depart');
Route::post('depart-update/{id}',[AdminController::class,'depart_update'])->name('admin.update.depart');
Route::get('depart-destroy/{id}',[AdminController::class,'depart_destroy'])->name('admin.destroy.depart');
Route::get('depart-list',[AdminController::class,'depart_list'])->name('admin.list.depart');
Route::get('contact-list',[AdminController::class,'contact_list'])->name('admin.list.contact');
Route::get('contact-delete/{$id}',[AdminController::class,'contact_delete'])->name('admin.delete.contact');
Route::get('appointments',[AdminController::class,'appointment'])->name('admin.apponitment');


// Doctor Route
Route::get('/doctor', [DoctorController::class, 'index' ]);
Route::get('doctor-profile/{id}',[DoctorController::class,'doctor_profile'])->name('doctor.profile');
Route::post('doctor-update-profile/{id}',[DoctorController::class,'update_profile'])->name('doctor.update.profile');
Route::get('patient-lists',[DoctorController::class,'patient_list'])->name('doctor.list.patient');
Route::get('appointment',[DoctorController::class,'appointment'])->name('doctor.apponitment');

