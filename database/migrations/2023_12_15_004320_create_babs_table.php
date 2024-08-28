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
        Schema::create('babs', function (Blueprint $table) {
            $table->char('bab_id', 5)->primary();
            $table->unsignedBigInteger('class_id');
            $table->char('subject_id', 5);
            $table->string('bab_name', 150);
            $table->text('description')->nullable();
            $table->timestamps();
            
            $table->foreign('class_id')->references('id')->on('class');
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('babs');
    }
};
