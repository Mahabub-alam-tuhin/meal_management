<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class duelist extends Model
{
    use HasFactory;
    public function mealrate(){
        return $this->hasOne(MonthlyMealRates::class,"id",'user_id');
    } 

    public function user(){
        return $this->hasOne(UserMeals::class,"id",'user_id');
    } 
    public function payment(){
        return $this->hasOne(UserPayments::class,"user_id",'id');
    } 
}
