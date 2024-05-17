<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cong_viec',
        'id_nguoi_dung',
        'cv'
    ];

    protected $primaryKey = 'id_ung_vien';


    public function users()
    {
        return $this->belongsTo(User::class, 'id_nguoi_dung', 'id_nguoi_dung');
    }

    public function jobs()
    {
        return $this->belongsTo(User::class, 'id_cong_viec', 'id_cong_viec');
    }

}
