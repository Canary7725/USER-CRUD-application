<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Models\Library;
use App\Models\Admin;

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
    return view('index');
});
Route::post('\login-verify',[AdminController::class,'verify'])->name('login-verify');
Route::get('user-list',[LibraryController::class,'index']);
Route::get('add-user',[LibraryController::class,'addUser']);
Route::post('save-user',[LibraryController::class,'saveUser']);
Route::get('edit-user/{id}',[LibraryController::class,'editUser']);
Route::post('update-user',[LibraryController::class,'updateUser']);
Route::get('delete-user/{id}',[LibraryController::class,'deleteUser']);




