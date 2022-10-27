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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();

            $table->enum('type', ['product', 'service', 'work']);

            $table->string('title');
            $table->string('summary');
            $table->text('body');
            $table->string('thumbnail');

            // price for single item licensing
            $table->decimal('price', 8, 2);

            // price for single item extendend licensing (allowed for resell)
            $table->decimal('ext_price', 8, 2);

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
        Schema::dropIfExists('entities');
    }
};
