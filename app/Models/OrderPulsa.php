<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPulsa extends Model
{
    use HasFactory;
    protected $table = 'order_pulsa';
    protected $guarded = [];
    protected $appends = ['service_name','service_code'];
    public function relation_service()
    {
        return $this->belongsTo(LayananPulsa::class,'service','sid');
    }
    public function getServiceNameAttribute()
    {
        return $this->relation_service->service;
    }
    public function getServiceCodeAttribute()
    {
        return $this->relation_service->code;
    }
}
