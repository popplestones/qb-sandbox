<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentLine extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
