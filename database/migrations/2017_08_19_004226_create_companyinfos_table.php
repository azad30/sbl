<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id', false, true)->length(10);
            $table->string('company_name', 100)->nullable(false);
            $table->string('company_type', 50)->nullable(false);
            $table->integer('mobile',false, true)->length(20);
            $table->string('email', 50)->nullable(false);
            $table->string('address', 200)->nullable(false);
            $table->string('country', 50)->nullable(false);
            $table->integer('telephone',false, true)->length(30);
            $table->string('website', 50);
            $table->string('primary_company_ac_no', 50);
            $table->string('bank_name', 50);
            $table->string('branch_name', 50);
            $table->string('company_sub_ac_no', 50);
            $table->string('company_license_no', 50);
            $table->string('company_description', 200);
            $table->string('image', 191);
            $table->date('created_date')->nullable(false);
            $table->string('created_by',100)->nullable(false);
            $table->date('update_date');
            $table->string('update_by', 100);
            $table->unique('company_id');
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
        Schema::dropIfExists('companyinfos');
    }
}
