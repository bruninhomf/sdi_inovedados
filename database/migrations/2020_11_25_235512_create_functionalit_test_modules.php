<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionalitTestModules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functionalit_test_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('functionalit_id');
            $table->string('description');
            $table->timestamps();
            $table->foreign('functionalit_id')->references('id')->on('functionalit_test_systems')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functionalit_test_modules');
    }
}
