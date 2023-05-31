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
        Schema::create('houseworkers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('fname');
            $table->string('sname');
            $table->string('tell');
            $table->string('address');
            $table->integer('salary');
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
        Schema::dropIfExists('houseworkers');
    }
};
