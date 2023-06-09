<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CMSPagesModel extends Model
{
    use HasFactory;

    protected $table = 'c_m_s_pages';

    protected $fillable = [
        'slug',
        'name',
        'description'
    ];
}
