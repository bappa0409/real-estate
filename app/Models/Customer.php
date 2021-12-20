<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_husband_name',
        'profession',
        'cell_number',
        'land_phone_res',
        'office_number',
        'email_address',
        'house_road_no',
        'village_area',
        'post_office',
        'police_station',
        'country',
        'present_house_road_no',
        'present_village_area',
        'present_post_office',
        'present_police_station',
        'present_district',
        'present_country',
    ];


}
