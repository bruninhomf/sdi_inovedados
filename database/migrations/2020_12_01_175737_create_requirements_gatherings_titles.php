<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsGatheringsTitles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements_gatherings_titles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('requirements_id');
            $table->string('titles');
            $table->timestamps();
            $table->foreign('requirements_id')->references('id')->on('requirements_gatherings')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirements_gatherings_titles');
    }
}
