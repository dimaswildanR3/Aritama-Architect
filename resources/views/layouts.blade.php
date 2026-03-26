<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>Jasa Desain Rumah Murah & Profesional | Aritama Architect</title>

    <meta name="description" content="Aritama Architect adalah jasa desain rumah, arsitek, interior, dan gambar kerja profesional dengan harga terjangkau. Melayani desain rumah minimalis, modern, dan tropis di seluruh Indonesia.">

    <meta name="keywords" content="
    jasa arsitek murah,
    jasa desain rumah murah,
    arsitek rumah minimalis,
    desain rumah modern,
    jasa desain arsitektur indonesia,
    arsitek profesional,
    jasa gambar kerja,
    desain rumah 3d,
    arsitek nganjuk,
    arsitek jawa timur,
    arsitek indonesia
    ">

    <meta name="author" content="Aritama Architect">

    <!-- SEO Google -->
    <meta name="robots" content="index, follow">

    <!-- Open Graph (SEO sosmed) -->
    <meta property="og:title" content="Aritama Architect | Jasa Desain Rumah Profesional">
    <meta property="og:description" content="Jasa desain rumah murah, arsitek profesional, gambar kerja, interior, dan RAB.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://aritamaarchitect.com/photos/icon1.png">
    <meta property="og:url" content="https://aritamaarchitect.com/">

    <!-- Favicon / logo icon -->
    <link rel="icon" href="{{ asset('photos/icon1.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('photos/icon1.png') }}">
    <link rel="shortcut icon" href="{{ asset('photos/icon1.png') }}">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/707ca0a07c.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/mobile.css') }}">

    <!-- Structured Data JSON-LD untuk Google -->
    <script type="application/ld+json">      
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Aritama Architect",
      "url": "https://aritamaarchitect.com",
      "logo": "https://aritamaarchitect.com/photos/icon1.png"
    }
    </script>

    <!-- Opsional: Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Aritama Architect | Jasa Desain Rumah Profesional">
    <meta name="twitter:description" content="Jasa desain rumah murah, arsitek profesional, gambar kerja, interior, dan RAB.">
    <meta name="twitter:image" content="https://aritamaarchitect.com/photos/icon1.png">
</head>

<body>
    <header id="about">
        <nav id="navbar">
            <h3>Aritama Architect</h3>
            <ul>
            <li><a href="/">Beranda</a></li>
                <li><a href="/project">Proyek</a></li>
                <li><a href="/about">Tentang Kami</a></li>
                <li><a href="/blog">Artikel</a></li>
                <li><a href="/contact">Kontak</a></li>
            </ul>
        </nav>
    </header>


{{-- isi halaman --}}
@yield('content')


<footer id="main-footer">
        <div class="container text-center">
            <!-- <img src="photos/TheBuiltLogoRetinaLight-198x51.png" alt="" style="width: 195px;height: 51px;"> -->
            <ul>
                <li>
                    AllRight Reseved &copy; 2026
                </li>
                <li class="social-footer">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </li>
                <li>
                    Design By Aritama Architect
                </li>
            </ul>
        </div>
    </footer>


</body>
</html>