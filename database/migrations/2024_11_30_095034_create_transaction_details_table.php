<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id('trd_sysid');
            $table->integer('trd_tr_sysid'); // Reference to transaction system ID
            $table->integer('trd_pr_sysid'); // Reference to product system ID
            $table->integer('trd_pm_sysid'); // Reference to payment method system ID
            $table->decimal('trd_qty', 14, 4); // Quantity of product
            $table->decimal('trd_discount', 14, 4)->default(0); // Discount on product
            $table->decimal('trd_tax', 14, 4)->default(0); // Tax on product
            $table->decimal('trd_amount', 14, 4); // Amount for product before taxes and discount
            $table->decimal('trd_total_amount', 14, 4); // Total amount after discount and tax
            $table->string('trd_creater', 250); // Who created the transaction detail
            $table->dateTime('trd_createtime'); // Creation time of transaction detail
            $table->string('trd_lastmodifier', 250)->nullable(); // Last modifier
            $table->dateTime('trd_lastmodifytime')->nullable(); // Last modification time

            $table->primary('trd_sysid');
            $table->index('trd_tr_sysid');
            $table->index('trd_pr_sysid');
            $table->index('trd_pm_sysid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
