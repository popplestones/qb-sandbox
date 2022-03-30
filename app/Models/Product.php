<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'active' => 'boolean',
        'sub_item' => 'boolean',
        'taxable' => 'boolean',
        'sales_tax_included' => 'boolean',
        'purchase_tax_included' => 'boolean',
        'track_qty_on_hand' => 'boolean'
    ];
}
