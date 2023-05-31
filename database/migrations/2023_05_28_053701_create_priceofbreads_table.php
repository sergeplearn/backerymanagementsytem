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
        Schema::create('priceofbreads', function (Blueprint $table) {
            $table->id();
            $table->integer('bread50');
            $table->integer('bread100');
            $table->integer('bread200');
            $table->integer('bread300');
            $table->integer('bread500');
            $table->integer('bread1000');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priceofbreads');
    }
};
