<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CameraVehicle extends Model
{
    use HasFactory;

    protected $table = 'cameras_vehicles';

    protected $primaryKey = 'camera_vehicle_id';

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'camera_vehicle_id',
        'time',
        'camera_id',
        'vehicle_id',
    ];
}
