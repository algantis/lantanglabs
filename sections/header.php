<!-- HEADER / NAVBAR -->
<style>
/* ===============================
   NAVBAR
================================ */
html {
    scroll-behavior: smooth;
}

nav {
    background: #0a2540;
    padding: 16px 0;
    box-shadow: 0 3px 10px rgba(0,0,0,0.12);
    position: sticky;
    top: 0;
    z-index: 1000;
    transition: all 0.3s ease;
}

nav.scrolled {
    padding: 12px 0;
    box-shadow: 0 6px 20px rgba(0,0,0,0.2);
}

.nav-container {
    max-width: 1200px;
    margin: auto;
    padding: 0 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* LOGO */
.logo {
    font-size: 26px;
    font-weight: 700;
    color: #ffffff;
    text-decoration: none;
    letter-spacing: 1px;
}

/* MENU */
nav ul {
    list-style: none;
    display: flex;
    gap: 28px;
    margin: 0;
    padding: 0;
}

nav ul li a {
    text-decoration: none;
    color: #dce8f8;
    font-size: 16px;
    font-weight: 500;
    position: relative;
    transition: 0.3s ease;
}

nav ul li a::after {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    background: #4da3ff;
    left: 0;
    bottom: -6px;
    transition: width 0.3s ease;
}

nav ul li a:hover::after,
nav ul li a.active::after {
    width: 100%;
}

nav ul li a.active {
    color: #ffffff;
}

/* MOBILE */
.menu-btn {
    display: none;
    font-size: 26px;
    color: #ffffff;
    cursor: pointer;
}

@media (max-width: 768px) {
    nav ul {
        position: absolute;
        top: 70px;
        left: 0;
        width: 100%;
        background: #0a2540;
        flex-direction: column;
        align-items: center;
        display: none;
        padding: 25px 0;
        gap: 18px;
    }

    nav ul.open {
        display: flex;
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .menu-btn {
        display: block;
    }
}

/* OFFSET SECTION (ANTI KETUTUP NAVBAR) */
section {
    scroll-margin-top: 90px;
}
</style>

<nav id="navbar">
    <div class="nav-container">
        <a href="#hero" class="logo">lantanglabs</a>

        <div class="menu-btn" id="menuBtn">☰</div>

        <ul id="menu">
            <li><a href="#hero">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#features">Fitur</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#portfolio">Portofolio</a></li>
            <li><a href="#developers">Tim</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </div>
</nav>

<script>
/* ===============================
   TOGGLE MOBILE MENU
================================ */
const menuBtn = document.getElementById("menuBtn");
const menu = document.getElementById("menu");

menuBtn.addEventListener("click", () => {
    menu.classList.toggle("open");
});

/* ===============================
   AUTO CLOSE MENU MOBILE
================================ */
document.querySelectorAll("#menu a").forEach(link => {
    link.addEventListener("click", () => {
        menu.classList.remove("open");
    });
});

/* ===============================
   ACTIVE MENU ON SCROLL
================================ */
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav ul li a");

window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 120;
        if (window.scrollY >= sectionTop) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
        }
    });

    /* NAVBAR EFFECT */
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
</script>
