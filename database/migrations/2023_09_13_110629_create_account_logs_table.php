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
        Schema::create('account_logs', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->float('amount'); // FLOAT data type for 'amount'
            $table->tinyInteger('is_expense'); // TINYINT data type for 'is_expense'
            $table->tinyInteger('is_income'); // TINYINT data type for 'is_income'
            $table->date('income_date'); // DATE data type for 'income_date'
            // $table->bigInteger('category'); // BIGINT data type for 'category'
            $table->tinyInteger('status')->default(1); // TINYINT data type for 'status' with default value 1
            $table->timestamps(); // Created at and updated at timestamps
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_logs');
    }
};
