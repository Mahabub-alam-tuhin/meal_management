<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMeals extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_meal');
    }
    public function user(){
        return $this->hasOne(User::class,"id",'user_id');
    } 

    public function meal_rate() {
        return $this->hasOne(MonthlyMealRates::class,'id','meal_rate_id');
    }
    // public function monthlyMealRates()
    // {
    //     return $this->hasMany(MonthlyMealRates::class, 'id', 'user_id');
    // }
    
}
