<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('id')->on('customers')->onUpdate('cascade')->OnDelete('cascade');
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
        Schema::dropIfExists('addresses');
    }
}
