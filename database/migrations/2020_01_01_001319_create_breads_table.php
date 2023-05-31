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
        Schema::create('breads', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('emply_id');
            $table->integer('bread50');
            $table->integer('long40');
            $table->integer('square40');
            $table->integer('long80');
            $table->integer('round');
            $table->integer('kirico');
            $table->integer('square80');
            $table->integer('bread200');
            $table->integer('bread300');
            $table->integer('bread500');
            $table->integer('bread1000');
            $table->string('ref_code');
            $table->date('date');
          
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            
            
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breads');
    }
};

