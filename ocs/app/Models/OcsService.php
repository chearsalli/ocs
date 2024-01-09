<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OcsService extends Model
{
    use HasFactory;

    protected $fillable = [
         'ocs_service_id', 'service_type', 'processing_time', 'processing_fee', 'unit_id', 'fund_code_id', 'service_name', 'unit_permission_req'
    ];

    public function userRequests()
    {
        return $this->hasMany(UserRequest::class, 'ocs_service_id');
    }
}
