<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Menghubungkan ke nama tabel khusus
    protected $table = 'tb_user';

    // Menentukan primary key khusus
    protected $primaryKey = 'id_user';

    // Disable timestamps jika tabel tb_user tidak pakai created_at & updated_at
    // public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'nickname',
        'profil',
        'deskripsi',
        'email',
        'level',
    ];

    protected $hidden = [
        'password',
    ];

    // Relasi ke Pembayaran
    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_user', 'id_user');
    }

    // Relasi ke Review
    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_user', 'id_user');
    }
}