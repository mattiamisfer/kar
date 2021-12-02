<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->date('receipt_requirement_date');
            $table->string('client_name');
            $table->string('country_name');
            $table->string('project_name');
            $table->string('postitions');
            $table->string('num_of_requirement');
            $table->string('source');
            $table->string('cvs_shared');
            $table->string('short_list');
            $table->string('line_up_for_interview');
            $table->string('interview_location');
            $table->date('date_of_interview');
            $table->string('attended');
            $table->string('selected');
            $table->string('accepted');
            $table->string('offer_received');
            $table->string('under_medical');
            $table->string('medical_fit');
            $table->string('visa_under_proccess');
            $table->string('visa_received');
            $table->string('ecr_status');
            $table->date('scheduled');
            $table->date('deployed_on');
            $table->string('remarks');

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');




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
        Schema::dropIfExists('entries');
    }
}
