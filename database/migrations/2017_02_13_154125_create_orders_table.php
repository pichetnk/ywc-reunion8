<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('orders', function (Blueprint $table) {
              
            $table->increments('id');
            $table->string('facebook_id',50);
            $table->enum('payment_status',['pay', 'not-pay']);
            $table->enum('receive_type',['own', 'zip']);
            $table->string('address', 250)->nullable();
            $table->string('provice', 6)->nullable();
            $table->string('zip_code', 6)->nullable();
          
            $table->timestamps();

            $table->foreign('facebook_id')->references('facebook_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
