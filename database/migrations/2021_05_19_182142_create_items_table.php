<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vid');
            $table->foreign('vid')->references('id')->on('vendors')->onUpdate('cascade')->OnDelete('cascade');
            $table->unsignedBigInteger('scid');
            $table->foreign('scid')->references('id')->on('subcategories')->onUpdate('cascade')->OnDelete('cascade');
            $table->unsignedBigInteger('bid');
            $table->foreign('bid')->references('id')->on('brands')->onUpdate('cascade')->OnDelete('cascade');
            $table->string('model');
            $table->string('package');
            $table->string('name');
            $table->string('size');
            $table->string('color');
            $table->string('desc');
            $table->string('stock');
            $table->string('sprice');
            $table->string('cprice');
            $table->string('image');
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
        Schema::dropIfExists('items');
    }
}
