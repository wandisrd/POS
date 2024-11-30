<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $primaryKey = 'cu_sysid';

    public $timestamps = false;  // Disable automatic timestamps as we are using custom columns

    protected $fillable = [
        'cu_st_sysid', 'cu_id', 'cu_name', 'cu_nin', 'cu_phone', 'cu_email', 'cu_social_media',
        'cu_diskon', 'cu_point', 'cu_type', 'cu_registered_date', 'cu_start_date', 'cu_end_date',
        'cu_password', 'cu_creater', 'cu_createtime', 'cu_lastmomodifier', 'cu_lastmodifytime'
    ];

    const CREATED_AT = 'cu_createtime';
    const UPDATED_AT = 'cu_lastmodifytime';

    // To handle SHA-2 password encryption
    public function setCuPasswordAttribute($value)
    {
        $this->attributes['cu_password'] = hash('sha256', $value);
    }
}
