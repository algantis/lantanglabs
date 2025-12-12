<!-- HEADER / NAVBAR -->
<style>
    nav {
        background: #0a2540; /* biru tua */
        padding: 18px 0;
        box-shadow: 0 3px 10px rgba(0,0,0,0.12);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    nav .nav-container {
        max-width: 1200px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 25px;
    }

    nav .logo {
        font-size: 26px;
        font-weight: 700;
        color: #ffffff;
        text-decoration: none;
        letter-spacing: 1px;
    }

    nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        gap: 25px;
    }

    nav ul li a {
        text-decoration: none;
        color: #dce8f8;
        font-size: 16px;
        font-weight: 500;
        transition: 0.3s;
    }

    nav ul li a:hover {
        color: #ffffff;
    }

    /* MOBILE MENU */
    .menu-btn {
        display: none;
        font-size: 26px;
        color: white;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        nav ul {
            display: none;
            position: absolute;
            top: 70px;
            width: 100%;
            left: 0;
            background: #0a2540;
            flex-direction: column;
            padding: 20px 0;
            text-align: center;
            gap: 15px;
        }
        nav ul.open {
            display: flex;
        }
        .menu-btn {
            display: block;
        }
    }
</style>

<script>
    function toggleMenu() {
        const menu = document.getElementById("menu");
        menu.classList.toggle("open");
    }
</script>

<nav>
    <div class="nav-container">
        <a href="#" class="logo">lantanglabs</a>

        <div class="menu-btn" onclick="toggleMenu()">☰</div>

        <ul id="menu">
            <li><a href="#hero">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#features">Fitur</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </div>
</nav>
