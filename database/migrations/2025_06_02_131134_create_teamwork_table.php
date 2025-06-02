<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamworkTable extends Migration
{
    public function up(): void
    {
        Schema::create('teamwork', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_path')->nullable(); // تم تغيير image إلى string
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teamwork');
    }
};
