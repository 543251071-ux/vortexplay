<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'tb_game';
    protected $primaryKey = 'id_game';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'id_kategori',
        'id_promo',
        'gambar',
    ];

    // Relasi ke Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    // Relasi ke Promo
    public function promo()
    {
        return $this->belongsTo(Promo::class, 'id_promo', 'id_promo');
    }

    // Relasi ke Pembayaran
    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'game_id', 'id_game');
    }

    // Relasi ke Review
    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_game', 'id_game');
    }
}