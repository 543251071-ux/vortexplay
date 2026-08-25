<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'tb_promo';
    protected $primaryKey = 'id_promo';

    protected $fillable = [
        'tanggal_awal',
        'tanggal_akhir',
    ];

    // Relasi ke Game
    public function games()
    {
        return $this->hasMany(Game::class, 'id_promo', 'id_promo');
    }
}