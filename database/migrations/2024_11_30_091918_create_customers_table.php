<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('cu_sysid');
            $table->integer('cu_st_sysid'); // Store system ID, assumed to reference a store table
            $table->string('cu_id', 250);
            $table->string('cu_name', 250);
            $table->string('cu_nin', 250)->nullable();
            $table->string('cu_phone', 60);
            $table->string('cu_email', 250);
            $table->string('cu_social_media', 250)->nullable();
            $table->decimal('cu_diskon', 14, 4)->default(0);
            $table->integer('cu_point')->default(0);
            $table->string('cu_type', 250);
            $table->date('cu_registered_date');
            $table->date('cu_start_date');
            $table->date('cu_end_date')->nullable();
            $table->string('cu_password', 250); // Encrypted password (SHA-2)
            $table->string('cu_creater', 250);
            $table->dateTime('cu_createtime');
            $table->string('cu_lastmomodifier', 250)->nullable();
            $table->dateTime('cu_lastmodifytime')->nullable();

            $table->primary('cu_sysid');
            $table->index('cu_st_sysid'); // Index for store system ID field
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
