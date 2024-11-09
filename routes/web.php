<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('home');
});



Route::controller(AuthController::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerSave')->name('register.save');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware(['auth', 'user-access:user'])->group(function (){
    Route::get('/home', [HomeController::class, 'userHome'])->name('home');
});

Route::middleware(['auth', 'user-access:admin'])->group(function(){
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    // classes controller
    Route::get('/classes', [ClassController::class, 'index'])->name('classes.index');
    Route::get('/classes/create', [ClassController::class, 'create'])->name('classes.create');
    Route::post('/classes/store', [ClassController::class, 'store'])->name('classes.store');
    Route::get('/classes/edit/{id}', [ClassController::class, 'edit'])->name('classes.edit');
    Route::put('/classes/{id}', [ClassController::class, 'update'])->name('classes.update');
    Route::delete('/classes/{id}', [ClassController::class, 'destroy'])->name('classes.destroy');


    // student controller
    Route::get('/students', [StudentController::class, 'index'])->name('student.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

    // grade controller
    Route::get('/grades', [GradesController::class, 'index'])->name('grades.index');
});