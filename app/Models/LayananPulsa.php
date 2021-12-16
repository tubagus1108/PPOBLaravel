<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananPulsa extends Model
{
    use HasFactory;
    protected $table = 'services_pulsa';
    protected $guarded = [];
    protected $hidden = [
        'provider',
    ];
}
