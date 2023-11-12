<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order2Good extends Model
{
    use HasFactory;
    protected $table = 'order2goods';

    protected $fillable = [
        'order_id',
        'good_id',
        'count',
    ];
}
