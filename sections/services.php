<!-- SERVICES SECTION MODERN -->
<style>
    #services {
        padding: 100px 0;
        background: #f8fafc;
    }

    #services .services-title {
        text-align: center;
        font-size: 38px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #0b2347;
    }

    #services .services-subtitle {
        text-align: center;
        font-size: 18px;
        margin-bottom: 55px;
        color: #44526b;
        opacity: .9;
    }

    .services-grid {
        max-width: 1200px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    /* CARD */
    .service-card {
        background: #ffffff;
        padding: 35px 28px;
        border-radius: 20px;
        border: 1px solid rgba(0,0,0,0.05);
        text-align: center;
        position: relative;
        transition: .35s ease;
        overflow: hidden;
    }

    /* TOP LINE ANIMATION */
    .service-card::before {
        content: "";
        position: absolute;
        top: -4px;
        left: 50%;
        transform: translateX(-50%);
        width: 0%;
        height: 4px;
        background: #0b2347;
        transition: .4s ease;
        border-radius: 30px;
    }

    .service-card:hover::before {
        width: 85%;
    }

    /* Hover effect */
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(11, 35, 71, 0.15);
    }

    /* ICON STYLE */
    .service-icon {
        background: #0b2347;
        width: 70px;
        height: 70px;
        border-radius: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 20px auto;
        font-size: 38px;
        color: #ffffff;
        box-shadow: 0 4px 10px rgba(11, 35, 71, 0.25);
    }

    .service-card h3 {
        font-size: 22px;
        font-weight: 700;
        color: #0b2347;
        margin-bottom: 12px;
    }

    .service-card p {
        font-size: 16px;
        color: #415065;
        line-height: 1.7;
    }

    @media (max-width: 768px) {
        #services .services-title { font-size: 30px; }
        .service-icon {
            width: 60px;
            height: 60px;
            font-size: 30px;
        }
    }
</style>

<section id="services">
    <div class="container">

        <h2 class="services-title">Layanan Kami</h2>
        <p class="services-subtitle">Solusi profesional untuk digitalisasi kampus dan sekolah.</p>

        <div class="services-grid">

            <div class="service-card">
                <div class="service-icon">🎓</div>
                <h3>Pembuatan SIAKAD</h3>
                <p>Sistem Informasi Akademik lengkap mulai dari PMB, KRS, KHS, kehadiran, dosen, hingga pelaporan akademik otomatis.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🏫</div>
                <h3>Sistem Sekolah Digital</h3>
                <p>Manajemen sekolah berbasis web untuk guru, siswa, kurikulum, jadwal, absensi, e-rapor, dan administrasi sekolah.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">💻</div>
                <h3>Learning Management System</h3>
                <p>LMS modern untuk kelas online, materi belajar, video, kuis, forum diskusi, rekap nilai, dan analitik pembelajaran.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚙️</div>
                <h3>Kustom Modul Akademik</h3>
                <p>Kami menyediakan pengembangan modul tambahan sesuai kebutuhan institusi tanpa mengubah struktur inti.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🌐</div>
                <h3>Website Resmi Sekolah/Kampus</h3>
                <p>Tampilan profesional, responsif, modern, dan dilengkapi dashboard admin untuk pengelolaan konten.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Maintenance & Support</h3>
                <p>Dukungan teknis, perbaikan bug, upgrade sistem, dan pemeliharaan rutin untuk menjamin sistem selalu optimal.</p>
            </div>

        </div>

    </div>
</section>
