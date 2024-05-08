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
        'ma_so_thue',
        'id_nguoi_dung',
        'quy_mo',
        'the_loai'
    ];

    protected $primary = 'id_doanh_nghiep';

    public function users()
    {
        return $this->belongsTo(User::class, 'id_nguoi_dung', 'id_nguoi_dung');
    }

    public function wards()
    {
        return $this->belongsTo(Ward::class,'id_phuong_xa','id_phuong_xa');
    }
}
