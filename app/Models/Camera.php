<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    use HasFactory;

    protected $table = 'cameras';

    protected $primaryKey = 'camera_id';

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'camera_id',
        'camera_name',
        'coordinate_x',
        'coordinate_y',
        'street_id',
    ];
}
