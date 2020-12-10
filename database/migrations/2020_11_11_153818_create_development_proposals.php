<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopmentProposals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('development_proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project');
            $table->string('version');
            $table->date('date');
            $table->char('business_solution_one');
            $table->char('business_solution_two')->nullable();
            $table->char('business_solution_three')->nullable();
            $table->string('requirements');
            $table->date('start_development');
            $table->date('texting_release');
            $table->date('start_test');
            $table->date('homologation');
            $table->date('delivery');
            $table->string('contact_name');
            $table->string('client');
            $table->string('address');
            $table->string('phone');
            $table->string('cnpj');
            $table->string('amount');
            $table->string('first_payment');
            $table->date('first_payment_date');
            $table->string('second_payment');
            $table->date('second_payment_date');
            $table->date('proposal_validity');
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
        Schema::dropIfExists('development_proposals');
    }
}
