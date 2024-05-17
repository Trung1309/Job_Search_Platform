<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_bai_dang',
        'tieu_de',
        'noi_dung',
        'id_nguoi_dung',
        'hinh_dai_dien',
        'views'
    ];

    protected $primaryKey = 'id_bai_dang';

    public function users(){
        return $this->hasMany(User::class,'id_nguoi_dung','id_nguoi_dung');
    }
}
