<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_of_project',
        'project_location',
        'floor',
        'unit',
        'area',
        'price',
        'booked_flat',
        'project_image'
    ];
}
