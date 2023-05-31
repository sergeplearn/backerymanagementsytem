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
        Schema::create('paysupplies', function (Blueprint $table) {
            $table->uuid('id')->primary();
           
            $table->integer('amount');
            $table->date('date');
            $table->foreignUuid('ref_supply')->references('id')->on('supplies');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paysupplies');
    }
};
