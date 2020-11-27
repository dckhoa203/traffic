<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\PseudoTypes\False_;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';

    protected $primaryKey = 'province_id';

    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'province_id',
        'province_name',
        'gso_id',
    ];

    public function districts()
    {
        return $this->hasMany(District::class, 'province_id', 'province_id');
    }

}
