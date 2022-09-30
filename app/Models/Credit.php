<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'datetime_credit',
        'creditor',
        'rmb_credit',
        'usd_credit',
    ];
}
