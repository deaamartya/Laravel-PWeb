<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saless', function (Blueprint $table) {
            $table->integer('nota_id', 11)->autoIncrement();
            $table->integer('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('userss');
            $table->date('nota_date');
            $table->float('total_payment');
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
        Schema::dropIfExists('saless');
    }
}
