<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InvoiceLine extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function booted()
    {
        static::created(fn($line) =>
            $line->invoice->update([
                'total_amount' => InvoiceLine::query()
                    ->whereInvoiceId($line->invoice_id)
                    ->sum(DB::raw('qty*unit_price'))
            ])
        );
    }
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function tax_rate()
    {
        return $this->belongsTo(TaxRate::class);
    }
}
