<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Product extends Model
{
    use SoftDeletes;
    
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

    public function date()
    {
        return $this->belongsToMany(Date::class, 'date_product', 'product_id', 'date_id');
    }

}
