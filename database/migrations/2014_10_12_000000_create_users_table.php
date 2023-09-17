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
         Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('user_role')->nullable();
            $table->string('image', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password', 60);
            $table->string('mobile', 20)->nullable();
            $table->enum('department', ["IT", "IELTS", "SPOKEN", "EMPLOYEE"]);
            $table->string('address', 100);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
