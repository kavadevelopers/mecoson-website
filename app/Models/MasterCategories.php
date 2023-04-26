<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterCategories extends Model
{
    use HasFactory;

    protected $table = 'master_categories';

    protected $fillable = [
        'category',
        'name',
        'slug',
        'sort',
        'is_deleted'
    ];
}
