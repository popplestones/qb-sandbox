<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountSubType extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function account_type()
    {
        return $this->belongsTo(AccountType::class);
    }
    public function account_classification()
    {
        return $this->hasOneThrough(AccountClassification::class, AccountType::class);
    }
}
