<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_phuong_xa',
        'ten_phuong_xa_en',
        'full_name',
        'full_name_en',
        'code_name',
        'id_quan_huyen',
        'unit_id',
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

    public function units(){
        return $this->belongsTo(Units::class,'unit_id','unit_id');
    }
    public function jobs()
    {
        return $this->hasMany(User::class, 'id_phuong_xa', 'id_phuong_xa');
    }





}
