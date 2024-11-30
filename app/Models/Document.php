<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';

    protected $primaryKey = 'st_dc_sysid';

    public $timestamps = false;  // If you're not using Laravel's automatic timestamp fields

    protected $fillable = [
        'dc_em_sysid', 'dc_id', 'dc_name', 'dc_remark', 'dc_creater', 'dc_createtime',
        'dc_lastmomodifier', 'dc_lastmodifytime'
    ];

    const CREATED_AT = 'dc_createtime';
    const UPDATED_AT = 'dc_lastmodifytime';
}
