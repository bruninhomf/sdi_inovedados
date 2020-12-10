<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsecaseTestModules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usecase_test_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usecase_id');
            $table->string('description');
            $table->timestamps();
            $table->foreign('usecase_id')->references('id')->on('usecase_test_systems')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usecase_test_modules');
    }
}
