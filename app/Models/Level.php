<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_trinh_do'
    ];

    protected $primaryKey = 'id_trinh_do';

    public function jobs(){
        return $this->hasMany(Job::class,'id_trinh_do','id_trinh_do');
    }
}
