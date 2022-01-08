<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveToJobs extends Migration
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
            $table->string('title')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('description')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('what_you_have_got')->nullable();
            $table->string('what_you_have_got_ar')->nullable();
            $table->integer('active')->nullable();
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
