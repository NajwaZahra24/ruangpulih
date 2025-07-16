<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Pulih - Tempat Aman untuk Pulih</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ff6b35;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #ff6b35;
        }

        .cta-button {
            background: #ff6b35;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background: #e55a2b;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #fff5f2 0%, #ffeee8 100%);
            padding: 120px 0 80px;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #666;
            line-height: 1.8;
        }

        .hero-images {
            position: relative;
            height: 500px;
        }

        .hero-image {
            position: absolute;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .hero-image:nth-child(1) {
            width: 200px;
            height: 250px;
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            top: 0;
            left: 0;
            z-index: 3;
        }

        .hero-image:nth-child(2) {
            width: 180px;
            height: 200px;
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
            top: 50px;
            right: 50px;
            z-index: 2;
        }

        .hero-image:nth-child(3) {
            width: 150px;
            height: 180px;
            background: linear-gradient(45deg, #f093fb, #f5576c);
            bottom: 0;
            left: 100px;
            z-index: 1;
        }

        /* About Section */
        .about {
            padding: 80px 0;
            background: #fff;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 4rem;
            align-items: flex-start;
        }

        .about-images {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .about-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.9rem;
            text-align: center;
            padding: 1rem;
        }

        .about-image:nth-child(2) {
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #333;
        }

        .service-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .service-icon {
            width: 40px;
            height: 40px;
            background: #ff6b35;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .service-item h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .service-item p {
            color: #666;
            font-size: 0.9rem;
        }

        /* Mental Health Section */
        .mental-health {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .mental-health h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .mental-health-layout {
            display: grid;
            grid-template-columns: 250px 1fr 350px;
            gap: 3rem;
            align-items: flex-start;
        }

        .mental-health-menu {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 2rem;
            position: sticky;
            top: 120px;
        }

        .mental-health-menu h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            color: #333;
            text-align: center;
        }

        .mental-health-menu ul {
            list-style: none;
        }

        .mental-health-menu li {
            margin-bottom: 1rem;
        }

        .mental-health-menu a {
            display: block;
            padding: 0.75rem 1rem;
            text-decoration: none;
            color: #666;
            border-radius: 8px;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .mental-health-menu a:hover,
        .mental-health-menu a.active {
            background: #ff6b35;
            color: white;
        }

        .mental-health-content {
            background: #fff;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .mental-health-content h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #333;
            border-bottom: 2px solid #ff6b35;
            padding-bottom: 0.5rem;
        }

        .mental-health-content p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
            color: #666;
        }

        .mental-health-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
            border-radius: 15px;
            position: sticky;
            top: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
            text-align: center;
            padding: 2rem;
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        /* Medical Space Section */
        .medical-space {
            padding: 80px 0;
            background: #fff;
        }

        .medical-space h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .medical-space-subtitle {
            color: #666;
            margin-bottom: 3rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .service-card {
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .service-card-icon {
            width: 60px;
            height: 60px;
            background: #ff6b35;
            border-radius: 50%;
            margin: 0 auto 1rem;
        }

        .service-card h3 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .service-card p {
            color: #666;
            font-size: 0.9rem;
        }

        /* Doctors Section */
        .doctors {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .doctors h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .doctors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .doctor-card {
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .doctor-avatar {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #ff6b35, #ff8c42);
            border-radius: 50%;
            margin: 0 auto 1rem;
        }

        .doctor-name {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .doctor-specialty {
            color: #666;
            margin-bottom: 1rem;
        }

        .doctor-rating {
            color: #ff6b35;
            font-size: 0.9rem;
        }

        /* Quote Section */
        .quote-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #ff6b35, #ff8c42);
            color: white;
        }

        .quote-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .quote-section h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .quote-text {
            font-size: 1.2rem;
            font-style: italic;
            line-height: 1.8;
        }

        /* Chat Section */
        .chat-section {
            padding: 80px 0;
            background: #fff;
        }

        .chat-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .chat-text h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #333;
        }

        .chat-features {
            list-style: none;
        }

        .chat-feature {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .chat-feature-icon {
            width: 40px;
            height: 40px;
            background: #ff6b35;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .chat-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
            border-radius: 15px;
        }

        /* Footer */
        footer {
            background: #ff6b35;
            color: white;
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }

        .footer-section a:hover {
            color: white;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 1rem;
            border: none;
            border-radius: 5px;
            background: rgba(255,255,255,0.1);
            color: white;
            placeholder-color: rgba(255,255,255,0.6);
        }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder {
            color: rgba(255,255,255,0.6);
        }

        .contact-form button {
            background: white;
            color: #ff6b35;
            padding: 1rem;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
        }

        .contact-form button:hover {
            background: #f0f0f0;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.2);
            color: rgba(255,255,255,0.6);
        }

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 1rem;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .hero-images {
                height: 300px;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .about-images {
                grid-template-columns: 1fr;
                margin-bottom: 2rem;
            }

            .mental-health-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .mental-health-menu {
                position: static;
                order: 1;
            }

            .mental-health-menu ul {
                display: flex;
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            .mental-health-menu li {
                margin-bottom: 0.5rem;
            }

            .mental-health-content {
                order: 2;
            }

            .mental-health-image {
                order: 3;
                position: static;
                height: 200px;
            }

            .chat-content {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .doctors-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .hero {
                padding: 100px 0 60px;
            }

            .hero-text h1 {
                font-size: 1.5rem;
            }

            .about h2,
            .mental-health h2,
            .medical-space h2,
            .doctors h2,
            .quote-section h2,
            .chat-text h2 {
                font-size: 1.8rem;
            }

            .about,
            .mental-health,
            .medical-space,
            .doctors,
            .quote-section,
            .chat-section {
                padding: 60px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <div class="logo">RUANG PULIH</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#edukasi">Edukasi</a></li>
                <li><a href="#ruang-meditasi">Ruang Meditasi</a></li>
                <li><a href="#dokter">Dokter</a></li>
            </ul>
            <a href="#" class="cta-button">Ruang Curhat</a>
            <button class="mobile-menu-toggle">☰</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Tempat Aman untuk Pulih Satu Hari Sekali.</h1>
                    <p>Kami percaya bahwa setiap orang berhak mendapatkan dukungan dan perawatan yang berkualitas untuk kesehatan mental mereka. Bergabunglah dengan komunitas yang memahami dan siap membantu Anda.</p>
                    <a href="#" class="cta-button">Mulai Sekarang</a>
                </div>
                <div class="hero-images">
                    <div class="hero-image"></div>
                    <div class="hero-image"></div>
                    <div class="hero-image"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-images">
                    <div class="about-image">
                        <span>Foto Tim Medis Professional</span>
                    </div>
                    <div class="about-image">
                        <span>Foto Fasilitas Konsultasi</span>
                    </div>
                </div>
                <div class="about-text">
                    <h2>About Us</h2>
                    <p>Kami adalah platform kesehatan mental yang berkomitmen untuk menyediakan layanan yang mudah diakses dan terpercaya.</p>
                    
                    <div class="service-item">
                        <div class="service-icon"></div>
                        <div>
                            <h3>Konsultasi Online</h3>
                            <p>Konsultasi dengan psikolog profesional secara online kapan saja dan di mana saja.</p>
                        </div>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon"></div>
                        <div>
                            <h3>Terhubung dengan Psikolog</h3>
                            <p>Dapatkan akses langsung ke psikolog berpengalaman yang siap membantu Anda.</p>
                        </div>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon"></div>
                        <div>
                            <h3>Ruang Meditasi & Relaksasi</h3>
                            <p>Nikmati sesi meditasi dan relaksasi untuk menjaga kesehatan mental Anda.</p>
                        </div>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon"></div>
                        <div>
                            <h3>Ruang Curhat Anonim</h3>
                            <p>Curhat dengan aman tanpa perlu khawatir tentang identitas Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mental Health Section -->
    <section class="mental-health">
        <div class="container">
            <h2>Apa Saja Bentuk Mental Health?</h2>
            <div class="mental-health-layout">
                <!-- Menu Sidebar -->
                <div class="mental-health-menu">
                    <h3>Jenis Gangguan Mental</h3>
                    <ul>
                        <li><a href="#" class="menu-item active" data-target="kecemasan">Gangguan Kecemasan</a></li>
                        <li><a href="#" class="menu-item" data-target="depresi">Depresi</a></li>
                        <li><a href="#" class="menu-item" data-target="bipolar">Gangguan Bipolar</a></li>
                        <li><a href="#" class="menu-item" data-target="ptsd">PTSD</a></li>
                        <li><a href="#" class="menu-item" data-target="ocd">OCD</a></li>
                        <li><a href="#" class="menu-item" data-target="adhd">ADHD</a></li>
                    </ul>
                </div>
                
                <!-- Content Area -->
                <div class="mental-health-content">
                    <div class="content-section active" id="kecemasan">
                        <h3>Gangguan Kecemasan</h3>
                        <p>Gangguan kecemasan adalah kondisi psikologis yang ditandai dengan perasaan khawatir, gelisah, atau takut yang berlebihan. Kondisi ini dapat mempengaruhi aktivitas sehari-hari dan kualitas hidup seseorang. Beberapa jenis gangguan kecemasan yang umum meliputi gangguan kecemasan umum, gangguan panik, fobia spesifik, dan gangguan kecemasan sosial.</p>
                        
                        <p>Gejala fisik yang sering muncul adalah jantung berdebar, berkeringat, gemetar, sulit bernapas, dan gangguan pencernaan. Sedangkan gejala emosional meliputi perasaan tidak tenang, mudah tersinggung, sulit konsentrasi, dan takut yang tidak realistis.</p>
                        
                        <p>Penanganan gangguan kecemasan dapat dilakukan melalui terapi kognitif perilaku, terapi exposure, teknik relaksasi, dan dalam beberapa kasus, penggunaan obat-obatan anti-kecemasan. Dukungan keluarga dan perubahan gaya hidup juga berperan penting dalam proses pemulihan.</p>
                    </div>
                    
                    <div class="content-section" id="depresi">
                        <h3>Depresi</h3>
                        <p>Depresi adalah gangguan mood yang ditandai dengan perasaan sedih yang mendalam, kehilangan minat terhadap aktivitas yang sebelumnya disukai, dan berbagai gejala fisik serta kognitif yang berlangsung dalam waktu yang lama. Depresi lebih dari sekadar perasaan sedih biasa, tetapi merupakan kondisi medis yang serius.</p>
                        
                        <p>Gejala depresi meliputi perasaan putus asa, kehilangan energi, gangguan tidur, perubahan nafsu makan, kesulitan konsentrasi, perasaan bersalah yang berlebihan, dan dalam kasus yang parah, pikiran untuk menyakiti diri sendiri.</p>
                        
                        <p>Pengobatan depresi dapat melibatkan psikoterapi, penggunaan antidepresan, perubahan gaya hidup, olahraga teratur, dan dukungan sosial. Kombinasi berbagai pendekatan ini seringkali memberikan hasil yang optimal dalam mengatasi depresi.</p>
                    </div>
                    
                    <div class="content-section" id="bipolar">
                        <h3>Gangguan Bipolar</h3>
                        <p>Gangguan bipolar adalah kondisi kesehatan mental yang ditandai dengan perubahan mood yang ekstrem, mulai dari episode manik (mood sangat tinggi) hingga episode depresif (mood sangat rendah). Perubahan mood ini dapat berlangsung selama berminggu-minggu atau berbulan-bulan.</p>
                        
                        <p>Pada episode manik, seseorang mungkin merasa sangat energik, euphoria, berbicara cepat, impulsif, dan memiliki keyakinan yang tidak realistis. Sedangkan pada episode depresif, gejala yang muncul serupa dengan depresi mayor, seperti kesedihan mendalam, kehilangan minat, dan kelelahan.</p>
                        
                        <p>Pengelolaan gangguan bipolar biasanya melibatkan stabilizer mood, psikoterapi, dan perubahan gaya hidup. Penting untuk menjaga rutinitas tidur yang teratur, mengelola stres, dan memiliki sistem dukungan yang kuat untuk mencegah kekambuhan.</p>
                    </div>
                    
                    <div class="content-section" id="ptsd">
                        <h3>PTSD (Post-Traumatic Stress Disorder)</h3>
                        <p>PTSD adalah gangguan yang dapat berkembang setelah seseorang mengalami atau menyaksikan peristiwa traumatis yang mengancam jiwa atau sangat menakutkan. Kondisi ini dapat terjadi setelah peristiwa seperti kecelakaan, bencana alam, kekerasan, atau peperangan.</p>
                        
                        <p>Gejala PTSD meliputi kilas balik (flashbacks), mimpi buruk, menghindari situasi yang mengingatkan pada trauma, perubahan mood dan pikiran negatif, serta gejala fisik seperti sulit tidur, mudah terkejut, dan kewaspadaan berlebihan.</p>
                        
                        <p>Pengobatan PTSD dapat mencakup terapi trauma-focused seperti EMDR (Eye Movement Desensitization and Reprocessing), terapi kognitif perilaku, dan dalam beberapa kasus, penggunaan obat-obatan untuk mengelola gejala kecemasan dan depresi yang menyertai.</p>
                    </div>
                    
                    <div class="content-section" id="ocd">
                        <h3>OCD (Obsessive-Compulsive Disorder)</h3>
                        <p>OCD adalah gangguan yang ditandai dengan adanya obsesi (pikiran, gambaran, atau dorongan yang tidak diinginkan dan berulang) dan kompulsi (perilaku atau tindakan mental yang berulang yang dilakukan untuk mengurangi kecemasan dari obsesi).</p>
                        
                        <p>Contoh obsesi yang umum termasuk takut terhadap kuman, kebutuhan akan simetri, atau pikiran yang tidak pantas. Kompulsi yang sering muncul adalah mencuci tangan berlebihan, mengecek sesuatu berulang kali, menghitung, atau menyusun barang dengan cara tertentu.</p>
                        
                        <p>Pengobatan OCD yang efektif meliputi terapi kognitif perilaku, khususnya Exposure and Response Prevention (ERP), dan penggunaan obat-obatan seperti SSRI (Selective Serotonin Reuptake Inhibitors). Dukungan keluarga dan pemahaman tentang kondisi ini juga sangat penting.</p>
                    </div>
                    
                    <div class="content-section" id="adhd">
                        <h3>ADHD (Attention-Deficit/Hyperactivity Disorder)</h3>
                        <p>ADHD adalah gangguan neurodevelopmental yang ditandai dengan kesulitan mempertahankan perhatian, hiperaktivitas, dan impulsivitas. Kondisi ini biasanya dimulai pada masa kanak-kanak dan dapat berlanjut hingga dewasa.</p>
                        
                        <p>Gejala ADHD meliputi kesulitan fokus dan konsentrasi, mudah terganggu, lupa terhadap tugas-tugas harian, gelisah, sulit duduk diam, berbicara berlebihan, dan kesulitan menunggu giliran. Gejala dapat bervariasi antara individu.</p>
                        
                        <p>Penanganan ADHD dapat mencakup terapi perilaku, penggunaan obat-obatan stimulan atau non-stimulan, modifikasi lingkungan, dan strategi manajemen waktu. Pendekatan multimodal yang melibatkan keluarga, sekolah, dan profesional kesehatan mental seringkali memberikan hasil terbaik.</p>
                    </div>
                </div>
                
                <!-- Image Area -->
                <div class="mental-health-image">
                    <span>Foto Ilustrasi<br>Kesehatan Mental</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Medical Space Section -->
    <section class="medical-space" id="ruang-meditasi">
        <div class="container">
            <h2>Ruang Meditasi</h2>
            <p class="medical-space-subtitle">Temukan Pikiran, Rapatkan Persaaan</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-card-icon"></div>
                    <h3>Audio Meditasi</h3>
                    <p>Dipandu dengan suara lembut dan menenangkan untuk membantu Anda rileks.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-card-icon"></div>
                    <h3>Suara Alam</h3>
                    <p>Dengarkan suara alam yang menenangkan untuk menciptakan suasana damai.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-card-icon"></div>
                    <h3>Video Relaksasi</h3>
                    <p>Video berkonten relaksasi yang dapat membantu mengurangi stres dan kecemasan.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-card-icon"></div>
                    <h3>Pola Pernapasan</h3>
                    <p>Pelajari teknik pernapasan yang tepat untuk mengatur emosi dan pikiran.</p>
                </div>
            </div>
            
            <div style="text-align: center;">
                <a href="#" class="cta-button">Coba Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section class="doctors" id="dokter">
        <div class="container">
            <h2>Dokter Terpercaya Dari Kita Nih</h2>
            <div class="doctors-grid">
                <div class="doctor-card">
                    <div class="doctor-avatar"></div>
                    <div class="doctor-name">Budi Rian Irwan</div>
                    <div class="doctor-specialty">Psikolog Klinis</div>
                    <div class="doctor-rating">⭐⭐⭐⭐⭐</div>
                </div>
                
                <div class="doctor-card">
                    <div class="doctor-avatar"></div>
                    <div class="doctor-name">Budi Rian Irwan</div>
                    <div class="doctor-specialty">Psikolog Klinis</div>
                    <div class="doctor-rating">⭐⭐⭐⭐⭐</div>
                </div>
                
                <div class="doctor-card">
                    <div class="doctor-avatar"></div>
                    <div class="doctor-name">Budi Rian Irwan</div>
                    <div class="doctor-specialty">Psikolog Klinis</div>
                    <div class="doctor-rating">⭐⭐⭐⭐⭐</div>
                </div>
                
                <div class="doctor-card">
                    <div class="doctor-avatar"></div>
                    <div class="doctor-name">Budi Rian Irwan</div>
                    <div class="doctor-specialty">Psikolog Klinis</div>
                    <div class="doctor-rating">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="quote-section">
        <div class="container">
            <div class="quote-content">
                <h2>Quotes Of The Day</h2>
                <p class="quote-text">"Jika kebahagiaan bisa mengubah hidupmu, jadilah bahagia. Jika sedih bisa mengubah dunia, jadilah sedih. Jika marah bisa mengubah semuanya, jadilah marah. Kunci kebahagiaan adalah dapat menerima semuanya dengan lapang dada dan hati yang lapang."</p>
            </div>
        </div>
    </section>

    <!-- Chat Section -->
    <section class="chat-section">
        <div class="container">
            <div class="chat-content">
                <div class="chat-text">
                    <h2>Bercerita Tanpa Nama, Didengar Tanpa Penilaian</h2>
                    <p>Apa kearean kamu merasa buat tempat untuk menceritakan kepada orang lain cerita tentang hidup kamu dengar menceritakan pengalaman yang tidak menyenangkan? Kami menyediakan ruang curhat yang aman dan terprivasi untuk Anda:</p>
                    
                    <ul class="chat-features">
                        <li class="chat-feature">
                            <div class="chat-feature-icon"></div>
                            <div>
                                <h3>Tulis Cerita Anonim</h3>
                                <p>Ungkapkan isi hati Anda secara anonim tanpa perlu khawatir tentang identitas.</p>
                            </div>
                        </li>
                        
                        <li class="chat-feature">
                            <div class="chat-feature-icon"></div>
                            <div>
                                <h3>Baca Cerita Orang Lain</h3>
                                <p>Temukan bahwa Anda tidak sendirian dalam menghadapi masalah hidup.</p>
                            </div>
                        </li>
                        
                        <li class="chat-feature">
                            <div class="chat-feature-icon"></div>
                            <div>
                                <h3>Respons Positif</h3>
                                <p>Berikan dan terima dukungan moral dari komunitas yang peduli.</p>
                            </div>
                        </li>
                    </ul>
                    
                    <a href="#" class="cta-button">Coba Lebih Lanjut</a>
                </div>
                <div class="chat-image"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Tentang Kami untuk Pulih Satu Hari Sekali</h3>
                    <p>Kami berkomitmen untuk menyediakan layanan kesehatan mental yang berkualitas dan mudah diakses untuk semua orang.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Menu</h3>
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#edukasi">Edukasi</a>
                    <a href="#ruang-meditasi">Ruang Meditasi</a>
                    <a href="#dokter">Dokter</a>
                </div>
                
                <div class="footer-section">
                    <h3>Kontak Kami</h3>
                    <p>Email: info@ruangpulih.com</p>
                    <p>Phone: +62 123 456 7890</p>
                    <p>Alamat: Jl. Kesehatan Mental No. 123, Jakarta</p>
                </div>
                
                <div class="footer-section">
                    <h3>Hubungi Kami</h3>
                    <form class="contact-form">
                        <input type="email" placeholder="Email Anda" required>
                        <textarea placeholder="Pesan Anda" rows="4" required></textarea>
                        <button type="submit">Kirim</button>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Ruang Pulih. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mental health menu functionality
        const menuItems = document.querySelectorAll('.menu-item');
        const contentSections = document.querySelectorAll('.content-section');

        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all menu items
                menuItems.forEach(menuItem => menuItem.classList.remove('active'));
                
                // Add active class to clicked item
                this.classList.add('active');
                
                // Hide all content sections
                contentSections.forEach(section => section.classList.remove('active'));
                
                // Show target content section
                const targetId = this.getAttribute('data-target');
                document.getElementById(targetId).classList.add('active');
            });
        });

        // Mobile menu toggle
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        mobileMenuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        // Contact form submission
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah dikirim.');
            this.reset();
        });
    </script>
</body>
</html>