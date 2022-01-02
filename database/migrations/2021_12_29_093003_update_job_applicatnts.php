<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateJobApplicatnts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('job_applicants');
        Schema::create('job_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->integer('age')->nullable();
            $table->string('city')->nullable();
            $table->double('expected_salary')->nullable();
            $table->date('start_date')->nullable();
            $table->string('experience')->nullable();
            $table->string('application')->nullable();
            $table->integer('job_id')->nullable();
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
        //
    }
}
