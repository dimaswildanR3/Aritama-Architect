<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keyword;

class PageController extends Controller
{
    // Homepage default
    public function home()
    {
        $seo = (object)[
            'title' => 'Jasa Desain Rumah Murah & Profesional | Aritama Architect',
            'description' => 'Aritama Architect adalah jasa desain rumah, arsitek, interior, dan gambar kerja profesional dengan harga terjangkau. Melayani desain rumah minimalis, modern, dan tropis di seluruh Indonesia.',
            'keywords' => 'jasa arsitek murah, jasa desain rumah murah, arsitek rumah minimalis, desain rumah modern, jasa desain arsitektur indonesia, arsitek profesional, jasa gambar kerja, desain rumah 3d, arsitek nganjuk, arsitek jawa timur, arsitek indonesia'
        ];

        return view('index', compact('seo'));
    }

    // Halaman keyword dinamis
    public function show($slug)
    {
        $keyword = Keyword::where('slug', $slug)->first();

        if ($keyword) {
            // Ambil data dari database
            $seo = (object)[
                'title' => $keyword->title,
                'description' => $keyword->description,
                'keywords' => $keyword->keywords ?? '' // opsional jika ingin simpan di DB
            ];
        } else {
            // Jika slug tidak ditemukan, tampilkan 404
            abort(404);
        }

        return view('index', compact('seo'));
    }
}