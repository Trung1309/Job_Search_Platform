<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_tinh_thanh',
        'ten_tinh_thanh_en',
        'full_name',
        'full_name_en',
        'code_name',
        'unit_id',
        'region_id'
    ];

    protected $primary = 'id_tinh_thanh';

    public function districts()
    {
        return $this->hasMany(District::class, 'id_tinh_thanh', 'id_tinh_thanh');
    }

    public function regions()
    {
        return $this->belongsTo(Regions::class,'region_id','region_id');
    }

    public function units()
    {
        return $this->belongsTo(Units::class,'unit_id','unit_id');
    }
}
