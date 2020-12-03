<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsGatheringsMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements_gatherings_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('titles_id');
            $table->string('menu');
            $table->timestamps();
            $table->foreign('titles_id')->references('id')->on('requirements_gatherings_titles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirements_gatherings_menus');
    }
}
