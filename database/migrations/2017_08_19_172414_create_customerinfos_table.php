<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cu_id', false, true)->length(10);
            $table->integer('branch_id')->unsigned();
            $table->string('cu_type', 30)->nullable(false);
            $table->string('customer_code', 50)->nullable(false);
            $table->string('cu_name', 30)->nullable(false);
            $table->string('cu_email', 50)->nullable(false);
            $table->string('cu_address', 200)->nullable(false);
            $table->string('cu_country', 50)->nullable(false);
            $table->integer('cu_mobile', false, true)->length(20);
            $table->integer('cu_telephone', false, true)->length(20);

            $table->decimal('cu_credit_limit', 10,2);
            $table->decimal('cu_discount_rate_p', 6,2);
            $table->decimal('cu_discount_rate_d', 6,2);
            $table->decimal('cu_discount_rate_o', 6,2);
            $table->decimal('cu_discount_rate_g', 6,2);

            $table->string('cu_ac_no', 30);
            $table->string('cu_bank_name', 30);
            $table->string('cu_bank_branch_name', 30);

            $table->string('cu_description', 100);
            $table->string('reference_name', 30);

            $table->string('image', 191);
            $table->string('status', 10);

            $table->date('created_date')->nullable();
            $table->string('created_by',100)->nullable();
            $table->date('update_date')->nullable();
            $table->string('updated_by', 100)->nullable();

            $table->unique('cu_id');

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
        Schema::dropIfExists('customerinfos');
    }
}
