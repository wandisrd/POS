<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turnover extends Model
{
    protected $table = 'turnovers';

    protected $primaryKey = 'tu_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'tu_pr_sysid', 'tu_st_sysid', 'tu_em_sysid', 'tu_cu_sysid', 'tu_pm_sysid',
        'tu_qty', 'tu_location', 'tu_remark',
        'tu_creater', 'tu_createtime', 'tu_lastmodifier', 'tu_lastmodifytime'
    ];

    const CREATED_AT = 'tu_createtime';
    const UPDATED_AT = 'tu_lastmodifytime';
}
