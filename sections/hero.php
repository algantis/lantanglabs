<!-- HERO SLIDER MODERN -->
<style>
    /* HERO WRAPPER */
    #hero {
        position: relative;
        height: 90vh;
        width: 100%;
        overflow: hidden;
        color: white;
    }

    /* SLIDE IMAGES */
    .hero-slide {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 1.5s ease-in-out;
    }

    .hero-slide.active {
        opacity: 1;
    }

    /* DARK OVERLAY */
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(10, 30, 60, 0.70);
    }

    /* TEXT CONTENT */
    .hero-content {
        position: absolute;
        top: 53%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 90%;
        max-width: 900px;
    }

    /* WELCOME SMALL TEXT */
    .hero-welcome {
        font-size: 20px;
        opacity: 0.85;
        letter-spacing: 1px;
        margin-bottom: 10px;
        animation: fadeText 1s ease-in-out;
    }

    .hero-title {
        font-size: 54px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .hero-innovation {
        font-size: 24px;
        margin-bottom: 25px;
        opacity: 0.9;
        min-height: 40px;
        animation: fadeText 1s ease-in-out;
    }

    @keyframes fadeText {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* CTA BUTTON */
    .hero-btn a {
        background: #ffffff;
        color: #0a2540;
        padding: 14px 34px;
        border-radius: 10px;
        font-size: 18px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
        box-shadow: 0 5px 15px rgba(255,255,255,0.25);
    }

    .hero-btn a:hover {
        background: #e3e9f5;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .hero-title { font-size: 32px; }
        .hero-innovation { font-size: 16px; }
        .hero-welcome { font-size: 14px; }
    }
</style>

<section id="hero">
    <!-- SLIDES -->
    <img src="assets/slide1.jpg" class="hero-slide active">
    <img src="assets/slide2.jpg" class="hero-slide">
    <img src="assets/slide3.jpg" class="hero-slide">

    <!-- OVERLAY -->
    <div class="hero-overlay"></div>

    <!-- TEXT CONTENT -->
    <div class="hero-content">

        <!-- WELCOME TEXT -->
        <div class="hero-welcome">
            Selamat Datang di Website Resmi <strong>Lantang Labs</strong>
        </div>

        <h1 class="hero-title">lantanglabs</h1>

        <div class="hero-innovation" id="innovation-text">
            Inovasi Digital untuk Pendidikan.
        </div>

        <div class="hero-btn">
            <a href="#services">Lihat Layanan</a>
        </div>
    </div>
</section>

<!-- SLIDER & TEXT ROTATION SCRIPT -->
<script>
    // IMG SLIDER
    let slides = document.querySelectorAll('.hero-slide');
    let currentSlide = 0;

    setInterval(() => {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }, 4000);

    // TEXT INNOVATION ROTATION
    const texts = [
        "Inovasi Digital untuk Pendidikan.",
        "Transformasi Akademik Berbasis Teknologi.",
        "Sistem Modern untuk Sekolah & Kampus.",
        "Solusi Pintar untuk Era Digital."
    ];

    let txtIndex = 0;
    const textBox = document.getElementById("innovation-text");

    setInterval(() => {
        txtIndex = (txtIndex + 1) % texts.length;
        textBox.style.opacity = 0;
        setTimeout(() => {
            textBox.innerHTML = texts[txtIndex];
            textBox.style.opacity = 1;
        }, 400);
    }, 3500);
</script>
