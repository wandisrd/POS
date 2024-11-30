<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $primaryKey = 'pa_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'pa_id', 'pa_type', 'pa_name', 'pa_bank_id', 'pa_account_number',
        'pa_status', 'pa_creater', 'pa_createtime', 'pa_lastmodifier', 'pa_lastmodifytime'
    ];

    const CREATED_AT = 'pa_createtime';
    const UPDATED_AT = 'pa_lastmodifytime';
}
