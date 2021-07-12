<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\controlController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::namespace('BackEnd')->group(function ()
{
    Route::get('/add',[controlController::class,'Create']);
    Route::POST('/add/save',[controlController::class,'store'])->name('Arm.store');
    Route::get('/show',[controlController::class,'index'])->name('Arm.show');
    Route::get('/see',[controlController::class,'call'])->name('Arm.show');
    Route::get('/arm',[controlController::class,'arm']);


});
