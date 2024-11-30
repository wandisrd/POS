<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';

    protected $primaryKey = 'pm_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'pm_st_sysid', 'pm_code', 'pm_name', 'pm_description', 'pm_start_date', 'pm_end_date',
        'pm_creater', 'pm_createtime', 'pm_lastmomodifier', 'pm_lastmodifytime'
    ];

    const CREATED_AT = 'pm_createtime';
    const UPDATED_AT = 'pm_lastmodifytime';
}
