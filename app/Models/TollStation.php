<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TollStation extends Model
{
    use HasFactory;

    protected $table = 'toll_stations';

    protected $primaryKey = 'toll_station_id';

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'toll_station_id',
        'toll_station_name',
        'district_id',
    ];

    public function districts()
    {
        return $this->belongsTo(District::class,'district_id','district_id');
    }
}
