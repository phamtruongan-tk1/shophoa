<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $table = 'dates';

    protected $fillable = [
        'id',
        'name',
        'status',
        'created_at',
        'updated_at'
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'date_product', 'date_id', 'product_id');
    }

}
