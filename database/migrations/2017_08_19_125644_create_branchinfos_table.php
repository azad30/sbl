<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branchinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id', false, true)->length(10);
            $table->integer('company_id')->unsigned();
            $table->string('branch_name', 100)->nullable(false);
            $table->string('branch_type', 50)->nullable(false);
            $table->integer('b_mobile',false, true)->length(20);
            $table->string('b_email', 50)->nullable(false);
            $table->string('b_address', 200)->nullable(false);
            $table->string('b_country', 50)->nullable(false);
            $table->integer('b_telephone', false, true)->length(20);
            $table->string('b_web', 50);
            $table->string('b_acc_no', 50);
            $table->string('bank_name', 50);
            $table->string('bank_branch_name', 50);
            $table->string('b_sub_acc_no', 50);
            $table->string('b_license_no', 50);
            $table->string('b_description', 200);

            $table->string('image', 191);

            $table->date('created_date')->nullable();
            $table->string('created_by',100)->nullable();
            $table->date('update_date')->nullable();
            $table->string('update_by', 100)->nullable();

            $table->unique('branch_id');

            $table->foreign('company_id')->references('id')->on('companyinfos')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('branchinfos');
    }
}
