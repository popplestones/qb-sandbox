<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function payment_lines()
    {
        return $this->hasMany(PaymentLine::class);
    }
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
