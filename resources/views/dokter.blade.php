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
        
    </style>
</head>
<body>

    <x-header />


    <!-- dokter -->
    <section class="doctor-section">
        <div class="container">
            <h2 class="section-title"><center>Dokter Terpercaya Dari Kita Nih</center></h2>

            <div class="doctor-grid">
                <div class="doctor-card">
                    <div class="doctor-photo">
                        <img src="img/doktercewe.jpg" alt="Dokter">
                    </div>
                    <div class="doctor-info">
                        <h4>Dr. Nana</h4>
                        <span>Psikolog Specialist</span>
                        <p>Dokter terkenal di daerah Sidoarjo lulusan Universitas Indonesia</p>
                        <div class="doctor-actions">
                            <button class="btn-contact" onclick="window.open('https://wa.me/message/A7Y2GA4FRMDBD1', '_blank')">Contact Me</button>
                            <div class="icon-btn">f</div>
                            <div class="icon-btn">in</div>
                            <div class="icon-btn">✉</div>
                        </div>
                    </div>
                </div>

                <div class="doctor-card">
                    <div class="doctor-photo">
                        <img src="img/doktercewe.jpg" alt="Dokter">
                    </div>
                    <div class="doctor-info">
                        <h4>Dr. Nabila</h4>
                        <span>Psikolog Specialist</span>
                        <p>Dokter terkenal di daerah Sidoarjo lulusan Universitas Indonesia</p>
                        <div class="doctor-actions">
                            <button class="btn-contact" onclick="window.open('https://wa.me/message/A7Y2GA4FRMDBD1', '_blank')">Contact Me</button>
                            <div class="icon-btn">f</div>
                            <div class="icon-btn">in</div>
                            <div class="icon-btn">✉</div>
                        </div>
                    </div>
                </div>

                <div class="doctor-card">
                    <div class="doctor-photo">
                        <img src="img/doktercowo.jpg" alt="Dokter">
                    </div>
                    <div class="doctor-info">
                        <h4>Dr. Al</h4>
                        <span>Psikolog Specialist</span>
                        <p>Dokter terkenal di daerah Sidoarjo lulusan Universitas Indonesia</p>
                        <div class="doctor-actions">
                            <button class="btn-contact" onclick="window.open('https://wa.me/message/A7Y2GA4FRMDBD1', '_blank')">Contact Me</button>
                            <div class="icon-btn">f</div>
                            <div class="icon-btn">in</div>
                            <div class="icon-btn">✉</div>
                        </div>
                    </div>
                </div>

                <div class="doctor-card">
                    <div class="doctor-photo">
                        <img src="img/doktercowo.jpg" alt="Dokter">
                    </div>
                    <div class="doctor-info">
                        <h4>Dr. Fayyadh</h4>
                        <span>Psikolog Specialist</span>
                        <p>Dokter terkenal di daerah Sidoarjo lulusan Universitas Indonesia</p>
                        <div class="doctor-actions">
                            <button class="btn-contact" onclick="window.open('https://wa.me/message/A7Y2GA4FRMDBD1', '_blank')">Contact Me</button>
                            <div class="icon-btn">f</div>
                            <div class="icon-btn">in</div>
                            <div class="icon-btn">✉</div>
                        </div>
                    </div>
                </div>
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