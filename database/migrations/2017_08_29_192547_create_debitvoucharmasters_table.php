<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebitvoucharmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debitvoucharmasters', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('vouchar_id', false, true)->length(10);            

            $table->date('vouchar_date')->nullable(false);
            $table->string('name', 50);
            $table->string('mobile', 15);
            $table->string('address', 150);
            $table->double('grand_total');

            $table->integer('branch_id')->unsigned();
 
            $table->date('created_date')->nullable();
            $table->string('created_by',100)->nullable();
            $table->date('update_date')->nullable();
            $table->string('updated_by', 100)->nullable();

            $table->unique('vouchar_id');

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
        Schema::dropIfExists('debitvoucharmasters');
    }
}
