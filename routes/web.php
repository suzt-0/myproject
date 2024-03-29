<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact-us');
});
Route::get('/login', function () {
    return view('login');
});


Route::get('/students/create', [StudentController::class,'create'])->name('students/create');

Route::post('/students',[StudentController::class,'store'])->name('students.store');

Route::delete('/students/{student}',[StudentController::class,'destroy'])->name('students.destroy');

Route::get('/students', [StudentController::class,'index'])->name('students.index');

Route::put('/students/{student}', [StudentController::class,'update'])->name('students.update');

Route::get('/students/{student}/edit', [StudentController::class,'edit'])->name('students.edit');