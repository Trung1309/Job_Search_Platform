<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_cong_viec',
        'mo_ta',
        'ngay_het_han',
        'id_the_loai',
        'muc_luong',
        'id_phuong_xa',
        'id_trinh_do',
        'trang_thai',
        'id_doanh_nghiep',
        'id_vi_tri',
        'ky_nang'
    ];

    protected $primaryKey = 'id_cong_viec';

    public function positions(){
        return $this->belongsTo(Position::class,'id_vi_tri','id_vi_tri');
    }

    public function categories(){
        return $this->belongsTo(Category::class,'id_the_loai','id_the_loai');
    }

    public function levels(){
        return $this->belongsTo(Level::class,'id_trinh_do','id_trinh_do');
    }

    public function wards(){
        return $this->belongsTo(Ward::class,'id_phuong_xa','id_phuong_xa');
    }

    public function bussinesses()
    {
        return $this->belongsTo(Bussiness::class, 'id_doanh_nghiep', 'id_doanh_nghiep');
    }

    public function members()
    {
        return $this->hasMany(Member::class, 'id_cong_viec', 'id_cong_viec');
    }
}
