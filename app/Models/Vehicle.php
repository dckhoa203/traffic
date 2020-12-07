<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    protected $primaryKey = 'vehicle_id';

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'vehicle_id',
        'image',
        'vehicle_type_id',
    ];
}
