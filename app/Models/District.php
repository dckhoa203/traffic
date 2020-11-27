<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';

    protected $primaryKey = 'district_id';

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'district_id',
        'district_name',
        'gso_id',
        'province_id',
    ];
    
    public function provinces()
    {
        return $this->belongsTo(Province::class,'province_id','province_id');
    }
    
}
