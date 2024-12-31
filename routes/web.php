<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


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



// Route::get('/',function (){

//     return view('welcome');
// });



Route::get('/', [MyController::class, 'show'])->name('show');
Route::get('/create', [MyController::class, 'create'])->name('create');
Route::get('/update/{id}', [MyController::class, 'update'])->name('update');
Route::get('/dlete/{id}', [MyController::class, 'delete'])->name('delete');






