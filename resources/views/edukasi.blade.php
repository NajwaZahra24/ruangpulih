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

    </style>
</head>
<body>

    <x-header />

    <!-- edukasi -->
    <section class="mental-health">
        <div class="container">
            <h2 class="section-title">Apa Saja Bentuk Mental Health?</h2>
            <p class="subtitle">Bentuk Mental Health terdapat 7 Jenis</p>

            <div class="mental-wrapper">
                <aside class="mental-menu">
                    <ul>
                        <li class="active" data-type="anxiety">Gangguan Kecemasan</li>
                        <li data-type="depression">Depresi</li>
                        <li data-type="bipolar">Gangguan Bipolar</li>
                        <li data-type="schizo">Skizofrenia</li>
                        <li data-type="ocd">OCD</li>
                        <li data-type="ptsd">PTSD</li>
                        <li data-type="personality">Gangguan Kepribadian</li>
                    </ul>
                </aside>

                <div class="divider"></div>

                <div class="mental-content" id="mentalContent">
                    <h3>Gangguan Kecemasan</h3>
                    <p>Gangguan kecemasan adalah kondisi ketika seseorang merasa khawatir atau takut berlebihan terhadap berbagai situasi, bahkan tanpa alasan yang jelas. Perasaan ini sering muncul secara terus–menerus hingga mengganggu aktivitas sehari–hari. Penyebabnya bisa berasal dari faktor genetik, ketidakseimbangan zat kimia di otak seperti serotonin, serta pengalaman traumatis atau stres berkepanjangan.</p>
                    <p>Gejala umum yang dirasakan meliputi rasa gelisah, sulit fokus, tegang pada otot, gangguan tidur, jantung berdebar, keringat berlebih, dan rasa takut yang tidak rasional.</p>
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