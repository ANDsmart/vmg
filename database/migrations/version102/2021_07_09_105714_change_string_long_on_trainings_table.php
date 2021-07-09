<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeStringLongOnTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('trainings', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('contents');
            $table->dropColumn('video_link');

        });


        Schema::table('trainings', function (Blueprint $table) {



            $table->text('contents');
            $table->text('title');
            $table->text('video_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
