<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEnquiryModel extends Model
{
    use HasFactory;

    protected $table = 'product_enquiry';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'description'
    ];
}
