<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\User_managementController;

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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard.home');
    Route::get('/add_user', [User_managementController::class, 'add_user'])->name('admin.user_management.add_user');
    Route::post('/store', [User_managementController::class, 'store'])->name('admin.user_management.store');
    Route::get('/all_user', [User_managementController::class, 'all_user'])->name('admin.user_management.all_user');
    Route::get('/edit/{id}', [User_managementController::class, 'edit'])->name('admin.user_management.edit');
    Route::post('/update/{id}', [User_managementController::class, 'update'])->name('admin.user_management.update');
    Route::get('/delete/{id}', [User_managementController::class, 'delete'])->name('admin.user_management.delete');

});
