<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_phuong_xa',
        'id_quan_huyen'
    ];

    protected $primaryKey = 'id_phuong_xa';

    public function districts()
    {
        return $this->belongsTo(District::class, 'id_quan_huyen', 'id_quan_huyen');
    }

    public function bussinesses()
    {
        return $this->hasMany(Bussiness::class, 'id_phuong_xa', 'id_phuong_xa');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'id_phuong_xa', 'id_phuong_xa');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'id_phuong_xa', 'id_phuong_xa');
    }



}
