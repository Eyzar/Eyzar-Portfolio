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
        Schema::create('subbabs', function (Blueprint $table) {
            $table->id();
            $table->char('bab_id', 5);
            $table->string('subBab_name');
            $table->timestamps();

            $table->foreign('bab_id')->references('bab_id')->on('babs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subbabs');
    }
};
