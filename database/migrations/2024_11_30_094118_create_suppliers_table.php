<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id('su_sysid');
            $table->integer('su_id_sysid'); // Reference to supplier ID system
            $table->integer('su_st_sysid'); // Reference to store system ID
            $table->string('su_name', 100);
            $table->string('su_country_id', 45);
            $table->string('su_province', 250);
            $table->string('su_city', 250);
            $table->string('su_district', 250);
            $table->string('su_urban_district', 250);
            $table->string('su_street', 500);
            $table->string('su_bank_id', 45)->nullable();
            $table->string('su_account_number', 250)->nullable();
            $table->string('su_phone_1', 250);
            $table->string('su_email_1', 250);
            $table->string('su_creater', 250);
            $table->dateTime('su_createtime');
            $table->string('su_lastmomodifier', 250)->nullable();
            $table->dateTime('su_lastmodifytime')->nullable();

            $table->primary('su_sysid');
            $table->index('su_st_sysid'); // Index for store system ID
        });
    }

    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
