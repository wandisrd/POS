<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $primaryKey = 'tr_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'tr_st_sysid', 'tr_em_sysid', 'tr_cu_sysid', 'tr_pa_sysid',
        'tr_id', 'tr_date', 'tr_discount', 'tr_tax', 'tr_total', 
        'tr_pay', 'tr_change', 'tr_account_number', 
        'tr_creater', 'tr_createtime', 'tr_lastmodifier', 'tr_lastmodifytime'
    ];

    const CREATED_AT = 'tr_createtime';
    const UPDATED_AT = 'tr_lastmodifytime';
}
