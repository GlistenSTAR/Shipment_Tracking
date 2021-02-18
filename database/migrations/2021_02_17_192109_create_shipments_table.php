<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('shippername');
            $table->double('shipperphone');
            $table->string('shipperaddress');
            $table->string('shipperemail');
            $table->string('receivername');
            $table->double('receiverphone');
            $table->string('receiveraddress');
            $table->string('receiveremail');
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->string('status');
            $table->string('remarks');
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
        Schema::dropIfExists('shipments');
    }
}
