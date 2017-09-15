<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebitvouchardetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debitvouchardetails', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('vouchar_id')->unsigned();            

            $table->string('expense_name', 50);
            $table->string('description', 200);
            $table->double('amount')->nullable(false);

 
            $table->date('created_date')->nullable();
            $table->string('created_by',100)->nullable();
            $table->date('update_date')->nullable();
            $table->string('updated_by', 100)->nullable();

            $table->foreign('vouchar_id')->references('id')->on('debitvoucharmasters')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('debitvouchardetails');
    }
}
