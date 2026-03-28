@extends('layouts')

@section('content')

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FZL5WS2BPX"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-FZL5WS2BPX');
</script>

<style>

/* =====================
   GLOBAL
   ===================== */
body {
    background: #f5f5f5;
    color: #222;
    font-family: 'Inter', sans-serif;
}

.container {
    max-width: 1100px;
    margin: auto;
    padding: 0 20px;
}

h1, h2 {
    text-align: center;
    font-weight: 600;
    letter-spacing: 0.5px;
}

/* =====================
   PROJECT A
   ===================== */

#project-a {
    padding: 80px 0;
}

#project-a h1 {
    font-size: 32px;
    margin-bottom: 60px;
    position: relative;
}

#project-a h1::after {
    content: "";
    width: 60px;
    height: 3px;
    background: #c59d5f;
    display: block;
    margin: 12px auto 0;
}

/* CARD PROJECT */
.pair {
    display: flex;
    gap: 24px;
    margin-bottom: 20px;
    align-items: flex-start;

    padding: 20px;
    background: #ffffff;
    border-radius: 12px;

    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: 0.3s ease;
}

.pair:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
}

.pair:not(:last-child) {
    border-bottom: 1px solid #eee;
    padding-bottom: 40px;
}

/* PROPORSI */
.col-jpg {
    flex: 1754 1 0%;
    position: relative;
}

.col-png {
    flex: 928 1 0%;
    position: relative;
}

/* IMAGE */
.pair img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

/* LABEL */
.col-jpg::after {
    /* content: "Exterior"; */
    position: absolute;
    bottom: 12px;
    left: 12px;

    background: rgba(0,0,0,0.7);
    color: #fff;
    font-size: 12px;
    padding: 4px 10px;
    border-radius: 4px;
}

.col-png::after {
    /* content: "Floor Plan"; */
    position: absolute;
    bottom: 12px;
    left: 12px;

    background: rgba(255,255,255,0.9);
    color: #000;
    font-size: 12px;
    padding: 4px 10px;
    border-radius: 4px;
}

/* TITLE PROJECT */
.project-title {
    margin: 10px 0 40px;
    font-size: 14px;
    color: #666;
    text-align: center;
    letter-spacing: 1px;
    text-transform: uppercase;
}

/* =====================
   PROJECT B (DENAH)
   ===================== */

#project-b {
    background: #eeeeee;
    padding: 80px 0;
}

#project-b h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.floor-plan-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.floor-plan-item {
    background: #fff;
    border-radius: 12px;
    overflow: hidden; /* biar rapi */

    display: flex;
    flex-direction: column; /* ⬅️ ini kunci */
}

.floor-plan-item img {
    width: 100%;
    display: block;
}

.floor-plan-title {
    padding: 14px;
    text-align: center;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #555;

    background: #fafafa;
    border-top: 1px solid #eee;
}
/* =====================
   RESPONSIVE
   ===================== */

@media (max-width: 768px) {
    .pair {
        flex-direction: column;
    }

    .floor-plan-grid {
        grid-template-columns: 1fr;
    }
}

</style>

<!-- =====================
     PROJECT SECTION
===================== -->
<section id="project-a">
    <div class="container"style="margin-top: -70px;">

        <h1>Beberapa Proyek Terbaik Kami</h1>
<div style="margin-top: -40px;"></div>
        <!-- Project 1 -->
        <div class="pair">
            <div class="col-jpg">
                <img src="photos/1.jpg">
            </div>
            <div class="col-png">
                <img src="photos/1.png">
            </div>
        </div>
        <!-- <div class="project-title">Modern Minimalist House – Nganjuk</div> -->

        <!-- Project 2 -->
        <div class="pair">
            <div class="col-jpg">
                <img src="photos/2.jpg">
            </div>
            <div class="col-png">
                <img src="photos/2.png">
            </div>
        </div>
        <!-- <div class="project-title">Private Residence – Kediri</div> -->

        <!-- Project 3 -->
        <div class="pair">
            <div class="col-jpg">
                <img src="photos/3.jpg">
            </div>
            <div class="col-png">
                <img src="photos/3.png">
            </div>
        </div>
        <!-- <div class="project-title">Tropical Minimalist – Surabaya</div> -->

        <!-- Project 4 -->
        <div class="pair">
            <div class="col-jpg">
                <img src="photos/4.jpg">
            </div>
            <div class="col-png">
                <img src="photos/111.png">
            </div>
        </div>
        <!-- <div class="project-title">Contemporary House – Malang</div> -->

    </div>
</section>

<!-- =====================
     FLOOR PLAN
===================== -->
<section id="project-b">
    <div class="container">

        <h2>Detail Denah Bangunan</h2>

        <div class="floor-plan-grid">

            <div class="floor-plan-item">
                <img src="photos/123.jpg">
                <div class="floor-plan-title">Denah Lantai 1</div>
            </div>

            <div class="floor-plan-item">
                <img src="photos/1234.jpg">
                <div class="floor-plan-title">Denah Lantai 2</div>
            </div>

        </div>

    </div>
</section>

@endsection