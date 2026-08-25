<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'tb_review';
    protected $primaryKey = 'id_review';

    protected $fillable = [
        'id_user',
        'id_game',
        'rating',
        'komentar',
        'tanggal_review',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    // Relasi ke Game
    public function game()
    {
        return $this->belongsTo(Game::class, 'id_game', 'id_game');
    }
}