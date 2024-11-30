<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
{
    use HasFactory,HasApiTokens;

    // Tentukan nama kolom kustom untuk timestamps
    const CREATED_AT = 'em_createtime';
    const UPDATED_AT = 'em_lastmodifytime';

    protected $table = 'employees';

    protected $fillable = [
        'em_sysid',
        'em_st_sysid',
        'em_dc_sysid',
        'em_id',
        'em_type',
        'em_username',
        'em_first_name',
        'em_middle_name',
        'em_last_name',
        'em_password',
        'em_nin',
        'em_country_id',
        'em_province',
        'em_city',
        'em_district',
        'em_urban_district',
        'em_street',
        'em_zip_code',
        'em_bank_id',
        'em_account_number',
        'em_tax_number',
        'em_phone_1',
        'em_phone_2',
        'em_email_1',
        'em_email_2',
        'em_social_media_1',
        'em_social_media_2',
        'em_social_media_3',
        'em_social_media_4',
        'em_start_date',
        'em_end_date',
        'em_status',
        'em_creater',
        'em_createtime',
        'em_lastmomodifier',
        'em_lastmodifytime',
    ];

    protected $hidden = [
        'em_password',
    ];

    /**
     * Hash password before saving.
     */
    public function setEmPasswordAttribute($value)
    {
        $this->attributes['em_password'] = hash('sha256', $value);
    }
}
