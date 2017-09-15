<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentrecievesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentrecieves', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('payment_id', false, true)->length(10);

            $table->integer('cu_id')->unsigned();

            $table->string('particulars', 500);
            $table->string('payment_method')->nullable(false);
            $table->double('pay_amount')->nullable(false);
            $table->datetime('payment_date')->nullable(false);


 
            $table->date('created_date')->nullable();
            $table->string('created_by',100)->nullable();
            $table->date('update_date')->nullable();
            $table->string('updated_by', 100)->nullable();

            $table->unique('payment_id');

            $table->foreign('cu_id')->references('id')->on('customerinfos')->onDelete('cascade')->onUpdate('cascade');

            $table->rememberToken();
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
        Schema::dropIfExists('paymentrecieves');
    }
}
