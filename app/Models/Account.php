<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'active' => 'boolean',
        'sync' => 'boolean'
    ];
    public $timestamps = false;
}
