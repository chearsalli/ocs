<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundCode extends Model
{
    use HasFactory;

    protected $fillable = ['fund_code_id','unit_id', 'description'];

    public function serviceProcessors()
    {
        return $this->hasMany(ServiceProcessor::class);
    }
}
