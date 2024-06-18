<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientMeasurementModel extends Model
{
    protected $table="clientmeasurement";

    protected $fillable=[
        'client name',
        'lenght',
        'breadth',
        'height',

    ];
}
