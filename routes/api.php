<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\mealController;
use App\Http\Controllers\User_managementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->group(function (){
    // return $request->user();

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard.home');
    Route::get('/add_user', [User_managementController::class, 'add_user'])->name('admin.user_management.add_user');
    Route::post('/store', [User_managementController::class, 'store'])->name('admin.user_management.store');
    Route::get('/all_user', [User_managementController::class, 'all_user'])->name('admin.user_management.all_user');
    Route::get('/edit/{id}', [User_managementController::class, 'edit'])->name('admin.user_management.edit');
    Route::post('/update/{id}', [User_managementController::class, 'update'])->name('admin.user_management.update');
    Route::get('/delete/{id}', [User_managementController::class, 'delete'])->name('admin.user_management.delete');
// });

Route::get('/test',function(){
    return response()->json([
        "data"=> [
            "d1" => 200,
            "d2" => 300,
        ]
    ]);
});

Route::post('/test',function(){
    return response()->json([
        "data"=> request()->all()
    ]);
});

Route::prefix('meal')->group(function () {
    Route::get('/add_meal', [mealController::class, 'add_meal']);
    Route::post('/store', [mealController::class, 'store']);
    Route::get('/show_meal', [mealController::class, 'show_meal']);
    Route::get('/edit/{id}', [mealController::class, 'find']);
    Route::post('/update/{id}', [mealController::class, 'update']);
    Route::get('/delete/{id}', [mealController::class, 'delete']);
});
