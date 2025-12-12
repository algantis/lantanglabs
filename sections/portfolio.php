<!-- =============================== -->
<!--      PORTFOLIO SECTION         -->
<!-- =============================== -->

<style>
    #portfolio {
        padding: 90px 0;
        background: #f4f7fc;
    }

    .portfolio-title {
        text-align: center;
        font-size: 40px;
        font-weight: 800;
        margin-bottom: 12px;
        color: #0a1b3d;
    }

    .portfolio-sub {
        text-align: center;
        font-size: 18px;
        opacity: 0.7;
        margin-bottom: 50px;
    }

    .portfolio-grid {
        width: 90%;
        max-width: 1200px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
        gap: 30px;
    }

    .portfolio-card {
        background: #ffffff;
        border-radius: 18px;
        overflow: hidden;
        border: 1px solid #dbe2ee;
        box-shadow: rgba(10, 30, 60, 0.10) 0px 4px 26px;
        transition: 0.4s ease;
    }

    .portfolio-card:hover {
        transform: translateY(-10px);
        box-shadow: rgba(10, 30, 60, 0.18) 0px 12px 35px;
    }

    .portfolio-img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-bottom: 1px solid #e0e5ef;
    }

    .portfolio-content {
        padding: 22px;
    }

    .portfolio-card h3 {
        font-size: 22px;
        color: #0a2540;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .portfolio-card p {
        font-size: 15px;
        opacity: 0.85;
        line-height: 1.6;
        margin-bottom: 5px;
    }

</style>

<section id="portfolio">
    <h2 class="portfolio-title">Portofolio Aplikasi</h2>
    <p class="portfolio-sub">Beberapa solusi digital unggulan yang telah kami bangun untuk instansi, sekolah, dan kampus</p>

    <div class="portfolio-grid">

        <!-- 1. APLIKASI PUSKESMAS -->
        <div class="portfolio-card">
            <img src="assets/img/portfolio/puskesmas.jpg" class="portfolio-img" alt="Aplikasi Puskesmas">
            <div class="portfolio-content">
                <h3>Aplikasi Puskesmas</h3>
                <p>
                    Sistem informasi terpadu yang saat ini digunakan oleh
                    <b>11 Puskesmas di Barito Timur</b>. Meliputi pendaftaran, rekam medis,  
                    farmasi, laporan rutin, antrean, SIMPUS, dan dashboard monitoring real-time.
                </p>
            </div>
        </div>

        <!-- 2. PEMBELAJARAN -->
        <div class="portfolio-card">
            <img src="assets/img/portfolio/belajar.jpg" class="portfolio-img" alt="Aplikasi Pembelajaran">
            <div class="portfolio-content">
                <h3>Aplikasi Pembelajaran</h3>
                <p>
                    Platform digital untuk kegiatan belajar mengajar modern.  
                    Dilengkapi materi interaktif, ujian online, rekap otomatis,  
                    video pembelajaran, hingga sistem kelas berbasis kurikulum.
                </p>
            </div>
        </div>

        <!-- 3. PEMBENDAHARAAN BARANG -->
        <div class="portfolio-card">
            <img src="assets/img/portfolio/aset.jpg" class="portfolio-img" alt="Aplikasi Pembendaharaan Barang">
            <div class="portfolio-content">
                <h3>Aplikasi Pembendaharaan Barang</h3>
                <p>
                    Sistem inventaris dan manajemen aset untuk memudahkan instansi  
                    dalam pelacakan barang, stok, mutasi, penghapusan, hingga laporan otomatis.
                </p>
            </div>
        </div>

        <!-- 4. LMS KAMPUS/SEKOLAH -->
        <div class="portfolio-card">
            <img src="assets/img/portfolio/lms.jpg" class="portfolio-img" alt="LMS Kampus Sekolah">
            <div class="portfolio-content">
                <h3>Aplikasi LMS untuk Kampus & Sekolah</h3>
                <p>
                    Learning Management System dengan fitur kelas virtual, upload materi,  
                    penilaian otomatis, presensi online, forum, serta integrasi ke kurikulum akademik.
                </p>
            </div>
        </div>

        <!-- 5. SIAKAD KAMPUS -->
        <div class="portfolio-card">
            <img src="assets/img/portfolio/siakad.jpg" class="portfolio-img" alt="SIAKAD Kampus">
            <div class="portfolio-content">
                <h3>Aplikasi SIAKAD untuk Kampus</h3>
                <p>
                    Sistem Informasi Akademik Kampus yang meliputi KRS, KHS, presensi,  
                    jadwal kuliah, dosen, pembayaran, kurikulum, hingga laporan akademik resmi PDDIKTI.
                </p>
            </div>
        </div>

    </div>
</section>
