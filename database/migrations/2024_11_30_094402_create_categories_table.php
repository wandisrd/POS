<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('ca_sysid');
            $table->string('ca_id', 250);
            $table->string('ca_name', 500);
            $table->string('ca_description', 500)->nullable();
            $table->integer('ca_status');
            $table->string('ca_creater', 250);
            $table->dateTime('ca_createtime');
            $table->string('ca_lastmomodifier', 250)->nullable();
            $table->dateTime('ca_lastmodifytime')->nullable();

            $table->primary('ca_sysid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
