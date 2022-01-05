<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->text('why_choose_us')->nullable();
            $table->text('our_mission')->nullable();
            $table->text('our_vision')->nullable();
            $table->integer('tested_for_c_virous_no')->nullable();
            $table->integer('employees_no')->nullable();
            $table->integer('products_no')->nullable();
            $table->text('our_strategy')->nullable();
            $table->text('our_values')->nullable();
            
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
        Schema::dropIfExists('about');
    }
}
