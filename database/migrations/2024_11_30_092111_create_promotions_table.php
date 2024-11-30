<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id('pm_sysid');
            $table->integer('pm_st_sysid'); // Store system ID, assumed to reference a store table
            $table->string('pm_code', 500);
            $table->string('pm_name', 500);
            $table->string('pm_description', 500)->nullable();
            $table->date('pm_start_date');
            $table->date('pm_end_date');
            $table->string('pm_creater', 250);
            $table->dateTime('pm_createtime');
            $table->string('pm_lastmomodifier', 250)->nullable();
            $table->dateTime('pm_lastmodifytime')->nullable();

            $table->primary('pm_sysid');
            $table->index('pm_st_sysid'); // Index for store system ID field
        });
    }

    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
