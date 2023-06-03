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
        Schema::create('regemploysals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('salary');
            $table->date('date');
            $table->string('name');
            $table->foreignUuid('empy_id')->references('id')->on('employees');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regemploysals');
    }
};
