<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id('so_sysid');
            $table->integer('so_pr_sysid'); // Reference to product system ID
            $table->string('so_pr_itemno', 45); // Product item number
            $table->string('so_location', 45); // Stock location
            $table->decimal('so_qty', 14, 4); // Quantity in stock
            $table->string('so_creater', 250); // Who created the entry
            $table->dateTime('so_createtime'); // Date and time of creation
            $table->string('so_lastmodifier', 250)->nullable(); // Who last modified the entry
            $table->dateTime('so_lastmodifytime')->nullable(); // Date and time of last modification

            $table->primary('so_sysid');
            $table->index('so_pr_sysid'); // Index for product system ID for fast lookup
        });
    }

    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
