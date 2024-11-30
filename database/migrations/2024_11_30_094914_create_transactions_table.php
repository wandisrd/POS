<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('tr_sysid');
            $table->integer('tr_st_sysid'); // Reference to store system ID
            $table->integer('tr_em_sysid'); // Reference to employee system ID
            $table->integer('tr_cu_sysid'); // Reference to customer system ID
            $table->integer('tr_pa_sysid'); // Reference to payment system ID
            $table->string('tr_id', 250); // Transaction ID
            $table->date('tr_date'); // Transaction date
            $table->decimal('tr_discount', 14, 4)->default(0); // Discount amount
            $table->decimal('tr_tax', 14, 4)->default(0); // Tax amount
            $table->decimal('tr_total', 14, 4); // Total amount after discount and tax
            $table->decimal('tr_pay', 14, 4); // Amount paid
            $table->decimal('tr_change', 14, 4); // Change to be returned
            $table->string('tr_account_number', 250); // Account number for payment
            $table->string('tr_creater', 250); // Who created the transaction
            $table->dateTime('tr_createtime'); // Transaction creation time
            $table->string('tr_lastmodifier', 250)->nullable(); // Last modifier
            $table->dateTime('tr_lastmodifytime')->nullable(); // Last modification time

            $table->primary('tr_sysid');
            $table->index('tr_st_sysid');
            $table->index('tr_em_sysid');
            $table->index('tr_cu_sysid');
            $table->index('tr_pa_sysid');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
