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

            // this to mark the intention of the post written by me or other users
            // <support> is for those who paid or subscribe monthly
            // <question> is for those who just ask some questions for me
            $table->enum('intention', ['post', 'support', 'question']);

            $table->text('summary');
            $table->text('body');

            $table->string('thumbnail')->nullable();

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
        Schema::dropIfExists('postss');
    }
};
