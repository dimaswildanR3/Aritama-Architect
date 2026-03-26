<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Dinamis -->
    <title>{{ $seo->title ?? 'Aritama Architect' }}</title>

    <meta name="description" content="{{ $seo->description ?? 'Aritama Architect adalah jasa desain rumah, arsitek, interior, dan gambar kerja profesional dengan harga terjangkau. Melayani desain rumah minimalis, modern, dan tropis di seluruh Indonesia.' }}">

    <meta name="keywords" content="{{ $seo->keywords ?? 'jasa arsitek murah, jasa desain rumah murah, arsitek rumah minimalis, desain rumah modern, jasa desain arsitektur indonesia, arsitek profesional, jasa gambar kerja, desain rumah 3d, arsitek nganjuk, arsitek jawa timur, arsitek indonesia' }}">
    
    <meta name="author" content="Aritama Architect">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $seo->title ?? 'Aritama Architect | Jasa Desain Rumah Profesional' }}">
    <meta property="og:description" content="{{ $seo->description ?? 'Jasa desain rumah murah, arsitek profesional, gambar kerja, interior, dan RAB.' }}">
    <meta property="og:image" content="https://aritamaarchitect.com/photos/icon1.png">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo->title ?? 'Aritama Architect | Jasa Desain Rumah Profesional' }}">
    <meta name="twitter:description" content="{{ $seo->description ?? 'Jasa desain rumah murah, arsitek profesional, gambar kerja, interior, dan RAB.' }}">
    <meta name="twitter:image" content="https://aritamaarchitect.com/photos/icon1.png">

    <!-- Favicon -->
    <link rel="icon" href="https://aritamaarchitect.com/photos/icon1.png" type="image/png">
    <link rel="apple-touch-icon" href="https://aritamaarchitect.com/photos/icon1.png">
    <link rel="shortcut icon" href="https://aritamaarchitect.com/photos/icon1.png">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/707ca0a07c.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/mobile.css') }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Aritama Architect",
      "url": "https://aritamaarchitect.com",
      "logo": "https://aritamaarchitect.com/photos/icon1.png"
    }
    </script>
