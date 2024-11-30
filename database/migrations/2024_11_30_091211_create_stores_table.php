<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id('st_sysid');
            $table->string('st_id', 250);
            $table->string('st_type', 250);
            $table->string('st_short_name', 500);
            $table->string('st_name', 500);
            $table->string('st_country_id', 45);
            $table->string('st_province', 250);
            $table->string('st_city', 250);
            $table->string('st_district', 250);
            $table->string('st_urban_district', 250);
            $table->string('st_street', 500);
            $table->string('st_zip_code', 45);
            $table->string('st_bank_id', 45);
            $table->string('st_account_number', 250);
            $table->string('st_tax_number', 250);
            $table->string('st_phone_1', 250);
            $table->string('st_phone_2', 250)->nullable();
            $table->string('st_email_1', 250);
            $table->string('st_email_2', 250)->nullable();
            $table->string('st_social_media_1', 250)->nullable();
            $table->string('st_social_media_2', 250)->nullable();
            $table->string('st_social_media_3', 250)->nullable();
            $table->string('st_social_media_4', 250)->nullable();
            $table->date('st_start_date');
            $table->date('st_end_date')->nullable();
            $table->unsignedInteger('st_status');
            $table->string('st_creater', 250);
            $table->dateTime('st_createtime');
            $table->string('st_lastmomodifier', 250)->nullable();
            $table->dateTime('st_lastmodifytime')->nullable();
            
            $table->primary('st_sysid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
