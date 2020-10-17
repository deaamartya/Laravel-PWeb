<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('customer_id', 11)->autoIncrement();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->decimal('phone', 12, 0);
            $table->string('email', 50);
            $table->string('street', 50);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->decimal('zip_code', 5, 0);
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
        Schema::dropIfExists('customers');
    }
}
