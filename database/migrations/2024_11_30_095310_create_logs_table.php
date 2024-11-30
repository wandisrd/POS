<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id('lo_sysid');
            $table->integer('lo_st_sysid'); // Reference to store system ID
            $table->integer('lo_em_sysid'); // Reference to employee system ID
            $table->integer('lo_cu_sysid'); // Reference to customer system ID
            $table->text('lo_remark')->nullable(); // Remark related to the log
            $table->string('lo_creater', 250); // Creator of the log record
            $table->dateTime('lo_createtime'); // Creation time of the log record
            $table->string('lo_lastmodifier', 250)->nullable(); // Last modifier of the log record
            $table->dateTime('lo_lastmodifytime')->nullable(); // Last modification time

            $table->primary('lo_sysid');
            $table->index('lo_st_sysid');
            $table->index('lo_em_sysid');
            $table->index('lo_cu_sysid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
