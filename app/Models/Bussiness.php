<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bussiness extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_doanh_nghiep',
        'email',
        'sdt',
        'id_phuong_xa',
        'gioi_thieu',
        'ma_so_thue',
        'id_nguoi_dung',
        'quy_mo',
        'the_loai',
        'so_duong',
        'hinh_dai_dien'
    ];

    protected $primaryKey = 'id_doanh_nghiep';

    public function users()
    {
        return $this->belongsTo(User::class, 'id_nguoi_dung', 'id_nguoi_dung');
    }

    public function wards()
    {
        return $this->belongsTo(Ward::class,'id_phuong_xa','id_phuong_xa');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'id_doanh_nghiep', 'id_doanh_nghiep');
    }

    public function members()
    {
        return $this->hasMany(Member::class, 'id_doanh_nghiep', 'id_doanh_nghiep');
    }
}
