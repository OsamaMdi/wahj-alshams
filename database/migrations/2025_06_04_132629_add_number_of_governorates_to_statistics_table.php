<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumberOfGovernoratesToStatisticsTable extends Migration
{
    public function up()
    {
        Schema::table('statistics', function (Blueprint $table) {
            $table->integer('number_of_governorates')->default(0)->after('number_of_volunteers');
        });
    }

    public function down()
    {
        Schema::table('statistics', function (Blueprint $table) {
            $table->dropColumn('number_of_governorates');
        });
    }
}
