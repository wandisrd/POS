<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('em_sysid');
            $table->integer('em_st_sysid');
            $table->integer('em_dc_sysid');
            $table->string('em_id',100);
            $table->integer('em_type');
            $table->string('em_username', 250);
            $table->string('em_first_name', 250);
            $table->string('em_middle_name', 250)->nullable();
            $table->string('em_last_name', 250);
            $table->string('em_password', 250);
            $table->string('em_nin', 250)->nullable();
            $table->string('em_country_id', 45);
            $table->string('em_province', 250)->nullable();
            $table->string('em_city', 250)->nullable();
            $table->string('em_district', 250)->nullable();
            $table->string('em_urban_district', 250)->nullable();
            $table->string('em_street', 500)->nullable();
            $table->string('em_zip_code', 45)->nullable();
            $table->string('em_bank_id', 45)->nullable();
            $table->string('em_account_number', 250)->nullable();
            $table->string('em_tax_number', 250)->nullable();
            $table->string('em_phone_1', 250)->nullable();
            $table->string('em_phone_2', 250)->nullable();
            $table->string('em_email_1', 250)->unique();
            $table->string('em_email_2', 250)->nullable();
            $table->string('em_social_media_1', 250)->nullable();
            $table->string('em_social_media_2', 250)->nullable();
            $table->string('em_social_media_3', 250)->nullable();
            $table->string('em_social_media_4', 250)->nullable();
            $table->date('em_start_date')->nullable();
            $table->date('em_end_date')->nullable();
            $table->unsignedInteger('em_status');
            $table->string('em_creater', 250)->nullable();
            $table->dateTime('em_createtime')->nullable();
            $table->string('em_lastmomodifier', 250)->nullable();
            $table->dateTime('em_lastmodifytime')->nullable();
            $table->index('em_st_sysid'); // Index for employee sysid field
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
