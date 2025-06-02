<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {

        Schema::create('masrahiyat', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // اسم المسرحية
            $table->string('author'); // المؤلف
            $table->string('director'); // المخرج
            $table->string('assistant_director')->nullable();
            $table->string('music_composer')->nullable();
            $table->string('artistic_consultant')->nullable();
            $table->text('collaborators')->nullable(); // بالتعاون مع
            $table->integer('number_participants')->default(0); // عدد  المشاركين
            $table->date('performance_dates'); // تواريخ العرض
            $table->text('performance_locations'); // أماكن العرض
            $table->string('play_type'); // نوع العرض
            $table->text('significance'); // أهمية العرض
            $table->text('inspiration_source'); // مصدر الإلهام
            $table->text('artistic_paragraph'); // الفقرة الفنية
            $table->string('image_path')->nullable(); // صورة المسرحية
            $table->string('youtube_url')->nullable(); // رابط اليوتيوب
            $table->json('characters')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masrahiyat');
    }
};
