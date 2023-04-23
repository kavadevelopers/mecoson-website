<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactEnquiryModel extends Model
{
    use HasFactory;

    protected $table = 'contact_enquiry';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'description'
    ];
}
