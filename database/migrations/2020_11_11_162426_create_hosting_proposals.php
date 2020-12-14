<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostingProposals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosting_proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('diskspace');
            $table->string('traffic');
            $table->string('domanins')->nullable();
            $table->string('subdomains')->nullable();
            $table->string('mailboxes')->nullable();
            $table->string('ftp_accounts')->nullable();
            $table->string('database')->nullable();
            $table->string('php_processes')->nullable();
            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosting_proposals');
    }
}
