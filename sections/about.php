<!-- ABOUT SECTION -->
<style>
    #about {
        background: linear-gradient(135deg, #0a2540 0%, #163a5f 100%);
        padding: 100px 20px;
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }

    /* Decorative circles */
    #about::before, #about::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
        z-index: 0;
    }
    #about::before {
        width: 300px;
        height: 300px;
        top: -70px;
        left: -50px;
    }
    #about::after {
        width: 400px;
        height: 400px;
        bottom: -100px;
        right: -80px;
    }

    #about .about-container {
        max-width: 1100px;
        margin: auto;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    #about .logo-box {
        margin-bottom: 30px;
        animation: fadeInUp 1s ease;
    }

    #about .logo-box img {
        width: 150px;
        height: auto;
        filter: drop-shadow(0 6px 15px rgba(0,0,0,0.25));
        border-radius: 15px;
        background: #ffffff;
        padding: 15px;
    }

    #about h2 {
        font-size: 38px;
        font-weight: 700;
        margin-bottom: 20px;
        letter-spacing: 1px;
        animation: fadeInUp 1.2s ease;
    }

    #about p {
        font-size: 18px;
        line-height: 1.8;
        max-width: 850px;
        margin: auto;
        opacity: 0.95;
        animation: fadeInUp 1.4s ease;
    }

    /* Animation */
    @keyframes fadeInUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @media (max-width: 768px) {
        #about h2 {
            font-size: 30px;
        }

        #about p {
            font-size: 16px;
        }

        #about .logo-box img {
            width: 120px;
            padding: 12px;
        }
    }
</style>

<section id="about" class="fade">
    <div class="about-container">
        
        <!-- LOGO -->
        <div class="logo-box">
            <img src="assets/img/logo-lantanglabs.jpeg" alt="LantangLabs Logo">
        </div>

        <h2>Tentang Kami</h2>

        <p>
            LantangLabs adalah perusahaan teknologi yang berfokus pada pengembangan sistem digital untuk dunia pendidikan.
            Kami menyediakan solusi seperti Sistem Informasi Akademik (SIAKAD), Sistem Sekolah, Learning Management System (LMS),
            serta berbagai platform e-Edukasi yang mendukung transformasi digital secara menyeluruh.
            <br><br>
            Dengan desain modern, performa cepat, serta fitur yang saling terintegrasi, LantangLabs hadir untuk membantu institusi pendidikan
            dalam menjalankan proses digitalisasi secara maksimal, profesional, dan efisien.
        </p>

    </div>
</section>
