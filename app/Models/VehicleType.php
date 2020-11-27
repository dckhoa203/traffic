<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    use HasFactory;

    protected $table = 'vehcle_types';

    protected $primaryKey = 'vehicle_type_id';

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'vehicle_type_id',
        'vehicle_type_name',
    ];
}
