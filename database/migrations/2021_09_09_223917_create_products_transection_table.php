<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTransectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products-transection', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('UUID');
            $table->string('Name');
            $table->string('Email');
            $table->string('Number');
            $table->longtext('Addres');
            $table->integer('transection_total');
            $table->string('transaction_status');

            $table->softDeletes();
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
        Schema::dropIfExists('products_transection');
    }
}
