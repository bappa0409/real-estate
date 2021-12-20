<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_of_designer',
        'email',
        'contact_number',
        'address',
        'image',
        'status',
    ];
}
