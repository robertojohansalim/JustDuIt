<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->integer('id_transaction_header');
            $table->integer('id_shoe');
            $table->string('image');
            $table->integer('price');

            // Constraint
            $table->primary(['id_transaction_header', 'id_shoe']);
            // $table->foreign('id_transaction_header')->references('id')->on('transaction_header');
            // $table->foreign('id_shoe')->references('id')->on('shoe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_detail');
    }
}
