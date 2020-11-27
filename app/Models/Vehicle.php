<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehcles';

    protected $primaryKey = 'vehcle_id';

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'vehcle_id',
        'liense_plate',
        'image',
        'province_id',
    ];
}
