<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ho_ten',
        'ngay_sinh',
        'email',
        'cccd',
        'sdt',
        'id_phuong_xa',
        'id_quyen',
        'mat_khau',
        'kinh-nghiem',
        'ky_nang'
    ];

    protected $primaryKey = 'id_nguoi_dung';

    public function bussinesses()
    {
        return $this->hasOne(Bussiness::class, 'id_nguoi_dung', 'id_nguoi_dung');
    }

    // Liên kết tới khoá ngoại
    public function wards()
    {
        return $this->belongsTo(Ward::class,'id_phuong_xa','id_phuong_xa');
    }

    public function roles()
    {
        return $this->belongsTo(Role::class,'id_quyen','id_quyen');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
