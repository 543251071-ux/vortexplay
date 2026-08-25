<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'tb_pembayaran';
    protected $primaryKey = 'id_order';

    protected $fillable = [
        'id_user',
        'game_id',
        'metode_pembayaran',
        'total_harga',
        'status_pembayaran',
        'tanggal_pembayaran',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    // Relasi ke Game
    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id', 'id_game');
    }
}