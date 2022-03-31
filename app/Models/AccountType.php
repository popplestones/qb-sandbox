<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function account_classification()
    {
        return $this->belongsTo(AccountClassification::class);
    }
    
    public function account_sub_types()
    {
        return $this->hasMany(AccountSubType::class);
    }
}
