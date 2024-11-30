<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table = 'transaction_details';

    protected $primaryKey = 'trd_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'trd_tr_sysid', 'trd_pr_sysid', 'trd_pm_sysid', 'trd_qty', 'trd_discount', 
        'trd_tax', 'trd_amount', 'trd_total_amount', 
        'trd_creater', 'trd_createtime', 'trd_lastmodifier', 'trd_lastmodifytime'
    ];

    const CREATED_AT = 'trd_createtime';
    const UPDATED_AT = 'trd_lastmodifytime';
}
