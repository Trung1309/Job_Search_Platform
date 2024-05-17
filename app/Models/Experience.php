<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_kinh_nghiem'
    ];

    protected $primary = 'id_kinh_nghiem';

    public function users(){
        return $this->hasMany(User::class,'id_kinh_nghiem','id_kinh_nghiem');
    }
}
