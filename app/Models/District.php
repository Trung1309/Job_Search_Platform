<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_quan_huyen',
        'ten_quan_huyen_en',
        'full_name',
        'full_name_en',
        'code_name',
        'id_tinh_thanh',
        'unit_id'
    ];

    protected $primaryKey = 'id_quan_huyen';

    public function provinces()
    {
        return $this->belongsTo(Province::class, 'id_tinh_thanh', 'id_tinh_thanh');
    }
    public function wards()
    {
        return $this->hasMany(Ward::class, 'id_quan_huyen', 'id_quan_huyen');
    }

    public function units(){
        return $this->belongsTo(Units::class,'unit_id','unit_id');
    }
}
