<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnoversTable extends Migration
{
    public function up()
    {
        Schema::create('turnovers', function (Blueprint $table) {
            $table->id('tu_sysid');
            $table->integer('tu_pr_sysid'); // Reference to product system ID
            $table->integer('tu_st_sysid'); // Reference to store system ID
            $table->integer('tu_em_sysid'); // Reference to employee system ID
            $table->integer('tu_cu_sysid'); // Reference to customer system ID
            $table->integer('tu_pm_sysid'); // Reference to payment method system ID
            $table->decimal('tu_qty', 14, 4); // Quantity
            $table->string('tu_location', 45); // Location of turnover
            $table->text('tu_remark')->nullable(); // Remark about the turnover
            $table->string('tu_creater', 250); // Creator of the turnover record
            $table->dateTime('tu_createtime'); // Creation time of the turnover record
            $table->string('tu_lastmodifier', 250)->nullable(); // Last modifier of the record
            $table->dateTime('tu_lastmodifytime')->nullable(); // Last modification time

            $table->primary('tu_sysid');
            $table->index('tu_pr_sysid');
            $table->index('tu_st_sysid');
            $table->index('tu_em_sysid');
            $table->index('tu_cu_sysid');
            $table->index('tu_pm_sysid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('turnovers');
    }
}
