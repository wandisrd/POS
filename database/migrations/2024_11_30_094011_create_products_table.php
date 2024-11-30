<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('pr_sysid');
            $table->integer('pr_st_sysid'); // Reference to store system ID
            $table->integer('pr_su_sysid'); // Reference to supplier system ID
            $table->integer('pr_ca_sysid'); // Reference to category system ID
            $table->string('pr_itemno', 45);
            $table->string('pr_idqr', 45)->nullable();
            $table->string('pr_name', 100);
            $table->text('pr_description')->nullable();
            $table->integer('pr_price');
            $table->decimal('pr_tax', 14, 4)->default(0);
            $table->decimal('pr_weight', 14, 4)->default(0);
            $table->string('pr_unit', 45);
            $table->string('pr_unit_packing', 45)->nullable();
            $table->decimal('pr_conversi', 14, 4)->default(1);
            $table->string('pr_photo_1', 100)->nullable();
            $table->string('pr_photo_2', 100)->nullable();
            $table->string('pr_photo_3', 100)->nullable();
            $table->string('pr_creater', 250);
            $table->dateTime('pr_createtime');
            $table->string('pr_lastmomodifier', 250)->nullable();
            $table->dateTime('pr_lastmodifytime')->nullable();

            $table->primary('pr_sysid');
            $table->index('pr_st_sysid'); // Index for store system ID
            $table->index('pr_su_sysid'); // Index for supplier system ID
            $table->index('pr_ca_sysid'); // Index for category system ID
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
