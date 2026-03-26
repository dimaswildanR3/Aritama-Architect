<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeywordsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('keywords')->insert([
            [
                'slug' => 'jasa-desain-rumah-minimalis',
                'title' => 'Jasa Desain Rumah Minimalis | Aritama Architect',
                'description' => 'Layanan desain rumah minimalis modern, profesional, dan sesuai kebutuhan Anda di seluruh Indonesia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'arsitek-profesional',
                'title' => 'Arsitek Profesional | Aritama Architect',
                'description' => 'Tim arsitek profesional siap merancang rumah, kantor, dan bangunan komersial dengan desain modern dan tropis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'desain-rumah-modern',
                'title' => 'Desain Rumah Modern | Aritama Architect',
                'description' => 'Jasa desain rumah modern minimalis, tropis, dan profesional untuk rumah impian Anda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'interior-desain-rumah',
                'title' => 'Interior Desain Rumah | Aritama Architect',
                'description' => 'Desain interior profesional, layout, dan gambar kerja lengkap untuk rumah nyaman dan modern.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'gambar-kerja-rumah',
                'title' => 'Gambar Kerja Rumah | Aritama Architect',
                'description' => 'Menyediakan gambar kerja lengkap untuk arsitektur, struktur, dan MEP agar pembangunan lancar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}