<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ruang Pulih Full Page</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
        :root {
            --primary-orange: #FF8C42;
            --text-dark: #333;
            --font-heading: 'Poppins', sans-serif;
            --container-max-width: 1200px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-heading);
            color: var(--text-dark);
            background-color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            max-width: var(--container-max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ======= HOME (HERO) ======= */
        @font-face {
            font-family: 'Positive Forward';
            src: url('fonts/PositiveForward.woff2') format('woff2'),
                 url('fonts/PositiveForward.woff') format('woff');
        }

        .hero {
            padding: 40px 0;
        }

        .hero-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .hero-text {
            max-width: 520px;
        }

        .hero-title, .hero-subtitle {
            font-family: 'Positive Forward', cursive;
            font-size: 42px;
            font-weight: bold;
            color: #2B190F;
            line-height: 1.3;
        }

        .hero-subtitle {
            margin-bottom: 25px;
        }

        .hero-text p {
            font-size: 17px;
            line-height: 1.8;
            color: #3B3B3B;
        }

        .hero-img img {
            max-width: 520px;
            height: auto;
        }

        @media (max-width: 768px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .hero-text, .hero-img {
                max-width: 100%;
                text-align: center;
            }
        }

        /* ======= ABOUT US ======= */
        section {
            padding: 40px 20px;
        }

        .grid-2 {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: flex-start;
        }

        .about-img {
            flex: 1 1 300px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .about-img img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
        }

        .about-text {
            flex: 1 1 300px;
        }

        .about-text h2 {
            color: #332C1C;
            font-size: 26px;
            margin-bottom: 16px;
        }

        .about-text p {
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 28px;
        }

        .features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .features li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 20px;
        }

        .features img {
            width: 45px;
            height: 45px;
            flex-shrink: 0;
        }

        .features li b {
            font-weight: 600;
            display: block;
            margin-bottom: 4px;
            color: #1e1e1e;
        }

        .features li small {
            font-size: 16px;
            line-height: 1.5;
            color: #444;
        }

        /* ======= EDUKASI ======= */
        .mental-health {
            padding: 60px 20px;
            background-color: #fff; /* Pastikan konsisten dengan body background jika perlu */
        }

        .section-title {
            font-size: 28px;
            font-weight: 700;
            color: #222;
            margin-bottom: 8px;
            text-align: center;
        }

        .subtitle {
            font-size: 16px;
            text-align: center;
            color: #666;
            position: relative;
            margin: 0 auto 40px;
        }

        .subtitle::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background-color: #ff671f;
            margin: 8px auto 0;
            border-radius: 2px;
        }

        .mental-wrapper {
            display: flex;
            align-items: flex-start;
        }

        .mental-menu {
            flex: 1;
            min-width: 200px;
        }

        .mental-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mental-menu li {
            padding: 14px 18px;
            cursor: pointer;
            font-weight: 500;
            color: #333;
            transition: all 0.3s ease;
            border-radius: 0 4px 4px 0;
        }

        .mental-menu li.active {
            background-color: #fff0e6;
            color: #ff671f;
            font-weight: 600;
        }

        .divider {
            width: 3px;
            background-color: #ff671f;
            border-radius: 2px;
            margin: 0 25px;
            height: 100%; /* Disesuaikan agar bisa mengisi tinggi konten */
        }

        .mental-content {
            flex: 3;
            min-width: 300px;
        }

        .mental-content h3 {
            font-size: 22px;
            color: #ff671f;
            margin-bottom: 16px;
        }

        .mental-content p {
            margin-bottom: 16px;
            line-height: 1.7;
            color: #333;
            text-align: justify;
        }

        @media (max-width: 768px) {
            .mental-wrapper {
                flex-direction: column;
            }
            .divider {
                display: none;
            }
        }

        /* ======= RUANG MEDITASI ======= */
        .meditasi-section {
            padding: 40px 20px;
            background-color: #fff6f1;
        }

        .meditasi-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            gap: 40px;
            flex-wrap: wrap;
        }

        .meditasi-text {
            flex: 1;
            min-width: 320px;
        }

        .meditasi-section .judul { /* Specificity for this section */
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .meditasi-section .subjudul { /* Specificity for this section */
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .paragraf-bergaris {
            border-left: 4px solid #f27c2a;
            padding-left: 12px;
            margin-bottom: 16px;
            color: #333;
            line-height: 1.6;
        }

        .penekanan {
            font-weight: 600;
            margin-bottom: 24px;
        }

        .fitur-list {
            list-style: none;
            padding: 0;
            margin-bottom: 32px;
        }

        .fitur-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 14px;
            font-size: 15px;
            line-height: 1.4;
        }

        .fitur-list img {
            width: 20px;
            height: 20px;
            margin-top: 3px;
        }

        .cta-wrapper {
            display: flex;
            margin-top: 30px;
        }

        .cta-button {
            background-color: #f27c2a;
            color: white;
            font-weight: 600;
            padding: 14px 28px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none; 
            display: inline-block; 
        }

        .cta-button:hover {
            background-color: #e56c1a;
        }

        .meditasi-image {
            flex: 1;
            min-width: 280px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 4px;
        }

        .meditasi-image img {
            max-width: 80%; /* mengecilkan ukuran gambar */
            height: auto;
        }

        /* ======= DOKTER ======= */
        .doctor-section .container { /* Added .doctor-section for specificity */
            padding: 60px 20px;
            background-color: #fffaf7; /* Matches original body bg */
        }

        .doctor-section .section-title::after { /* Specificity for this section */
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #FF8C4B;
            margin: 12px auto 40px;
            border-radius: 2px;
        }

        .doctor-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .doctor-card {
            background-color: #ffe8d9;
            border-radius: 16px;
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.25s;
        }

        .doctor-card:hover {
            transform: translateY(-4px);
        }

        .doctor-photo {
            flex-shrink: 0;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #fff;
            box-shadow: 0 0 0 3px #FF8C4B;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .doctor-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .doctor-info {
            flex: 1;
        }

        .doctor-info h4 {
            font-size: 20px;
            font-weight: 600;
            color: #222;
            margin-bottom: 4px;
        }

        .doctor-info span {
            font-size: 15px;
            font-weight: 500;
            color: #555;
        }

        .doctor-info p {
            font-size: 14px;
            margin: 12px 0 16px;
            color: #444;
            line-height: 1.6;
        }

        .doctor-actions {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .btn-contact {
            background-color: #FF8C4B;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 8px 14px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-contact:hover {
            background-color: #ff671f;
        }

        .icon-btn {
            width: 30px;
            height: 30px;
            background-color: #fff;
            color: #FF8C4B;
            border: 1.5px solid #FF8C4B;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .icon-btn:hover {
            background-color: #FF8C4B;
            color: #fff;
        }

        @media (max-width: 768px) {
            .doctor-grid {
                grid-template-columns: 1fr;
            }
            .doctor-card {
                flex-direction: column;
                text-align: center;
            }
            .doctor-actions {
                justify-content: center;
            }
        }

        /* ======= QUOTES ======= */
        .quotes-section {
            padding: 60px 20px;
            background-color: #fff;
            }

            .quotes-container {
            max-width: 1200px;
            margin: 0 auto;
            }

            .quotes-title {
            font-size: 24px;
            font-weight: 700;
            color: #222;
            margin-bottom: 25px;
            }

            .quotes-flex {
            display: flex;
            gap: 50px;
            align-items: flex-start;
            justify-content: space-between;
            flex-wrap: wrap;
            }

            .quotes-left {
            flex: 1;
            min-width: 280px;
            max-width: 500px;
            }

            .quotes-paragraph {
            position: relative;
            padding-left: 16px;
            color: #444;
            line-height: 1.8;
            font-size: 16px;
            }

            .quotes-paragraph::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background-color: #ff671f;
            border-radius: 3px;
            }

            .quotes-right {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            min-width: 280px;
            position: relative;
            }

            .quotes-box {
            width: 100%;
            max-width: 560px;
            background-color: #fff7f0;
            border-radius: 12px;
            padding: 30px;
            padding-bottom: 60px; /* beri ruang untuk dots */
            box-shadow: 0 6px 18px rgba(0,0,0,0.05);
            text-align: center;
            font-style: italic;
            font-size: 16px;
            line-height: 1.7;
            color: #444;
            position: relative;
            min-height: 120px;
            box-sizing: border-box;
            }

            .quotes-box::before {
            content: "❝";
            color: #ff671f;
            font-size: 24px;
            position: absolute;
            top: 20px;
            left: 20px;
            }

            .quotes-box::after {
            content: "❞";
            color: #ff671f;
            font-size: 24px;
            position: absolute;
            bottom: 55px;
            right: 20px;
            }

            .dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            }

            .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #ffbe9f;
            opacity: 0.6;
            transition: opacity 0.3s;
            }

            .dot.active {
            opacity: 1;
            background-color: #ff671f;
            }

            @media (max-width: 768px) {
            .quotes-flex {
                flex-direction: column;
            }

            .quotes-right {
                align-items: flex-start;
            }

            .quotes-box {
                padding: 25px;
                padding-bottom: 55px;
            }

            .quotes-box::after {
                bottom: 50px;
            }
            }

        /* ======= RUANG CURHAT ======= */
        .curhat-section {
            padding: 60px 20px;
            background-color: #fff3ec;
        }

        .curhat-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
        }

        /* LEFT CONTENT */
        .curhat-content {
            flex: 1;
            min-width: 300px;
        }

        .curhat-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #222;
        }

        .curhat-subtitle {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #333;
        }

        .curhat-paragraph {
            position: relative;
            padding-left: 15px;
            margin-bottom: 20px;
            line-height: 1.8;
            color: #444;
        }

        .curhat-paragraph::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 3px;
            background-color: #ff671f;
            border-radius: 2px;
        }

        .curhat-highlight {
            font-weight: 600;
            color: #000;
        }

        .curhat-list-title {
            font-size: 20px;
            font-weight: 600;
            margin: 30px 0 20px 0;
        }

        .curhat-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .curhat-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.6;
        }

        .curhat-list li img {
            width: 24px;
            height: 24px;
            margin-right: 12px;
            margin-top: 4px;
        }

        .curhat-button {
            display: inline-block;
            margin-top: 30px;
            padding: 14px 28px;
            background-color: #ff671f;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .curhat-button:hover {
            background-color: #e85c16;
        }

        /* RIGHT IMAGE */
        .curhat-image {
            flex: 1;
            min-width: 280px;
            display: flex;
            justify-content: center;
        }

        .curhat-image img {
            max-width: 100%;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .curhat-container {
                flex-direction: column;
                text-align: left;
            }
            .curhat-image {
                order: -1; /* gambar di atas pada layar kecil */
            }
        }
    </style>
