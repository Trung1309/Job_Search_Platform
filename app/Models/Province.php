<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_tinh_thanh'
    ];

    protected $primary = 'id_tinh_thanh';

    public function districts()
    {
        return $this->hasMany(District::class, 'id_quan_huyen', 'id_quan_huyen');
    }
}
