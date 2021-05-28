<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('moid');
            $table->foreign('moid')->references('id')->on('morders')->onUpdate('cascade')->OnDelete('cascade');
            $table->unsignedBigInteger('iid');
            $table->foreign('iid')->references('id')->on('items')->onUpdate('cascade')->OnDelete('cascade');
            $table->string('quantity');
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
        Schema::dropIfExists('corders');
    }
}
