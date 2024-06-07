<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_en',
        'code_name',
        'code_name_en'
    ];

    protected $primaryKey = 'region_id';

    public function provinces(){
        $this->hasMany(Province::class,'region_id','region_id');
    }
}
