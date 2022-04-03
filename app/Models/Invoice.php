<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function invoice_lines()
    {
        return $this->hasMany(InvoiceLine::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
