<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('pa_sysid');
            $table->string('pa_id', 250);
            $table->string('pa_type', 250);
            $table->string('pa_name', 250);
            $table->string('pa_bank_id', 45);
            $table->string('pa_account_number', 250);
            $table->integer('pa_status');
            $table->string('pa_creater', 250);
            $table->dateTime('pa_createtime');
            $table->string('pa_lastmodifier', 250)->nullable();
            $table->dateTime('pa_lastmodifytime')->nullable();

            $table->primary('pa_sysid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
