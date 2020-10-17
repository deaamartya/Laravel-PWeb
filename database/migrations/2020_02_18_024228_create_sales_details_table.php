<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {
            $table->integer('nota_id');
            $table->foreign('nota_id')->references('nota_id')->on('saless');
            $table->integer('product_id');
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->primary(['nota_id', 'product_id']);
            $table->string('quantity', 50);
            $table->float('selling_price');
            $table->float('discount');
            $table->float('total_price');
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
        Schema::dropIfExists('sales_details');
    }
}
