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

Route::get('/', [HomeController::class, 'index' ]);
Route::get('/about', [AboutController::class, 'index' ]);
Route::get('/doctor', [DoctorController::class, 'index' ]);
Route::get('/service', [ServiceController::class, 'index' ]);
Route::get('/department', [DepartmentController::class, 'index' ]);
Route::get('/contact', [ContactController::class, 'index' ]);


Route::get('/Admin',[AdminController::class,'index']);

