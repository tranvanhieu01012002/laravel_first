<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Ptrinhb1Controller;
use App\Http\Controllers\NumberCalculate;
use App\Http\Controllers\MailController;
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

//management cars store

Route::resource('cars',CarController::class);
Route::get('cars/producer/{id}',[CarController::class,'index_producer'])->name('cars.index_producer');




// -----------------------------------------------------------



Route::get('ptbac1',[Ptrinhb1Controller::class, 'index'])->name('ptb1');
Route::post('ptbac1',[Ptrinhb1Controller::class, 'calculatePT'])->name('ptbac1.calculatePT');
// Route::get('ptbac1',[Ptrinhb1Controller::class, 'ca'])->name('ptbac1.ca');

Route::get('ptbac1', function () {
    return view('first');
});

Route::get('contact',[MailController::class,'sendMail'])->name('sendMail');
// ->name('user');








Route::get('2number', [NumberCalculate::class, 'store'])->name('number');;
Route::post('2number', [NumberCalculate::class, 'caculateNumber'])->name('number.cal');


Route::get('test',function(){
    return view('Admin/addForm');
});
