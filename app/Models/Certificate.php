<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    public $fillable = [
        'id_chung_chi',
        'ten_chung_chi',
        'id_ngon_ngu'
    ];

    public $primaryKey = 'id_chung_chi';

    public function languages(){
        return $this->belongsTo(Language::class,'id_ngon_ngu','id_ngon_ngu');
    }

    public function users(){
        return $this->hasMany(User::class,'id_chung_chi','id_chung_chi');
    }

    public function jobs(){
        return $this->hasMany(Job::class,'id_chung_chi','id_chung_chi');
    }
}
