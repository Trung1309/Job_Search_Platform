<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_the_loai'
    ];

    protected $primaryKey = 'id_the_loai';

    public function jobs(){
        return $this->hasMany(Job::class,'id_the_loai','id_the_loai');
    }
}
