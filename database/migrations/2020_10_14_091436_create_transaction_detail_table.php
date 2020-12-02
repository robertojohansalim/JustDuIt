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
            $table->foreignId('id_transaction_header')->constrained('transaction_header');
            $table->foreignId('id_shoe')->constrained('shoe');
            $table->string('image');
            $table->integer('price');
            $table->integer('quantity');

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