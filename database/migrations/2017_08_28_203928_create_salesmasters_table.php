<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesmasters', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('sales_id', false, true)->length(10);

            $table->integer('cu_id')->unsigned();
            $table->integer('branch_id')->unsigned();

            $table->string('pay_method', 30)->nullable(false);
            $table->double('grand_total')->nullable(false);
            $table->double('discount')->nullable(false);
            $table->double('net_pay')->nullable(false);
            $table->double('due')->nullable(false);
 
            $table->date('created_date')->nullable();
            $table->string('created_by',100)->nullable();
            $table->date('update_date')->nullable();
            $table->string('updated_by', 100)->nullable();

            $table->unique('sales_id');

            $table->foreign('cu_id')->references('id')->on('customerinfos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('branch_id')->references('id')->on('branchinfos')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('salesmasters');
    }
}
