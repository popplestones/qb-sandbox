<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $casts = [
        'active' => 'boolean',
        'taxable' => 'boolean',
        'job' => 'boolean',
        'bill_with_parent' => 'boolean',
        'is_project' => 'boolean',
        'sync' => 'boolean'
    ];
    protected $guarded = [];
    
    public function billing_address()
    {
        return $this->hasOne(Address::class)->whereType('billing');
    }
    public function shipping_address()
    {
        return $this->hasOne(Address::class)->whereType('shipping');
    }
}
