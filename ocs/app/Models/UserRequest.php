<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_request_id', 'ocs_service_id', 'transaction_no', 'copies_req', 'date_created', 'status', 'req_type', 'transaction_id', 'or_number'
    ];

    public function ocsService()
    {
        return $this->belongsTo(OcsService::class, 'ocs_service_id');
    }
}