</head>
<body>
    <!-- Showcase -->
    <header id="showcase">
        <div class="container">
            <nav id="navbar">
                <h3 class="logo">Aritama Architect</h3>
                <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/project">Proyek</a></li>
                <li><a href="/about">Tentang Kami</a></li>
                <li><a href="/blog">Artikel</a></li>
                <li><a href="/contact">Kontak</a></li>
                </ul>
            </nav>
            <div class="show-content">
                <h3>Kami Adalah Aritama Architect yang Kreatif & Profesional</h3>
                <a href="project.html" class="btn btn-light">Lihat Proyek</a>
            </div>
        </div>
    </header>

    <style>
        #paket {
            padding: 60px 20px;
            background: #f4f4f4;
            text-align: center;
        }

        .section-title {
            font-size: 34px;
            margin-bottom: 10px;
        }

        .section-sub {
            margin-bottom: 40px;
            color: #666;
        }

        .paket-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
        }

        .paket-card {
            width: 260px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            position: relative;
        }

        .paket-card:hover {
            transform: translateY(-10px);
        }

        .paket-content {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
        }

        .paket-card h2 {
            margin-bottom: 5px;
        }

        .paket-card h3 {
            color: #c59d5f;
            margin-bottom: 10px;
        }

        .paket-card ul {
            text-align: left;
            margin-bottom: 20px;
        }

        .paket-card ul li {
            list-style: none;
            margin: 5px 0;
        }

        .btn-wa {
            display: block;
            padding: 10px;
            background: black;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .btn-wa:hover {
            background: #c59d5f;
        }

        .badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background: gold;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FZL5WS2BPX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FZL5WS2BPX');
</script>
    <section id="home-a">
        <h1 class="text-center py-1">Layanan Profesional Desain & Perencanaan Bangunan</h1>
        <p class="text-center py-1 p-smart-phone">
            Kami membantu mewujudkan bangunan impian Anda melalui proses desain yang terencana,
            detail gambar yang lengkap, serta perhitungan yang matang agar pembangunan berjalan lancar.
        </p>
    
        <div class="container process-container">
    
            <div>
                <i class="fas fa-building fa-2x"></i>
                <h3>Desain Bangunan & Tampak</h3>
                <hr>
                <p>
                    Kami melayani pembuatan desain rumah, ruko, dan bangunan lainnya dengan tampilan
                    eksterior yang modern, proporsional, dan sesuai kebutuhan. Dilengkapi gambar kerja
                    yang jelas untuk memudahkan proses pembangunan.
                </p>
            </div>
    
            <div>
                <i class="fas fa-pencil-ruler fa-2x"></i>
                <h3>Desain Interior & Detail</h3>
                <hr>
                <p>
                    Penataan ruang yang baik membuat bangunan lebih nyaman digunakan.
                    Kami menyediakan desain interior, layout ruangan, serta gambar detail
                    furniture agar hasil akhir lebih rapi dan sesuai konsep.
                </p>
            </div>
    
            <div>
                <i class="fas fa-file-invoice-dollar fa-2x"></i>
                <h3>Perencanaan & Anggaran</h3>
                <hr>
                <p>
                    Selain desain, kami juga membantu menyiapkan gambar teknis lengkap
                    beserta perhitungan anggaran biaya sehingga proyek dapat berjalan
                    lebih terkontrol, efisien, dan sesuai rencana.
                </p>
            </div>
    
        </div>
    </section>
    <section id="paket">

        <h1 class="section-title">Paket Jasa Desain</h1>
        <p class="section-sub">
            Pilih paket sesuai kebutuhan Anda dan hubungi kami melalui WhatsApp.
        </p>
    
        <div class="paket-container">
    
            <!-- BASIC -->
            <div class="paket-card">
                <div class="paket-content">
    
                    <div>
                        <h2>BASIC</h2>
                        <h3>Rp15.000 / m²</h3>
    
                        <ul>
                            <li>•⁠ ⁠Denah 2D </li>
                            <li>•⁠ Visualisasi 3D Render ( View depan,samping kanan,samping kiri,bird view)
                            </li>
                            <li>•⁠ Visualisasi Denah 3D</li>
                        </ul>
                    </div>
    
                    <a href="https://wa.me/6285113282769?text=Halo%20Aritama%20Architect,%20saya%20tertarik%20dengan%20Paket%20Basic.%20Boleh%20minta%20info%20lebih%20lanjut?"
                        target="_blank" class="btn-wa">
                        Pesan Sekarang
                    </a>
    
                </div>
            </div>
    
    
            <!-- STANDART -->
            <div class="paket-card">
                <div class="paket-content">
    
                    <div>
                        <h2>STANDART</h2>
                        <h3>Rp35.000 / m²</h3>
    
                        <ul>
                            <li>•⁠ ⁠Denah 2D                            </li>
                            <li>•⁠ ⁠Visualisasi 3D Render ( View depan,samping kanan,samping kiri,bird view)                            </li>
                            <li>•⁠ ⁠Visualisasi Denah 3D </li>
                            <li>•⁠ ⁠Gambar kerja Arsitektur</li>
                            <li>•⁠ Gambar kerja Struktur</li>
                            <li>•⁠ ⁠Gambar kerja MEP</li>
                            <li>•⁠ ⁠RAB (Rencana Anggaran Biaya)
                            </li>
                        </ul>
                    </div>
    
                    <a href="https://wa.me/6285113282769?text=Halo%20Aritama%20Architect,%20saya%20tertarik%20dengan%20Paket%20Standart.%20Boleh%20minta%20info%20lebih%20lanjut?"
                        target="_blank" class="btn-wa">
                        Pesan Sekarang
                    </a>
    
                </div>
            </div>
    
    
            <!-- PREMIUM -->
            <div class="paket-card best">
    
                <span class="badge">BEST</span>
    
                <div class="paket-content">
    
                    <div>
                        <h2>PREMIUM</h2>
                        <h3>Rp50.000 / m²</h3>
    
                        <ul>
                            <li>•⁠ ⁠Denah 2D</li>
                            <li>•⁠ ⁠Visualisasi 3D Render ( View depan,samping kanan,samping kiri,bird view)
                            </li>
                            <li>•⁠ Visualisasi Denah 3D</li>
                            <li>•⁠ 3D Visual Animasi Eksterior ( Durasi 1 menit )                            </li>
                            <li>•⁠ ⁠Gambar kerja Arsitektur</li>
                            <li>•⁠ ⁠Gambar kerja Struktur</li>
                            <li>•⁠ ⁠Gambar kerja MEP</li>
                            <li>•⁠ ⁠RAB (Rencana Anggaran Biaya)</li>
                            <li>•⁠ ⁠Breakdown material bangunan</li>
                        </ul>
                    </div>
    
                    <a href="https://wa.me/6285113282769?text=Halo%20Aritama%20Architect,%20saya%20tertarik%20dengan%20Paket%Premium.%20Boleh%20minta%20info%20lebih%20lanjut?"
                        target="_blank" class="btn-wa">
                        Pesan Sekarang
                    </a>
    
                </div>
            </div>
    
    
            <!-- INTERIOR -->
            <div class="paket-card">
                <div class="paket-content">
    
                    <div>
                        <h2>INTERIOR STANDART</h2>
                        <h3>Rp40.000 / m²</h3>
    
                        <ul>
                            <li>•⁠ ⁠3D Visual render Interior</li>
                            <li>•⁠ ⁠Layout plan</li>
                            <li>•⁠ Gambar kerja interior
                            </li>
                            <li>•⁠ ⁠Detailing Interior</li>
                        </ul>
                    </div>
    
                    <a href="https://wa.me/6285113282769?text=Halo%20Aritama%20Architect,%20saya%20tertarik%20dengan%20Paket%20Interior%20Standart.%20Boleh%20minta%20info%20lebih%20lanjut?"
                        target="_blank" class="btn-wa">
                        Pesan Sekarang
                    </a>
    
                </div>
            </div>
    
    
            <!-- INTERIOR PRO -->
            <div class="paket-card">
                <div class="paket-content">
    
                    <div>
                        <h2>INTERIOR PREMIUM</h2>
                        <h3>Rp55.000 / m²</h3>
    
                        <ul>
                            <li>•⁠ ⁠3D Visual render Interior</li>
                            <li>•⁠ ⁠Layout plan
                            </li>
                            <li>•⁠ ⁠Gambar kerja interior
                            </li>
                            <li>•⁠ ⁠Detailing Interior</li>
                            <li>•⁠ ⁠RAB ( Rencana Anggaran Biaya)
                            </li>
                            <li>•⁠ ⁠Animasi setiap ruang terpisah ( 1 ruang 30 Sec)</li>
                        </ul>
                    </div>
    
                    <a href="https://wa.me/6285113282769?text=Halo%20Aritama%20Architect,%20saya%20tertarik%20dengan%20Paket%20Interior%20Premium.%20Boleh%20minta%20info%20lebih%20lanjut?"
                        target="_blank" class="btn-wa">
                        Pesan Sekarang
                    </a>
    
                </div>
            </div>
    
        </div>
    
    </section>
    <section id="home-b">

        <h1 class="text-center py-1">Kenapa Memilih Aritama Architect</h1>
    
        <p class="text-center py-1 p-smart-phone">
            Kami berkomitmen memberikan desain terbaik dengan perencanaan yang matang,
            detail gambar yang lengkap, dan pelayanan profesional untuk setiap klien.
        </p>
    
        <div class="features-container py-3 text-center">
    
            <div>
                <i class='fas fa-home fa-2x'></i>
                <h3>80+</h3>
                <h3>Proyek Selesai</h3>
            </div>
    
            <div>
                <i class='fas fa-user-friends fa-2x'></i>
                <h3>70+</h3>
                <h3>Klien Puas</h3>
            </div>
    
            <div>
                <i class='fas fa-pencil-ruler fa-2x'></i>
                <h3>100+</h3>
                <h3>Desain Dibuat</h3>
            </div>
    
            <div>
                <i class='fas fa-comments fa-2x'></i>
                <h3>Gratis</h3>
                <h3>Konsultasi Awal</h3>
            </div>
    
        </div>
    
    </section>
    <section id="home-c" class="text-center py-3">

        <h1>Keunggulan Aritama Architect</h1>
    
        <div class="container award-grid">
    
            <div>
                <i class='fas fa-award fa-2x'></i>
                <h3>Desain Sesuai Kebutuhan</h3>
                <p>
                    Setiap desain dibuat sesuai keinginan klien dengan mempertimbangkan
                    fungsi, kenyamanan, dan estetika bangunan.
                </p>
            </div>
    
            <div>
                <i class='fas fa-drafting-compass fa-2x'></i>
                <h3>Gambar Lengkap & Detail</h3>
                <p>
                    Kami menyediakan gambar kerja lengkap mulai dari arsitektur,
                    struktur, hingga detail teknis yang siap digunakan untuk pembangunan.
                </p>
            </div>
    
            <div>
                <i class='fas fa-comments fa-2x'></i>
                <h3>Konsultasi Mudah</h3>
                <p>
                    Proses komunikasi mudah dan fleksibel, sehingga klien dapat
                    berdiskusi langsung untuk mendapatkan hasil desain terbaik.
                </p>
            </div>
    
        </div>
    
    </section>
    <section id="home-d">
        <div class="word-content text-center">
            <h3 class="text-center"> Wujudkan Desain Bangunan Impian Anda Bersama Aritama Architect</h3>
            <a href="project.html" class="btn btn-dark my-1">Lihat Portfolio</a>
        </div>
    </section>
        <footer id="main-footer">
            <div class="container text-center">
        
                <!-- <img src="photos/TheBuiltLogoRetinaLight-198x51.png" alt="" style="width: 195px;height: 51px;"> -->
        
                <ul>
                    <li>
                        AllRight Reseved &copy; 2026
                    </li>
        
                    <li class="social-footer">
                        <a href="#"> <i class="fab fa-instagram" style="color: white;"></i></a>
                        <a href="https://www.tiktok.com/@aritamaarchitect?_r=1&_t=ZS-94nYwcWd7E0"><i class="fab fa-tiktok" style="color: white;"></i></a>
                        <a href="#"><i class="fab fa-facebook" style="color: white;"></i></a>
                        <a href="#"><i class="fab fa-youtube" style="color: white;"></i></a>
                    </li>
        
                    <li>
                        Design By Aritama Architect
                    </li>
                </ul>
        
            </div>
        </footer>
</body>

</html>