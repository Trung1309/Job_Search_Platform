<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Certificate;

class Language extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ngon_ngu',
        'ten_ngon_ngu'
    ];

    protected $primaryKey = 'id_ngon_ngu';

    public function certificates()
    {
        return $this->hasMany(Certificate::class,'id_ngon_ngu','id_ngon_ngu');
    }
}
