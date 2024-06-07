<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'full_name_en',
        'short_name',
        'short_name_en',
        'code_name',
        'code_name_en'
    ];

    protected $primaryKey = 'unit_id';

    public function provinces()
    {
        return $this->hasMany(Province::class,'unit_id','unit_id');
    }
    public function districts()
    {
        return $this->hasMany(District::class,'unit_id','unit_id');
    }
    public function wards()
    {
        return $this->hasMany(Ward::class,'unit_id','unit_id');
    }
}
