<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('job_what_we_expect');
        Schema::create('job_what_we_expect', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
            $table->integer('job_id');
            $table->timestamps();
        });

        Schema::dropIfExists('job_requirements');
        Schema::create('job_requirements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
            $table->integer('job_id');
            $table->timestamps();
        });

        Schema::dropIfExists('jobs');
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('description')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('what_you_have_got')->nullable();
            $table->string('what_you_have_got_ar')->nullable();
            $table->timestamps();
        });

        Schema::dropIfExists('blogs');
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('description')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('image')->nullable();;
            $table->integer('created_by')->nullable();
            $table->integer('active')->nullable();
            $table->timestamps();
        });

        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('description')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('image')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('type')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('active')->nullable();
            $table->timestamps();
        });

        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('description')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('image')->nullable();
            $table->integer('type')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->integer('created_by')->nullable();
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
