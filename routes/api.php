<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\mealController;
use App\Http\Controllers\Api\loginController;
use App\Http\Controllers\Api\UsermanageController;
use App\Http\Controllers\Api\mealRateController;
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

Route::get('/test', function () {
    return response()->json([
        "data" => [
            "d1" => 200,
            "d2" => 300,
        ]
    ]);
});

Route::post('/test', function () {
    return response()->json([
        "data" => request()->all()
    ]);
});
Route::post('apiregister', [loginController::class, 'apiregister']);
Route::post('apilogin', [loginController::class, 'apilogin']);

Route::middleware('auth:api')->group(function () {
    Route::prefix('meal')->group(function () {
        Route::get('/all_meal', [mealController::class, 'all_meal']);
        Route::get('/find/{id}', [mealController::class, 'find']);
        Route::post('/update/{id}', [mealController::class, 'update']);
        Route::get('/delete/{id}', [mealController::class, 'delete']);
    });

    Route::prefix('user_management')->group(function () {
        Route::get('/all_user', [UsermanageController::class, 'all_user']);
        Route::get('/find/{id}', [UsermanageController::class, 'find']);
        Route::post('/update/{id}', [UsermanageController::class, 'update']);
        Route::get('/delete/{id}', [UsermanageController::class, 'delete']);
    });

    Route::prefix('meal_rate')->group(function () {
        Route::get('/all_meal_rate', [mealRateController::class, 'all_meal_rate']);
        Route::get('/find/{id}', [mealRateController::class, 'find']);
        Route::post('/update/{id}', [mealRateController::class, 'update']);
        Route::get('/delete/{id}', [mealRateController::class, 'delete']);
    });
    
});
