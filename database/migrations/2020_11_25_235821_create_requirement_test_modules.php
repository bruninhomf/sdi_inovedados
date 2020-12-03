<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementTestModules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirement_test_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('system_id');
            $table->string('name');
            $table->timestamps();
            $table->foreign('system_id')->references('id')->on('requirement_test_systems')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirement_test_modules');
    }
}
