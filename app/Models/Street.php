<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $table = 'streets';

    protected $primaryKey = 'street_id';

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'street_id',
        'street_name',
        'district_id',
    ];
}
