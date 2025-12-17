<!-- ABOUT SECTION -->
<style>
#about {
    background: linear-gradient(135deg, #0a2540 0%, #163a5f 100%);
    padding: 110px 20px;
    position: relative;
    overflow: hidden;
}

/* BACKGROUND DECOR */
#about::before,
#about::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(77,163,255,0.25), transparent 70%);
    z-index: 0;
    animation: floatAbout 18s linear infinite;
}

#about::before {
    width: 350px;
    height: 350px;
    top: -120px;
    left: -120px;
}

#about::after {
    width: 450px;
    height: 450px;
    bottom: -180px;
    right: -150px;
    animation-delay: -9s;
}

@keyframes floatAbout {
    0% { transform: translate(0,0); }
    50% { transform: translate(40px,-30px); }
    100% { transform: translate(0,0); }
}

/* CONTAINER */
.about-container {
    max-width: 1000px;
    margin: auto;
    position: relative;
    z-index: 2;
    text-align: center;
}

/* GLASS PANEL */
.about-panel {
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(12px);
    border-radius: 28px;
    padding: 60px 40px;
    box-shadow: 0 25px 70px rgba(0,0,0,0.35);
}

/* LOGO */
.logo-box {
    margin-bottom: 30px;
    animation: fadeUp 1s ease forwards;
}

.logo-box img {
    width: 150px;
    background: #ffffff;
    padding: 15px;
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.3);
}

/* TITLE */
#about h2 {
    font-size: 40px;
    font-weight: 800;
    margin-bottom: 18px;
    letter-spacing: 1px;

    background: linear-gradient(90deg, #ffffff, #cfe6ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    text-shadow: 0 8px 30px rgba(77,163,255,0.35);
    position: relative;
    animation: fadeUp 1.2s ease forwards;
}

/* UNDERLINE */
#about h2::after {
    content: "";
    display: block;
    width: 90px;
    height: 4px;
    margin: 16px auto 0;
    border-radius: 999px;
    background: linear-gradient(90deg, #4da3ff, #00d4ff);
    animation: underlinePulse 3s ease-in-out infinite;
}

@keyframes underlinePulse {
    0%,100% { width: 60px; opacity: 0.6; }
    50% { width: 110px; opacity: 1; }
}

/* TEXT */
#about p {
    font-size: 18px;
    line-height: 1.9;
    max-width: 850px;
    margin: 35px auto 0;
    color: rgba(255,255,255,0.95);
    animation: fadeUp 1.4s ease forwards;
}

/* ANIMATION */
@keyframes fadeUp {
    from {
        transform: translateY(25px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    #about {
        padding: 80px 20px;
    }

    .about-panel {
        padding: 45px 25px;
    }

    #about h2 {
        font-size: 32px;
    }

    #about p {
        font-size: 16px;
    }

    .logo-box img {
        width: 120px;
    }
}
</style>

<section id="about">
    <div class="about-container">
        <div class="about-panel">

            <div class="logo-box">
                <img src="assets/img/logo-lantanglabs.jpeg" alt="LantangLabs Logo">
            </div>

            <h2>Tentang Kami</h2>

            <p>
                LantangLabs adalah perusahaan teknologi yang berfokus pada pengembangan sistem digital
                untuk dunia pendidikan. Kami menyediakan solusi seperti Sistem Informasi Akademik (SIAKAD),
                Sistem Sekolah, Learning Management System (LMS), serta berbagai platform e-Edukasi.
                <br><br>
                Dengan desain modern, performa cepat, serta fitur yang saling terintegrasi,
                LantangLabs hadir untuk membantu institusi pendidikan menjalankan transformasi digital
                secara profesional, efisien, dan berkelanjutan.
            </p>

        </div>
    </div>
</section>
