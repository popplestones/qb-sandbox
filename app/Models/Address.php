<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id', 'type', 'line1', 'line2', 'city', 'country', 'state', 'postal_code', 'lat', 'long', 'tag', 'note'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
