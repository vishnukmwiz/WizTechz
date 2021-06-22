<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('moid');
            $table->foreign('moid')->references('id')->on('morders')->onUpdate('cascade')->OnDelete('cascade');
            $table->string('name');
            $table->string('phone');
            $table->string('pin');
            $table->string('locality');
            $table->string('address');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('landmark');
            $table->string('alternatephone');
            $table->string('type');
            $table->string('paymode');
            $table->string('paystatus');
            $table->string('delistatus');
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
        Schema::dropIfExists('sales');
    }
}
