<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_quyen'
    ];

    protected $primaryKey = 'id_quyen';

    public function users()
    {
        return $this->hasMany(User::class,'id_quyen','id_quyen');
    }


}
