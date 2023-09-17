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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('shut_down_app')->nullable();
            $table->text('shut_down_reason')->nullable();
            $table->string('contact_name')->nullable();
            $table->integer('contact_number')->nullable();
            $table->time('meat_set_last_time')->nullable();
            $table->time('meal_set_alert_time')->nullable();
            $table->text('alert_text_for_all')->nullable();
            $table->time('today_meal_coocking_end_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
