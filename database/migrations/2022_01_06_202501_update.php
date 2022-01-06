<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('jobs');
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('what_you_have_got');
            $table->integer('active');
            $table->timestamps();
        });
        Schema::dropIfExists('job_requirements');
        Schema::create('job_requirements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('job_id');
            $table->integer('active');
            $table->timestamps();
        });
        Schema::dropIfExists('job_what_we_expect');
        Schema::create('job_what_we_expect', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('job_id');
            $table->integer('active');
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
