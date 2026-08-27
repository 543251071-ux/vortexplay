<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VortexPlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Data tb_user
        DB::table('tb_user')->insert([
            [
                'id_user' => 1,
                'username' => 'admin_vortex',
                'nickname' => 'Admin Vortex',
                'password' => Hash::make('password123'),
                'email' => 'admin@vortexplay.com',
                'level' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'username' => 'rayyan_player',
                'nickname' => 'RayyanGamer',
                'password' => Hash::make('password123'),
                'email' => 'rayyan@gmail.com',
                'level' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // 2. Data tb_kategori
        DB::table('tb_kategori')->insert([
            ['id_kategori' => 1, 'nama_kategori' => 'Action RPG', 'created_at' => now(), 'updated_at' => now()],
            ['id_kategori' => 2, 'nama_kategori' => 'Simulation', 'created_at' => now(), 'updated_at' => now()],
            ['id_kategori' => 3, 'nama_kategori' => 'Strategy', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // 3. Data tb_promo
        DB::table('tb_promo')->insert([
            ['id_promo' => 1, 'kode_promo' => 'VORTEXNEW', 'diskon' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['id_promo' => 2, 'kode_promo' => 'VORTEXSUMMER', 'diskon' => 20, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // 4. Data tb_game
        DB::table('tb_game')->insert([
            [
                'id_game' => 1,
                'id_kategori' => 1,
                'id_promo' => 1,
                'nama' => 'Cyberpunk 2077',
                'deskripsi' => 'Open-world RPG set in a dystopian future.',
                'harga' => 699000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_game' => 2,
                'id_kategori' => 1,
                'id_promo' => null,
                'nama' => 'Persona 3 Reload',
                'deskripsi' => 'JRPG dengan sistem social link.',
                'harga' => 799000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_game' => 3,
                'id_kategori' => 2,
                'id_promo' => 2,
                'nama' => 'The Sims 4 Expansion Pack',
                'deskripsi' => 'Simulasi kehidupan sehari-hari.',
                'harga' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // 5. Data tb_pembayaran
        DB::table('tb_pembayaran')->insert([
            [
                'id_order' => 1,
                'id_user' => '2',
                'game_id' => '1',
                'metode_pembayaran' => 'QRIS',
                'status_pembayaran' => 'berhasil',
                'total_harga' => 699000,
                'tanggal_pembayaran' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // 7. Data tb_review
        DB::table('tb_review')->insert([
            [
                'id_review' => 1,
                'id_user' => 2,
                'id_game' => 1,
                'rating' => 5,
                'komentar' => 'Game mantap, grafik luar biasa!',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}