</head>
<body>

    <x-header />

    <!-- about us -->
    <section id="about" class="about">
        <div class="container grid-2">
            <div class="about-img">
                <img src="img/Oren 2.png" alt="About Image Atas" />
                <img src="img/Biru 2.png" alt="About Image Bawah" />
            </div>
            <div class="about-text">
                <h2>About Us</h2>
                <p>Rumah Pulih adalah ruang aman dan nyaman untuk semua orang yang ingin memahami, menyembuhkan, dan memperbaiki kesehatan mentalnya. Kami hadir sebagai teman seperjalanan, mendengarkan tanpa menghakimi, dan membantu kamu melewati hari-hari sulit dengan lebih tenang.</p>
                <ul class="features">
                    <li><img src="img/edukasi.png" alt=""><span><b>Edukasi Mental Health</b><small>Artikel dan info seputar stres, emosi, self-love, dan lainnya.</small></span></li>
                    <li><img src="img/Vector.png" alt=""><span><b>Terhubung dengan Psikolog</b><small>Layanan perantara menuju psikolog terpercaya, mudah & aman.</small></span></li>
                    <li><img src="img/meditasi.png" alt=""><span><b>Ruang Meditasi & Relaksasi</b><small>Audio dan video untuk menenangkan pikiran dan meredakan cemas.</small></span></li>
                    <li><img src="img/curhat.png" alt=""><span><b>Ruang Curhat Anonim</b><small>Tulis isi hatimu tanpa nama, tanpa penilaian—cukup didengar.</small></span></li>
                </ul>
            </div>
        </div>
    </section>



    <x-footer />

    <script>
        // ===== Quotes Script =====
        const quotes = [
            "Jangan pernah merasa sendiri, karena hidupmu istimewa untuk mereka yang saat ini telah tiada.",
            "Saat hati lelah, diamlah sejenak. Dalam sunyi, kamu akan menemukan tenang yang tak bisa diberikan dunia.",
            "Telat kusadar Hidup bukanlah Perihal mengambil yang kau tebar."
        ];

        let current = 0;
        const quoteBox = document.getElementById("quoteBox");
        const dots = document.querySelectorAll(".dot");

        function showQuote(index) {
            quoteBox.style.opacity = 0;
            setTimeout(() => {
            quoteBox.innerHTML = quotes[index];
            dots.forEach((dot, i) => dot.classList.toggle("active", i === index));
            quoteBox.style.opacity = 1;
            }, 300);
        }

        setInterval(() => {
            current = (current + 1) % quotes.length;
            showQuote(current);
        }, 5000);

        // ===== Mental Health Section Script =====
        const mentalData = {
            anxiety: {
            title: "Gangguan Kecemasan",
            content: [
                "Gangguan kecemasan adalah kondisi ketika seseorang merasa khawatir atau takut berlebihan terhadap berbagai situasi, bahkan tanpa alasan yang jelas. Perasaan ini sering muncul secara terus–menerus hingga mengganggu aktivitas sehari–hari. Penyebabnya bisa berasal dari faktor genetik, ketidakseimbangan zat kimia di otak seperti serotonin, serta pengalaman traumatis atau stres berkepanjangan.",
                "Gejala umum yang dirasakan meliputi rasa gelisah, sulit fokus, tegang pada otot, gangguan tidur, jantung berdebar, keringat berlebih, dan rasa takut yang tidak rasional."
            ]
            },
            depression: {
            title: "Depresi",
            content: [
                "Depresi adalah gangguan suasana hati yang ditandai dengan perasaan sedih berkepanjangan.",
                "Penderita kehilangan minat terhadap aktivitas sehari-hari, merasa tidak berharga, dan bisa memiliki pikiran untuk menyakiti diri.",
                "Butuh penanganan psikolog atau psikiater untuk pemulihan."
            ]
            },
            bipolar: {
            title: "Gangguan Bipolar",
            content: [
                "Gangguan bipolar ditandai oleh perubahan suasana hati yang ekstrem antara mania dan depresi.",
                "Seseorang bisa merasa sangat bersemangat dan produktif, lalu berubah menjadi sangat sedih dan lesu.",
                "Perlu pengobatan jangka panjang dan konseling."
            ]
            },
            schizo: {
            title: "Skizofrenia",
            content: [
                "Skizofrenia menyebabkan gangguan dalam cara berpikir, merasakan, dan berperilaku.",
                "Gejala meliputi halusinasi, delusi, dan kesulitan membedakan kenyataan.",
                "Dukungan keluarga dan terapi rutin sangat penting."
            ]
            },
            ocd: {
            title: "Obsessive Compulsive Disorder (OCD)",
            content: [
                "OCD adalah gangguan mental dengan pikiran obsesif yang menyebabkan perilaku kompulsif.",
                "Contohnya mencuci tangan berulang karena takut kuman meski sudah bersih.",
                "Terapi perilaku kognitif sangat efektif untuk penanganannya."
            ]
            },
            ptsd: {
            title: "Post-Traumatic Stress Disorder (PTSD)",
            content: [
                "PTSD terjadi setelah mengalami peristiwa traumatis seperti kecelakaan, bencana, atau kekerasan.",
                "Gejala bisa berupa mimpi buruk, kilas balik, dan rasa takut yang terus-menerus.",
                "Butuh penanganan dengan psikolog trauma."
            ]
            },
            personality: {
            title: "Gangguan Kepribadian",
            content: [
                "Gangguan kepribadian adalah pola pikir dan perilaku jangka panjang yang kaku dan tidak sehat.",
                "Contohnya: paranoid, antisosial, atau borderline.",
                "Membutuhkan terapi jangka panjang dan pemahaman diri."
            ]
            }
        };

        const menuItems = document.querySelectorAll(".mental-menu li");
        const contentDiv = document.getElementById("mentalContent");

        menuItems.forEach(item => {
            item.addEventListener("click", () => {
            document.querySelector(".mental-menu li.active")?.classList.remove("active");
            item.classList.add("active");

            const type = item.getAttribute("data-type");
            const data = mentalData[type];

            contentDiv.innerHTML = `
                <h3>${data.title}</h3>
                ${data.content.map(p => `<p>${p}</p>`).join("")}
            `;
            });
        });

        // ===== Navbar Mobile Toggle =====
        document.addEventListener('DOMContentLoaded', function () {
            const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
            const mainNav = document.querySelector('.main-nav');

            if (mobileNavToggle && mainNav) {
            mobileNavToggle.addEventListener('click', function () {
                mainNav.classList.toggle('active');
            });
            }
        });
    </script>


</body>
</html>