<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipmentnumber',
        'shippername',
        'shipperphone',
        'shipperaddress',
        'shipperemail',
        'receivername',
        'receiverphone',
        'receiveraddress',
        'receiveremail',
        'date',
        'time',
        'location',
        'status',
        'remarks'
    ];
    protected $hidden = [
        'shipperphone',
        'shipperemail',
        'receiverphone',
        'receiveremail',
    ];
}
