<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';

    protected $primaryKey = 'so_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'so_pr_sysid', 'so_pr_itemno', 'so_location', 'so_qty', 
        'so_creater', 'so_createtime', 'so_lastmodifier', 'so_lastmodifytime'
    ];

    const CREATED_AT = 'so_createtime';
    const UPDATED_AT = 'so_lastmodifytime';
}
