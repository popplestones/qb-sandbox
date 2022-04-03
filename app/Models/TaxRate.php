<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'active' => 'boolean',
        'hidden' => 'boolean',
        'tax_group' => 'boolean',
        'taxable' => 'boolean'
    ];
}
