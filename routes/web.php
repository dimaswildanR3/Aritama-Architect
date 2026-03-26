<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
// Halaman spesifik
Route::get('/', function () {
    return view('index'); // Homepage default
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route SEO dinamis dari database → letakkan paling bawah
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');