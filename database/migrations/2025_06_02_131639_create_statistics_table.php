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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();

            // Number of plays
            $table->integer('number_of_plays')->default(0);

            // Number of awards
            $table->integer('number_of_awards')->default(0);

            // Number of volunteers
            $table->integer('number_of_volunteers')->default(0);

            // Number of governorates (added after volunteers)
            $table->integer('number_of_governorates')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
};
