<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $primaryKey = 'su_sysid';

    public $timestamps = false;  // Disable automatic timestamps since we're using custom columns

    protected $fillable = [
        'su_id_sysid', 'su_st_sysid', 'su_name', 'su_country_id', 'su_province', 
        'su_city', 'su_district', 'su_urban_district', 'su_street', 'su_bank_id', 
        'su_account_number', 'su_phone_1', 'su_email_1', 'su_creater', 'su_createtime', 
        'su_lastmomodifier', 'su_lastmodifytime'
    ];

    const CREATED_AT = 'su_createtime';
    const UPDATED_AT = 'su_lastmodifytime';
}
