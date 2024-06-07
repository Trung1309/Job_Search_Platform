<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'so_nam'
    ];

    protected $primaryKey = 'id_kinh_nghiem';

    public function users(){
        return $this->hasMany(User::class,'id_kinh_nghiem','id_kinh_nghiem');
    }

    public function jobs(){
        return $this->hasMany(Job::class,'id_kinh_nghiem','id_kinh_nghiem');
    }
}
