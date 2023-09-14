<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('monthly_meal_rates', function (Blueprint $table) {
            $table->id();
            $table->date('month')->nullable();
            $table->float('meal_rate')->nullable();
            $table->tinyInteger('is_visible')->nullable();
            $table->date('month_start_date')->nullable();
            $table->date('month_end_date')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_meal_rates');
    }
};
