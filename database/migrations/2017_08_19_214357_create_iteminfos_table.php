<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIteminfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iteminfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id', false, true)->length(10);
            $table->string('barcode',60);
            $table->string('item_name', 100)->nullable(false);
            $table->integer('item_category_id')->unsigned();
            $table->integer('item_unit')->unsigned();
            
            $table->string('item_type', 50)->nullable(false);
            $table->double('item_qty', 50)->nullable(false);
            $table->double('item_price', 50)->nullable(false);
            $table->double('discount_percent');
            $table->double('discount_tk');
            $table->double('vat',2);

            $table->date('created_date')->nullable();
            $table->string('created_by',100)->nullable();
            $table->date('update_date')->nullable();
            $table->string('update_by', 100)->nullable();

            $table->unique('item_id');

            $table->foreign('item_category_id')->references('id')->on('itemcategories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('item_unit')->references('id')->on('itemunits')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('iteminfos');
    }
}
