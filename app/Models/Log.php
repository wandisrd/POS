<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $primaryKey = 'lo_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'lo_st_sysid', 'lo_em_sysid', 'lo_cu_sysid', 'lo_remark',
        'lo_creater', 'lo_createtime', 'lo_lastmodifier', 'lo_lastmodifytime'
    ];

    const CREATED_AT = 'lo_createtime';
    const UPDATED_AT = 'lo_lastmodifytime';
}
