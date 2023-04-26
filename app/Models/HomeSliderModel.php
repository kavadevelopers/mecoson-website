<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSliderModel extends Model
{
    use HasFactory;

    protected $table = 'cms_home_slider';

    protected $fillable = [
        'image',
        'sort'
    ];
}
