<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesdetails', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('sales_details_id', false, true)->length(10);

            $table->integer('sales_id')->unsigned();
            $table->integer('item_id')->unsigned();

            $table->double('quantity')->nullable(false);
            $table->double('price')->nullable(false);

            $table->decimal('disc_percent',10,0);
            $table->decimal('total_discount',10,2);

            $table->double('bonus_qty');

            $table->integer('vat');

            $table->double('total_amount')->nullable(false);

 
            $table->date('created_date')->nullable();
            $table->string('created_by',100)->nullable();
            $table->date('update_date')->nullable();
            $table->string('updated_by', 100)->nullable();

            $table->unique('sales_details_id');

            $table->foreign('sales_id')->references('id')->on('salesmasters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('item_id')->references('id')->on('iteminfos')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('salesdetails');
    }
}
