<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_vi_tri',
        'mo_ta',
    ];

    protected $primaryKey = 'id_vi_tri';

    public function jobs(){
        return $this->hasMany(Job::class,'id_vi_tri','id_vi_tri');
    }
}
