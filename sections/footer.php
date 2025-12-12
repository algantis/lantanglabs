<!-- Footer Section -->
<style>
    footer {
        background: #0b2347;
        color: white;
        padding: 45px 20px 20px;
        margin-top: 60px;
    }

    .footer-container {
        max-width: 1100px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 30px;
    }

    .footer-box h3 {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .footer-box p,
    .footer-box a {
        font-size: 15px;
        line-height: 1.7;
        color: #dce6f5;
        text-decoration: none;
    }

    .footer-box a:hover {
        color: #ffffff;
    }

    .footer-social {
        margin-top: 12px;
        display: flex;
        gap: 15px;
        font-size: 22px;
    }

    .footer-social a {
        color: #dce6f5;
        transition: 0.3s;
    }

    .footer-social a:hover {
        color: white;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 40px;
        font-size: 15px;
        color: #dce6f5;
        border-top: 1px solid rgba(255,255,255,0.18);
        padding-top: 15px;
    }
</style>

<footer>
    <div class="footer-container">

        <div class="footer-box">
            <h3>lantanglabs</h3>
            <p>Solusi digital modern untuk sekolah dan perguruan tinggi. SIAKAD, LMS, Sistem Sekolah, dan platform edukasi terintegrasi.</p>
        </div>

        <div class="footer-box">
            <h3>Navigasi</h3>
            <a href="#hero">Beranda</a><br>
            <a href="#about">Tentang Kami</a><br>
            <a href="#features">Fitur</a><br>
            <a href="#services">Layanan</a><br>
            <a href="#kontak">Kontak</a>
        </div>

        <div class="footer-box">
            <h3>Kontak</h3>
            <p>📍 Palangkaraya, Kalimantan Tengah</p>
            <p>📞 +62 822-5540-8775</p>
            <p>✉️ lantanglabs@gmail.com</p>
        </div>

        <div class="footer-box">
            <h3>Ikuti Kami</h3>
            <div class="footer-social">
                <a href="#" title="Facebook">📘</a>
                <a href="#" title="Instagram">📸</a>
                <a href="#" title="LinkedIn">💼</a>
                <a href="#" title="YouTube">▶️</a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © <?php echo date("Y"); ?> lantanglabs — Semua Hak Dilindungi
    </div>
</footer>
