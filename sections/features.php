<!-- FEATURES SECTION MODERN -->
<style>
    #features {
        padding: 100px 0;
        background: #f7f9fc;
    }

    #features .section-title {
        text-align: center;
        font-size: 38px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #0a2540;
    }

    #features .section-subtitle {
        text-align: center;
        font-size: 18px;
        margin-bottom: 55px;
        color: #3c4a5b;
        opacity: 0.9;
    }

    /* GRID */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: auto;
    }

    /* CARD DESIGN */
    .feature-card {
        background: #ffffff;
        padding: 30px 25px;
        border-radius: 18px;
        text-align: center;
        border: 1px solid rgba(10, 37, 64, 0.08);
        transition: .35s ease;
        position: relative;
        overflow: hidden;
    }

    /* Modern Accent Line */
    .feature-card::before {
        content: "";
        position: absolute;
        top: -4px;
        left: 50%;
        transform: translateX(-50%);
        width: 0%;
        height: 4px;
        background: #0a2540;
        transition: 0.35s ease;
        border-radius: 50px;
    }

    .feature-card:hover::before {
        width: 85%;
    }

    /* Hover Effect */
    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(10, 37, 64, 0.12);
    }

    /* ICON STYLE */
    .feature-icon {
        font-size: 48px;
        margin-bottom: 18px;
        background: #0a2540;
        color: #fff;
        width: 70px;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 18px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .feature-card h3 {
        font-size: 22px;
        font-weight: 700;
        color: #0a2540;
        margin-bottom: 10px;
    }

    .feature-card p {
        font-size: 16px;
        color: #4c5b6d;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        #features .section-title {
            font-size: 30px;
        }
        .feature-icon {
            width: 60px;
            height: 60px;
            font-size: 40px;
        }
    }
</style>

<section id="features">
    <div class="container">
        
        <h2 class="section-title">FITUR UNGGULAN</h2>
        <p class="section-subtitle">Solusi digital modern untuk mendukung transformasi kampus atau sekolah Anda.</p>

        <div class="features-grid">

            <div class="feature-card">
                <div class="feature-icon">💡</div>
                <h3>Sistem Informasi Akademik</h3>
                <p>Pengelolaan mahasiswa, dosen, perkuliahan, nilai, dan akademik secara otomatis dan terintegrasi.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🧭</div>
                <h3>Manajemen Kurikulum</h3>
                <p>Pemetaan kurikulum fleksibel yang memudahkan pengaturan mata kuliah dan struktur akademik.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Dashboard Real-Time</h3>
                <p>Visualisasi data akademik, grafik, dan laporan penting secara langsung untuk pimpinan kampus.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Keamanan Data</h3>
                <p>Sistem enkripsi dan keamanan berlapis untuk melindungi integritas data institusi Anda.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Mobile Friendly</h3>
                <p>Desain responsif yang optimal di berbagai perangkat: laptop, tablet, hingga smartphone.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">⚙️</div>
                <h3>Kustomisasi Mudah</h3>
                <p>Modul dapat disesuaikan dengan kebutuhan kampus tanpa mengubah struktur utama sistem.</p>
            </div>

        </div>

    </div>
</section>
