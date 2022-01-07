<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date_product extends Model
{
    protected $table = 'date_product';

    protected $fillable = [
        'id',
        'date_id',
        'product_id',
        'created_at',
        'updated_at'
    ];
}
