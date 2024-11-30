<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'pr_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'pr_st_sysid', 'pr_su_sysid', 'pr_ca_sysid', 'pr_itemno', 'pr_idqr', 'pr_name', 
        'pr_description', 'pr_price', 'pr_tax', 'pr_weight', 'pr_unit', 'pr_unit_packing', 
        'pr_conversi', 'pr_photo_1', 'pr_photo_2', 'pr_photo_3', 'pr_creater', 'pr_createtime', 
        'pr_lastmomodifier', 'pr_lastmodifytime'
    ];

    const CREATED_AT = 'pr_createtime';
    const UPDATED_AT = 'pr_lastmodifytime';
}
