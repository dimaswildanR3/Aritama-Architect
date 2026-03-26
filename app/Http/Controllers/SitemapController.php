<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Keyword;

class SitemapController extends Controller
{
    public function index()
    {
        $staticUrls = [
            [
                'loc' => url('/'),
                'lastmod' => now()->format('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '1.0'
            ],
            [
                'loc' => url('/project'),
                'lastmod' => now()->format('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '0.8'
            ],
            [
                'loc' => url('/about'),
                'lastmod' => now()->format('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => url('/contact'),
                'lastmod' => now()->format('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
        ];

        // Ambil semua keyword dari database
        $keywords = Keyword::all();

        // Build XML
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset></urlset>');
        $xml->addAttribute('xmlns', 'https://www.sitemaps.org/schemas/sitemap/0.9');

        // Tambahkan halaman statis
        foreach ($staticUrls as $url) {
            $urlNode = $xml->addChild('url');
            $urlNode->addChild('loc', $url['loc']);
            $urlNode->addChild('lastmod', $url['lastmod']);
            $urlNode->addChild('changefreq', $url['changefreq']);
            $urlNode->addChild('priority', $url['priority']);
        }

        // Tambahkan halaman keyword
        foreach ($keywords as $keyword) {
            $urlNode = $xml->addChild('url');
            $urlNode->addChild('loc', url('/'.$keyword->slug));
            $urlNode->addChild('lastmod', $keyword->updated_at->format('Y-m-d'));
            $urlNode->addChild('changefreq', 'monthly');
            $urlNode->addChild('priority', '0.6');
        }

        return response($xml->asXML(), 200)
            ->header('Content-Type', 'application/xml');
    }
}