<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudsTestModules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds_test_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cruds_id');
            $table->string('description');
            $table->timestamps();
            $table->foreign('cruds_id')->references('id')->on('cruds_test_systems')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cruds_test_modules');
    }
}
