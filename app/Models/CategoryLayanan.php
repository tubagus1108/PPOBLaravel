<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLayanan extends Model
{
    use HasFactory;
    protected $table = 'servicepulsa_cat';
    protected $guarded = [];
}
