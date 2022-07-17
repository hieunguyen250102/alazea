<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'sale_price',
        'description',
        'image_list',
        'status',
        'category_id',
        'summary',
    ];
}
