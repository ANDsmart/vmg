<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleFunctionalPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_functional_parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('module_id');
            $table->text('title');
            $table->string('navigation_link');
            $table->text('description');
            $table->string('medial_link')->nullable()->comment('link for any media g video or audio');
            $table->smallInteger('isactive')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('module_functional_parts', function(Blueprint $table)
        {
            $table->foreign('module_id')->references('id')->on('modules')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_functionalities');
    }
}
