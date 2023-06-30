<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadsModel extends Model
{
    use HasFactory;

    protected $table = 'downloads_files';

    protected $fillable = [
        'item',
        'value',
        'sort'
    ];
}
