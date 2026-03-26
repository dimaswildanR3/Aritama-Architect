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
                // 'keywords' => 'arsitek profesional, jasa arsitek, desain rumah modern, desain tropis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'desain-rumah-modern',
                'title' => 'Desain Rumah Modern | Aritama Architect',
                'description' => 'Jasa desain rumah modern minimalis, tropis, dan profesional untuk rumah impian Anda.',
                // 'keywords' => 'desain rumah modern, rumah minimalis modern, arsitek modern, jasa desain rumah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'interior-desain-rumah',
                'title' => 'Interior Desain Rumah | Aritama Architect',
                'description' => 'Desain interior profesional, layout, dan gambar kerja lengkap untuk rumah nyaman dan modern.',
                // 'keywords' => 'desain interior rumah, interior minimalis, interior modern, arsitek interior',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'gambar-kerja-rumah',
                'title' => 'Gambar Kerja Rumah | Aritama Architect',
                'description' => 'Menyediakan gambar kerja lengkap untuk arsitektur, struktur, dan MEP agar pembangunan lancar.',
                // 'keywords' => 'gambar kerja rumah, denah rumah, RAB rumah, gambar teknis rumah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'desain-ruko-modern',
                'title' => 'Desain Ruko Modern | Aritama Architect',
                'description' => 'Jasa desain ruko modern, profesional, dan nyaman sesuai kebutuhan bisnis Anda.',
                // 'keywords' => 'desain ruko modern, arsitek ruko, ruko minimalis, desain komersial',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'desain-3d-rumah',
                'title' => 'Desain 3D Rumah | Aritama Architect',
                'description' => 'Visualisasi rumah impian dalam bentuk 3D untuk membantu merencanakan desain dengan tepat.',
                // 'keywords' => 'desain rumah 3d, visualisasi 3d, 3d rendering rumah, rumah minimalis 3d',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'arsitek-nganjuk',
                'title' => 'Arsitek Nganjuk | Aritama Architect',
                'description' => 'Arsitek profesional di Nganjuk siap merancang rumah dan bangunan dengan desain modern, minimalis, dan tropis.',
                // 'keywords' => 'arsitek nganjuk, arsitek jawa timur, jasa desain rumah nganjuk, rumah minimalis nganjuk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'arsitek-indonesia',
                'title' => 'Arsitek Indonesia | Aritama Architect',
                'description' => 'Jasa arsitek profesional melayani seluruh Indonesia untuk desain rumah, kantor, dan bangunan komersial.',
                // 'keywords' => 'arsitek indonesia, jasa arsitek, desain rumah indonesia, desain modern tropis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}