<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    public function _category(){
        return $this->hasOne(MasterCategories::class, 'id', 'category');
    }

    protected $table = 'products';

    protected $fillable = [
        'category',
        'name',
        'slug',
        'image',
        'short_description',
        'long_description',
        'price'
    ];
}
