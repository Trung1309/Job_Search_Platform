<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_quan_huyen',
        'id_tinh_thanh'
    ];

    protected $primaryKey = 'id_quan_huyen';

    public function provinces()
    {
        return $this->belongsTo(Province::class, 'id_tinh_thanh', 'id_tinh_thanh');
    }
    public function wards()
    {
        return $this->hasMany(Ward::class, 'id_phuong_xa', 'id_phuong_xa');
    }
}
