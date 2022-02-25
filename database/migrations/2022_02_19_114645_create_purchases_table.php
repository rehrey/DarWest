<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('PO_id')->start_from('2202000');
            $table->string('medicine');
            $table->string('supplier');
            $table->string('payment_method');
            $table->string('batch_no');
            $table->string('box_size');
            $table->string('box_qty');
            $table->string('buy_price');
            $table->string('subtotal_price');
            $table->string('status');
            $table->date('expiry_date');
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
        Schema::dropIfExists('purchases');
    }
}
