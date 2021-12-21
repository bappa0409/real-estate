<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'project_file_no',
        'name_of_project',
        'project_location',
        'floor',
        'unit',
        'area',
        'price',
        'booked_flat',
        'project_image',
       
    ];


    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
    // public function projects()
    // {
    //     return $this->hasMany(Project::class);
    // }
}
