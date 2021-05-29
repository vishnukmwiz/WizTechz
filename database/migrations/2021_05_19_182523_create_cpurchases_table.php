<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpurchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iid');
            $table->foreign('iid')->references('id')->on('items')->onUpdate('cascade')->OnDelete('cascade');
            $table->string('qty');
            $table->string('status');
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
        Schema::dropIfExists('cpurchases');
    }
}
