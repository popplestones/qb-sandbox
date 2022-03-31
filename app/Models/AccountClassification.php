<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountClassification extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function account_types()
    {
        return $this->hasMany(AccountType::class);
    }
}
