<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Product extends Model
{
    public $timestamps = true;
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'image',
        'price',
        'status',
        'created_at',
        'updated_at'
    ];

    public function date ()
    {
        return $this->belongsToMany(Date::class, 'date_products', 'product_id', 'date_id');
    }

}
