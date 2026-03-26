<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Aritama Architect Website" content="Best Aritama Architect In World">
    <meta keys="Aritama Architect || Idea || Issue">
    <script src="https://kit.fontawesome.com/707ca0a07c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/mobile.css">
    <title>Contact Us</title>
</head>

<body>
    <header id="contact">
        <nav id="navbar">
            <h3>Aritama Architect</h3>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="project.html">Proyek</a></li>
                <li><a href="about.html">Tentang Kami</a></li>
                <li><a href="blog.html">Artikel</a></li>
                <li><a href="contact.html">Kontak</a></li>
            </ul>
        </nav>
    </header> -->
    @extends('layouts')

@section('content')
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FZL5WS2BPX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FZL5WS2BPX');
</script>
    <section id="contact-a">
        <div class="container">
            <h1 class="py-1">Contact Us</h1>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="number">Phone Number:</label>
                    <input type="text" name="number" id="number">
                </div>
                <div class="form-group">
                    <label for="textarea">Message:</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <a href="#" class="btn btn-dark">Submit</a>
            </form>
        </div>
    </section>


    @endsection