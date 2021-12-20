<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDeclaration extends Model
{
    use HasFactory;

    protected $fillable = [
        'floor',
        'unit',
        'profession',
        'area',
        'price',
        'floor_unit_area_price_total_amount',
        'amount_in_word',
        'parking_type',
        'parking_no',
        'car_parking_price',
        'car_parking_price_in_word',
        'uniity_charge',
        'total_amount',
        'booking_amount_in_word',
        'down_payment_amount',
        'down_payment_in_word',
        'chaque_no',
        'installment_payment_system',
        'note',
        'customer_signature',
    ];
}
