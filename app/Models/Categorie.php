<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'ca_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'ca_id', 'ca_name', 'ca_description', 'ca_status', 
        'ca_creater', 'ca_createtime', 'ca_lastmomodifier', 'ca_lastmodifytime'
    ];

    const CREATED_AT = 'ca_createtime';
    const UPDATED_AT = 'ca_lastmodifytime';
}
