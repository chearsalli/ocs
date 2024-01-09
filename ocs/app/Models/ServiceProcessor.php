<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProcessor extends Model
{
    use HasFactory;
    protected $fillable = ['user_request_id', 'ocs_service_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(OcsService::class, 'ocs_service_id');
    }
}
