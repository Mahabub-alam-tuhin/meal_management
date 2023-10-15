<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\allUserController;
use App\Http\Controllers\Api\dailyExpenseController;
use App\Http\Controllers\Api\mealBookingController;
use App\Http\Controllers\Api\mealController;
use App\Http\Controllers\Api\mealRateController;
use App\Http\Controllers\Api\userInfoController;
use App\Http\Controllers\frontEndBookingController;
use App\Http\Controllers\frontEndController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\mealRegistercontroller;
use App\Http\Controllers\registerController;
use App\Http\Controllers\User_managementController;
use Carbon\Carbon;

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
Route::get('/', [frontEndController::class, 'index'])->name('/');
Route::get('/Meal_Booking', [frontEndController::class, 'Meal_Booking'])->name('frontEnd.Meal_Booking.Meal_Booking')->middleware(['isuser']);;

Route::prefix('register')->group(function(){
    Route::get('/register',[registerController::class,'register'])->name('frontEnd.register.register');
    Route::post('/store', [registerController::class, 'store'])->name('frontEnd.register.store');
});
Route::prefix ('login')->group(function(){
    Route::get('/login', [logincontroller::class, 'login'])->name('frontEnd.login.login');
});

Route::prefix('Booking')->group(function () {
    Route::get('/add_user_Meal_Booking', [frontEndBookingController::class, 'add_user_Meal_Booking'])->name('frontEnd.Booking.add_user_Meal_Booking');
    Route::post('/store', [frontEndBookingController::class, 'store'])->name('frontEnd.Booking.store');
    Route::get('/show', [frontEndBookingController::class, 'show'])->name('frontEnd.Booking.show');

});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     // return view('welcome');
//     $from = Carbon::parse('2023-09-26 17:35');
//     $to = Carbon::parse('2023-09-26 17:30');
//     dd( $from->diffInMinutes($to, false));
// });


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');->middleware('isadmin')
    // 
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard.home')->middleware('isadmin');
    Route::get('/add_user', [User_managementController::class, 'add_user'])->name('admin.user_management.add_user');
    Route::post('/store', [User_managementController::class, 'store'])->name('admin.user_management.store');
    Route::get('/all_user', [User_managementController::class, 'all_user'])->name('admin.user_management.all_user');
    Route::get('/edit/{id}', [User_managementController::class, 'edit'])->name('admin.user_management.edit');
    Route::post('/update/{id}', [User_managementController::class, 'update'])->name('admin.user_management.update');
    Route::get('/delete/{id}', [User_managementController::class, 'delete'])->name('admin.user_management.delete');

    Route::prefix('meal')->group(function () {
        Route::get('/add_meal', [mealController::class, 'add_meal'])->name('admin.meal.add_meal');
        Route::post('/store', [mealController::class, 'store'])->name('admin.meal.store');
        // Route::get('/search', [mealController::class, 'search'])->name('admin.meal.search');
        Route::get('/all_meal', [mealController::class, 'all_meal'])->name('admin.meal.all_meal');
        Route::get('/find/{id}', [mealController::class, 'find'])->name('admin.meal.edit');
        Route::post('/update/{id}', [mealController::class, 'update'])->name('admin.meal.update');
        Route::get('/delete/{id}', [mealController::class, 'delete'])->name('admin.meal.delete');
   
    });

    Route::prefix('meal_register')->group(function () {
        Route::get('/Add_user_meal', [mealRegistercontroller::class, 'Add_user_meal'])->name('admin.meal_register.Add_user_meal');
        Route::post('/store', [mealRegistercontroller::class, 'store'])->name('admin.meal_register.store');    
        Route::get('/all_user_meal', [mealRegistercontroller::class, 'all_user_meal'])->name('admin.meal_register.all_user_meal');

    });

    Route::prefix('meal_rate')->group(function () {
        Route::get('/add_meal_rate', [mealRateController::class, 'add_meal_rate'])->name('admin.meal_rate.add_meal_rate');
        Route::post('/store', [mealRateController::class, 'store'])->name('admin.meal_rate.store');
        Route::get('/all_meal_rate', [mealRateController::class, 'all_meal_rate'])->name('admin.meal_rate.all_meal_rate');
        Route::get('/find/{id}', [mealRateController::class, 'find'])->name('admin.meal_rate.edit');
        Route::post('/update/{id}', [mealRateController::class, 'update'])->name('admin.meal_rate.update');
        Route::get('/delete/{id}', [mealRateController::class, 'delete'])->name('admin.meal_rate.delete');
    });

    Route::prefix('daily_expense')->group(function () {
        Route::get('/add_expense', [dailyExpenseController::class, 'add_expense'])->name('admin.daily_expense.add_expense');
        Route::post('/store', [dailyExpenseController::class, 'store'])->name('admin.daily_expense.store');
        Route::get('/all_expense', [dailyExpenseController::class, 'all_expense'])->name('admin.daily_expense.all_expense');
        Route::get('/find/{id}', [dailyExpenseController::class, 'find'])->name('admin.daily_expense.edit');
        Route::post('/update/{id}', [dailyExpenseController::class, 'update'])->name('admin.daily_expense.update');
        Route::get('/delete/{id}', [dailyExpenseController::class, 'delete']);
    });

    
    Route::prefix('user')->group(function () {
        Route::get('/all_user', [allUserController::class, 'all_user'])->name('admin.user.all_user');
        
    });

    
    Route::prefix('info')->group(function () {
        Route::get('/all_info', [userInfoController::class, 'all_info'])->name('admin.info.all_info');
    });

    Route::prefix('meal_booking')->group(function () {
        Route::get('/all_meal', [mealBookingController::class, 'all_meal'])->name('admin.meal_booking.all_meal');
        Route::post('/store', [mealBookingController::class, 'store']);    
    });
    

});
