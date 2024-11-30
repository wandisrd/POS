<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';

    protected $primaryKey = 'st_sysid';

    protected $fillable = [
        'st_id', 'st_type', 'st_short_name', 'st_name', 'st_country_id', 'st_province', 'st_city',
        'st_district', 'st_urban_district', 'st_street', 'st_zip_code', 'st_bank_id', 'st_account_number',
        'st_tax_number', 'st_phone_1', 'st_phone_2', 'st_email_1', 'st_email_2', 'st_social_media_1',
        'st_social_media_2', 'st_social_media_3', 'st_social_media_4', 'st_start_date', 'st_end_date',
        'st_status', 'st_creater', 'st_createtime', 'st_lastmomodifier', 'st_lastmodifytime'
    ];

    const CREATED_AT = 'st_createtime';
    const UPDATED_AT = 'st_lastmodifytime';
}
