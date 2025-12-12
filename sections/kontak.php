<!-- Kontak Section -->
<style>
    .contact {
        padding: 90px 20px;
        background: #ffffff;
    }

    .contact-title {
        text-align: center;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 12px;
        color: #0b2347;
    }

    .contact-subtitle {
        text-align: center;
        font-size: 18px;
        margin-bottom: 50px;
        color: #555;
    }

    .contact-wrapper {
        max-width: 900px;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 35px;
    }

    .contact-box {
        background: #f5f8fc;
        padding: 25px;
        border-radius: 14px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.07);
    }

    .contact-box h3 {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 700;
        color: #0b2347;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }

    .contact-icon {
        font-size: 24px;
        margin-right: 12px;
    }

    .contact-item span {
        font-size: 16px;
        color: #333;
    }

    /* form */
    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 12px 14px;
        margin-bottom: 15px;
        border-radius: 10px;
        border: 1px solid #c8d6e5;
        font-size: 15px;
        font-family: 'Poppins', sans-serif;
    }

    .contact-form textarea {
        height: 120px;
        resize: none;
    }

    .contact-form button {
        width: 100%;
        border: none;
        padding: 14px;
        font-size: 16px;
        color: white;
        background: #0b2347;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
    }

    .contact-form button:hover {
        background: #10356e;
    }

    /* Responsive */
    @media (max-width: 780px) {
        .contact-wrapper {
            grid-template-columns: 1fr;
        }
    }
</style>

<section id="kontak" class="contact">
    <h2 class="contact-title">Hubungi Kami</h2>
    <p class="contact-subtitle">Silakan hubungi kami untuk konsultasi atau kerja sama.</p>

    <div class="contact-wrapper">

        <!-- INFO KONTAK -->
        <div class="contact-box">
            <h3>Informasi Kontak</h3>

            <div class="contact-item">
                <div class="contact-icon">📞</div>
                <span>+62 822-5540-8775</span>
            </div>

            <div class="contact-item">
                <div class="contact-icon">✉️</div>
                <span>lantanglabs@gmail.com</span>
            </div>

            <div class="contact-item">
                <div class="contact-icon">📍</div>
                <span>Palangkaraya, Kalimantan Tengah</span>
            </div>

            <div class="contact-item">
                <div class="contact-icon">🌐</div>
                <span>www.lantanglabs.com</span>
            </div>
        </div>

        <!-- FORM KONTAK -->
        <div class="contact-box contact-form">
            <h3>Kirim Pesan</h3>

            <form action="#" method="POST">
                <input type="text" name="nama" placeholder="Nama Lengkap" required>
                <input type="email" name="email" placeholder="Alamat Email" required>
                <textarea name="pesan" placeholder="Tulis pesan Anda..." required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>

    </div>
</section>
