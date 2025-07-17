<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Pulih</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #FFF8F3;
            color: #333;
            line-height: 1.6;
        }

        /* Hero Section */
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .hero-content p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .hero-image {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
        }

        .hero-illustration {
            width: 400px;
            height: 300px;
            background: linear-gradient(135deg, #FFE4B5, #FFA500);
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }

        .hero-character {
            position: absolute;
            bottom: 0;
            right: 20px;
            width: 200px;
            height: 250px;
            background: linear-gradient(135deg, #8B4513, #A0522D);
            border-radius: 100px 100px 0 0;
        }

        .smiley {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 60px;
            height: 60px;
            background: #4A90E2;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .decorative-elements {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5rem;
            color: #333;
        }

        /* Audio Cards Section */
        .audio-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .section-divider {
            width: 60px;
            height: 3px;
            background-color: #FF6B35;
            margin: 0 auto 3rem;
        }

        .audio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .audio-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .audio-card:hover {
            transform: translateY(-5px);
        }

        .audio-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .audio-info {
            padding: 1.5rem;
        }

        .audio-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .audio-duration {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .audio-controls {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .play-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #FF6B35;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .play-button:hover {
            background-color: #e55a2b;
        }

        .waveform {
            flex: 1;
            height: 20px;
            background: linear-gradient(to right, #FF6B35, #FFA500);
            border-radius: 10px;
            opacity: 0.7;
        }

        /* Video Section */
        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .video-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
        }

        .video-thumbnail {
            position: relative;
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .video-thumbnail.beach {
            background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 200"><rect fill="%2387CEEB" width="400" height="200"/><circle fill="%23FFD700" cx="350" cy="50" r="30"/><polygon fill="%23F4A460" points="0,150 400,150 400,200 0,200"/><rect fill="%23654321" x="50" y="100" width="10" height="50"/><ellipse fill="%23228B22" cx="55" cy="100" rx="20" ry="15"/></svg>');
        }

        .video-thumbnail.forest {
            background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 200"><rect fill="%23228B22" width="400" height="200"/><circle fill="%23008000" cx="100" cy="80" r="30"/><circle fill="%23006400" cx="200" cy="90" r="25"/><circle fill="%2332CD32" cx="300" cy="70" r="35"/></svg>');
        }

        .play-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #FF6B35;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .play-overlay:hover {
            background-color: white;
        }

        .video-info {
            padding: 1.5rem;
        }

        .video-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .video-duration {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .video-description {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Podcast Section */
        .podcast-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .podcast-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .podcast-card:hover {
            transform: translateY(-5px);
        }

        .podcast-thumbnail {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .podcast-thumbnail.discussion {
            background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 200"><rect fill="%23FF6B35" width="400" height="200"/><circle fill="%23FFF" cx="150" cy="100" r="40"/><circle fill="%23FFF" cx="250" cy="100" r="40"/></svg>');
        }

        .podcast-thumbnail.interview {
            background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 200"><rect fill="%234A90E2" width="400" height="200"/><circle fill="%23FFF" cx="200" cy="100" r="50"/></svg>');
        }

        .podcast-duration {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: rgba(0,0,0,0.7);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
        }

        .podcast-info {
            padding: 1.5rem;
        }

        .podcast-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .podcast-author {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .listen-button {
            background-color: #FF6B35;
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .listen-button:hover {
            background-color: #e55a2b;
        }

        /* Quote Section */
        .quote-section {
            max-width: 800px;
            margin: 0 auto;
            padding: 3rem 2rem;
            text-align: center;
        }

        .quote-text {
            font-size: 1.3rem;
            font-style: italic;
            color: #333;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-illustration {
                width: 300px;
                height: 200px;
            }

            .audio-grid,
            .video-grid,
            .podcast-grid {
                grid-template-columns: 1fr;
            }

            .video-grid {
                grid-template-columns: 1fr;
            }

            .video-card {
                min-width: auto;
            }
        }

        @media (max-width: 480px) {
            .nav-container {
                padding: 0 1rem;
            }

            .hero {
                padding: 2rem 1rem;
            }

            .audio-section {
                padding: 2rem 1rem;
            }

            .hero-content h1 {
                font-size: 1.8rem;
            }

            .hero-illustration {
                width: 280px;
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <x-header />

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Sediakan waktu sejenak untuk dirimu.</h1>
            <p>Dengarkan, rasakan, dan nikmatilah pilihan media yang tersedia. Temukan kembali ketenangan lewat suara alam, audio meditasi, dan visual relaksasi yang dapat menenangkan pikiran untuk memberi waktu istirahat bagi tubuh dan jiwa.</p>
        </div>
        <div class="hero-image">
            <div class="hero-illustration">
                <div class="smiley">😊</div>
                <div class="decorative-elements">✦ ✧</div>
                <div class="hero-character"></div>
            </div>
        </div>
    </section>

    <!-- Audio Section -->
    <section class="audio-section">
        <div class="section-divider"></div>
        
        <div class="audio-grid">
            <div class="audio-card">
                <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect fill='%23D3D3D3' width='400' height='200'/><circle fill='%23808080' cx='200' cy='100' r='60'/><text x='200' y='160' text-anchor='middle' fill='%23333' font-size='16'>Suara Hujan</text></svg>" alt="Suara Hujan">
                <div class="audio-info">
                    <div class="audio-title">Suara Hujan</div>
                    <div class="audio-duration">2:00</div>
                    <div class="audio-controls">
                        <button class="play-button">▶</button>
                        <div class="waveform"></div>
                    </div>
                </div>
            </div>

            <div class="audio-card">
                <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect fill='%2387CEEB' width='400' height='200'/><circle fill='%23FFD700' cx='350' cy='50' r='30'/><path fill='%23FFF' d='M50,100 Q100,80 150,100 T250,100 T350,100' stroke='%23FFF' stroke-width='3'/><text x='200' y='160' text-anchor='middle' fill='%23333' font-size='16'>Suara Ombak</text></svg>" alt="Suara Ombak">
                <div class="audio-info">
                    <div class="audio-title">Suara Ombak</div>
                    <div class="audio-duration">2:00</div>
                    <div class="audio-controls">
                        <button class="play-button">▶</button>
                        <div class="waveform"></div>
                    </div>
                </div>
            </div>

            <div class="audio-card">
                <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect fill='%23DEB887' width='400' height='200'/><circle fill='%23228B22' cx='100' cy='80' r='30'/><circle fill='%23008000' cx='200' cy='90' r='25'/><circle fill='%2332CD32' cx='300' cy='70' r='35'/><text x='200' y='160' text-anchor='middle' fill='%23333' font-size='16'>Suara Dedaunan</text></svg>" alt="Suara Dedaunan">
                <div class="audio-info">
                    <div class="audio-title">Suara Dedaunan</div>
                    <div class="audio-duration">2:00</div>
                    <div class="audio-controls">
                        <button class="play-button">▶</button>
                        <div class="waveform"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-divider"></div>

        <!-- Video Section -->
        <div class="video-grid">
            <div class="video-card">
                <div class="video-thumbnail beach">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <div class="video-title">Video Ombak pantai</div>
                    <div class="video-duration">2:00</div>
                    <div class="video-description">Nikmati visual untuk lepas pantai yang menenangkan untuk melakukan rileks dan memperbaiki pikiran.</div>
                </div>
            </div>

            <div class="video-card">
                <div class="video-thumbnail forest">
                    <div class="play-overlay">▶</div>
                </div>
                <div class="video-info">
                    <div class="video-title">Suara Hujan</div>
                    <div class="video-duration">2:00</div>
                    <div class="video-description">Nikmati visual hujan dan dedaunan yang menenangkan untuk menenangkan stress dan memulihkan pikiran.</div>
                </div>
            </div>
        </div>

        <div class="section-divider"></div>

        <!-- Podcast Section -->
        <div class="podcast-grid">
            <div class="podcast-card">
                <div class="podcast-thumbnail discussion">
                    <div class="podcast-duration">53 - 38</div>
                </div>
                <div class="podcast-info">
                    <div class="podcast-title">Ruak yang lagi stres</div>
                    <div class="podcast-author">By Andilyna Gilea</div>
                    <button class="listen-button">Dengar</button>
                </div>
            </div>

            <div class="podcast-card">
                <div class="podcast-thumbnail interview">
                    <div class="podcast-duration">44 - 58</div>
                </div>
                <div class="podcast-info">
                    <div class="podcast-title">Bahasa mental health</div>
                    <div class="podcast-author">By Ayu U</div>
                    <button class="listen-button">Dengar</button>
                </div>
            </div>

            <div class="podcast-card">
                <div class="podcast-thumbnail discussion">
                    <div class="podcast-duration">48 - 50</div>
                </div>
                <div class="podcast-info">
                    <div class="podcast-title">Hilang arah?</div>
                    <div class="podcast-author">By SUARA BENGKULU</div>
                    <button class="listen-button">Dengar</button>
                </div>
            </div>

            <div class="podcast-card">
                <div class="podcast-thumbnail interview">
                    <div class="podcast-duration">38 - 42</div>
                </div>
                <div class="podcast-info">
                    <div class="podcast-title">Obat masih genet</div>
                    <div class="podcast-author">By Dr. Indrawati N</div>
                    <button class="listen-button">Dengar</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="quote-section">
        <div class="quote-text">
            "Ketenangan bukanlah sebuah tujuan, melainkan sebuah perjalanan indah yang dimulai dari keberanian untuk berhenti sejenak dan menyatu dengan keheningan."
        </div>
    </section>

    <x-footer />

    <script>
        // Add interactive functionality
        document.querySelectorAll('.play-button').forEach(button => {
            button.addEventListener('click', function() {
                if (this.textContent === '▶') {
                    this.textContent = '⏸';
                    this.style.backgroundColor = '#e55a2b';
                } else {
                    this.textContent = '▶';
                    this.style.backgroundColor = '#FF6B35';
                }
            });
        });

        document.querySelectorAll('.play-overlay').forEach(overlay => {
            overlay.addEventListener('click', function() {
                alert('Video akan dimulai...');
            });
        });

        document.querySelectorAll('.listen-button').forEach(button => {
            button.addEventListener('click', function() {
                alert('Memulai podcast...');
            });
        });
    </script>
</body>
</html>