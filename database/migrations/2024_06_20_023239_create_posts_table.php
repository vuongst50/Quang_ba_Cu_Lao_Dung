<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('post_type')->nullable();
            $table->longText('main_description')->nullable();
            $table->string('main_image')->nullable();

            $table->longText('description1')->nullable();
            $table->longText('description2')->nullable();
            $table->string('image1')->nullable();

            $table->longText('description3')->nullable();
            $table->longText('description4')->nullable();
            $table->string('image2')->nullable();

            $table->longText('description5')->nullable();
            $table->longText('description6')->nullable();

            $table->string('name')->nullable();
            $table->string('user_id')->nullable();
            $table->string('post_status')->nullable();
            $table->string('usertype')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
