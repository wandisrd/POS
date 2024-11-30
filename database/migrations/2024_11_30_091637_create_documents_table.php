<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id('st_dc_sysid');
            $table->integer('dc_em_sysid'); // Assuming it is referencing employee sysid
            $table->string('dc_id', 250);
            $table->text('dc_name');
            $table->text('dc_remark')->nullable();
            $table->string('dc_creater', 250);
            $table->dateTime('dc_createtime');
            $table->string('dc_lastmomodifier', 250)->nullable();
            $table->dateTime('dc_lastmodifytime')->nullable();
            
            $table->primary('st_dc_sysid');
            $table->index('dc_em_sysid'); // Index for employee sysid field
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
