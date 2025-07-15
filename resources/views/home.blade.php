<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Pulih - Kesehatan Mental</title>
    <style>
        :root {
            --orange: #fc823d;
            --blue: #88b4ff;
            --cream: #f8f4f1;
            --green: #a5e26c;
            --yellow: #f4c347;
            --dark: #333333;
            --light: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Navbar */
        header {
            background-color: var(--light);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 40px;
            margin-right: 10px;
        }
        
        .logo h1 {
            color: var(--orange);
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        .nav-center {
            display: flex;
            align-items: center;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            margin-right: 30px;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            font-size: 1.1rem;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--orange);
        }
        
        /* Admin Login Button */
        .admin-login-btn {
            background-color: var(--orange);
            color: var(--light);
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .admin-login-btn:hover {
            background-color: #e6741e;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(252, 130, 61, 0.3);
        }
        
        .admin-login-btn:active {
            transform: translateY(0);
        }
        
        /* Admin icon */
        .admin-icon {
            width: 18px;
            height: 18px;
            fill: currentColor;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                margin-right: 15px;
            }
            
            .nav-links li {
                margin-left: 20px;
            }
            
            .admin-login-btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 480px) {
            .nav-links {
                display: none;
            }
            
            .admin-login-btn {
                padding: 8px 12px;
                font-size: 0.8rem;
            }
        }
        
        /* Hero Section */
        .hero {
            background: var(--cream);
            padding: 100px 0 150px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            max-width: 600px;
        }
        
        .hero h2 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            font-weight: 700;
        }
        
        .hero h2 span {
            color: var(--orange);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #555;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--orange);
            color: white;
            padding: 15px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #e5733d;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(252, 130, 61, 0.3);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--orange);
            color: var(--orange);
            margin-left: 15px;
        }
        
        .btn-outline:hover {
            background: var(--orange);
            color: white;
        }
        
        .hero-image {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 50%;
            max-width: 600px;
        }
        
        .hero-image img {
            width: 100%;
            height: auto;
        }
        
        /* Stats Section */
        .stats {
            background: var(--orange);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        
        .stats-container {
            display: flex;
            justify-content: space-around;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .stat-item {
            padding: 0 20px;
        }
        
        .stat-item h3 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: 700;
        }
        
        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* About Section */
        .about {
            padding: 120px 0;
            background-color: var(--light);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--orange);
            margin-bottom: 15px;
        }
        
        .section-title p {
            font-size: 1.2rem;
            color: #555;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 60px;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .about-text p {
            margin-bottom: 20px;
            color: #555;
            font-size: 1.1rem;
        }
        
        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        /* Features */
        .features {
            padding: 80px 0;
            background: var(--cream);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }
        
        .feature-icon img {
            width: 40px;
            height: 40px;
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .feature-card p {
            color: #666;
            font-size: 1.1rem;
        }
        
        /* Psychologists Section */
        .psychologists {
            padding: 120px 0;
            background-color: var(--light);
        }
        
        .psychologist-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .psychologist-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            padding: 30px;
            transition: transform 0.3s;
        }
        
        .psychologist-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .psychologist-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
            border: 3px solid var(--blue);
        }
        
        .psychologist-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .psychologist-card h3 {
            margin-bottom: 5px;
            color: var(--orange);
            font-size: 1.5rem;
        }
        
        .psychologist-card .specialty {
            color: var(--blue);
            font-weight: 500;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        
        .psychologist-card .schedule {
            font-size: 1rem;
            color: #666;
            margin-bottom: 20px;
        }
        
        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, var(--blue) 0%, var(--green) 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }
        
        .cta p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 0 30px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }
        
        .footer-column h3 {
            color: var(--orange);
            margin-bottom: 25px;
            font-size: 1.5rem;
        }
        
        .footer-column p {
            margin-bottom: 20px;
            color: #aaa;
            line-height: 1.8;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 15px;
        }
        
        .footer-column ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 1.1rem;
        }
        
        .footer-column ul li a:hover {
            color: var(--orange);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }
        
        .social-links a:hover {
            background: var(--orange);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #aaa;
            font-size: 0.9rem;
        }
        
        @media (max-width: 992px) {
            .hero-content {
                max-width: 100%;
                text-align: center;
            }
            
            .hero-image {
                position: relative;
                width: 100%;
                transform: none;
                margin-top: 50px;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .btn-outline {
                margin-left: 0;
                margin-top: 15px;
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <img src="https://via.placeholder.com/40x40/fc823d/ffffff?text=RP" alt="Ruang Pulih Logo">
                    <h1>Ruang Pulih</h1>
                </div>
                <div class="nav-center">
                    <ul class="nav-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#educate">Edukasi</a></li>
                        <li><a href="#psychologists">Konsultasi</a></li>
                    </ul>
                    <a href="{{ route('posts.index') }}" class="admin-login-btn">
                        <svg class="admin-icon" viewBox="0 0 24 24">
                            <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 7V9C15 10.1 15.9 11 17 11V21H7V11C8.1 11 9 10.1 9 9V7H3V9H5V21H7V11C7 9.9 7.9 9 9 9H15C16.1 9 17 9.9 17 9V21H19V9H21Z"/>
                        </svg>
                        Login Admin
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h2>Kesehatan Mental di <span>Era Modern</span></h2>
                <p>Atasi kecemasan dan temukan kedamaian dengan bantuan profesional kami. Kami berkomitmen untuk menemani perjalanan kesehatan mental Anda.</p>
                <div>
                    <a href="#psychologists" class="btn">Mulai Konsultasi</a>
                    <a href="#educate" class="btn btn-outline">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('img/wlc.jpg') }}" alt="hero image">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-container">
            <div class="stat-item">
                <h3>500+</h3>
                <p>Klien Terbantu</p>
            </div>
            <div class="stat-item">
                <h3>15+</h3>
                <p>Psikolog Profesional</p>
            </div>
            <div class="stat-item">
                <h3>98%</h3>
                <p>Kepuasan Klien</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Ruang Pulih</h2>
                <p>Platform kesehatan mental yang menyediakan edukasi dan layanan konsultasi dengan psikolog profesional untuk membantu Anda mencapai kesejahteraan mental.</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Mengapa Memilih Kami?</h3>
                    <p>Ruang Pulih hadir sebagai solusi untuk masalah kesehatan mental di era modern yang penuh tekanan. Kami memahami bahwa setiap individu memiliki kebutuhan yang unik.</p>
                    <p>Dengan pendekatan personal dan berbasis bukti, kami membantu klien untuk memahami diri mereka sendiri, mengatasi tantangan mental, dan mencapai potensi terbaik mereka.</p>
                    <p>Tim kami terdiri dari psikolog berpengalaman yang siap mendampingi Anda kapan saja, di mana saja.</p>
                </div>
                <div class="about-image">
                    <img src="{{ asset('img/WhatsApp Image 2025-05-17 at 20.30.46_e4d1386c.jpg') }}" alt="tentang ruang pulih">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="educate">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Kami</h2>
                <p>Kami menyediakan berbagai layanan untuk mendukung kesehatan mental Anda</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="{{ asset('img/ok.jpg') }}" alt="edukasi">
                    </div>
                    <h3>Edukasi Mental</h3>
                    <p>Artikel dan materi edukasi tentang berbagai topik kesehatan mental yang mudah dipahami.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon" style="background-color: var(--green);">
                        <img src="{{ asset('img/ok.jpg') }}" alt="konsultasi online">
                    </div>
                    <h3>Konsultasi Online</h3>
                    <p>Sesi konsultasi privat dengan psikolog profesional melalui platform online yang nyaman.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon" style="background-color: var(--orange);">
                        <img src="{{ asset('img/ok.jpg') }}" alt="support group">
                    </div>
                    <h3>Support Group</h3>
                    <p>Komunitas yang mendukung di mana Anda bisa berbagi pengalaman dengan orang lain.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Psychologists Section -->
    <section class="psychologists" id="psychologists">
        <div class="container">
            <div class="section-title">
                <h2>Tim Psikolog Kami</h2>
                <p>Berinteraksilah dengan psikolog berpengalaman yang siap membantu Anda</p>
            </div>
            <div class="psychologist-cards">
                <div class="psychologist-card">
                    <div class="psychologist-image">
                        <img src="{{ asset('img/balerina.jpg') }}" alt="Dr. nana">
                    </div>
                    <h3>Dr. nana</h3>
                    <p class="specialty">Psikolog Klinis</p>
                    <p class="schedule">Senin-Jumat: 09.00-15.00</p>
                    <a href="#" class="btn">Jadwalkan</a>
                </div>
                <div class="psychologist-card">
                    <div class="psychologist-image">
                        <img src="{{ asset('img/balerina.jpg') }}" alt="nana imut">
                    </div>
                    <h3>Dr. nana imut</h3>
                    <p class="specialty">Psikolog Anak & Remaja</p>
                    <p class="schedule">Selasa-Kamis: 13.00-18.00</p>
                    <a href="#" class="btn">Jadwalkan</a>
                </div>
                <div class="psychologist-card">
                    <div class="psychologist-image">
                        <img src="{{ asset('img/balerina.jpg') }}" alt="nana balerina capucina">
                    </div>
                    <h3>Dr. nana balerina capucina</h3>
                    <p class="specialty">Psikolog Keluarga</p>
                    <p class="schedule">Rabu-Jumat: 10.00-16.00</p>
                    <a href="#" class="btn">Jadwalkan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Siap Memulai Perjalanan Kesehatan Mental Anda?</h2>
            <p>Kami di sini untuk membantu Anda menemukan keseimbangan dan kedamaian dalam hidup.</p>
            <a href="#psychologists" class="btn">Konsultasi Sekarang</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Ruang Pulih</h3>
                    <p>Platform kesehatan mental yang menyediakan edukasi dan layanan konsultasi dengan psikolog profesional.</p>
                    <div class="social-links">
                        <a href="#"><img src="https://via.placeholder.com/20x20/ffffff/333333?text=f" alt="Facebook"></a>
                        <a href="#"><img src="https://via.placeholder.com/20x20/ffffff/333333?text=t" alt="Twitter"></a>
                        <a href="#"><img src="https://via.placeholder.com/20x20/ffffff/333333?text=i" alt="Instagram"></a>
                        <a href="#"><img src="https://via.placeholder.com/20x20/ffffff/333333?text=l" alt="LinkedIn"></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="#educate">Edukasi Mental</a></li>
                        <li><a href="#psychologists">Konsultasi Psikolog</a></li>
                        <li><a href="#">Support Group</a></li>
                        <li><a href="#">Tes Kesehatan Mental</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Perusahaan</h3>
                    <ul>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#">Tim Kami</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Kontak</h3>
                    <ul>
                        <li>Email: info@ruangpulih.com</li>
                        <li>Telepon: (021) 1234-5678</li>
                        <li>Alamat: Jl. Kesehatan Mental No. 123, Jakarta</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Ruang Pulih. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>