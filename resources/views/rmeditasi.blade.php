<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ruang Meditasi - Ruang Pulih</title>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #FFF8F3;
      color: #2B190F;
    }

    .hero-title {
  font-family: 'Positive Forward', cursive;
  font-size: 36px;
  font-weight: bold;
  color: #2B190F;
  margin: 0 0 20px 0;
  line-height: 1.4;
}

.hero-text p {
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  line-height: 1.8;
  color: #3B3B3B;
  margin: 0;
}

.hero-img img {
  max-width: 100%;
  height: auto;
  display: block;
  position: relative;
}


    .section-divider {
      width: 60px;
      height: 3px;
      background-color: #FF6B35;
      margin: 3rem auto;
    }

    .audio-grid, .video-grid, .podcast-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto 3rem;
      padding: 0 2rem;
    }

    .audio-card, .video-card, .podcast-card {
      background: white;
      border-radius: 16px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .audio-card img, .video-card img {
      width: 100%;
      height: auto;
    }

    .audio-info, .video-info, .podcast-info {
      padding: 1rem 1.5rem;
    }

    .audio-title {
      font-style: italic;
      font-size: 14px;
      margin-bottom: 0.5rem;
    }

    .audio-duration {
      font-size: 12px;
      float: right;
    }

    .audio-controls {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-top: 0.5rem;
    }

    .play-button {
      width: 28px;
      height: 28px;
      background: #FF6B35;
      color: white;
      border: none;
      border-radius: 50%;
      font-size: 16px;
    }

    .waveform {
      flex: 1;
      height: 12px;
      background: linear-gradient(to right, #FF6B35, #FFA500);
      border-radius: 6px;
    }

    .video-thumbnail {
      position: relative;
    }

    .play-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50px;
      height: 50px;
      background: rgba(255,255,255,0.8);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      color: #FF6B35;
    }

    .video-title, .podcast-title {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 0.3rem;
    }

    .video-description, .podcast-author {
      font-size: 12px;
      color: #666;
    }

    .video-duration, .podcast-duration {
      font-size: 12px;
      float: right;
      color: #666;
    }

    .listen-button {
      display: inline-block;
      background: #FF6B35;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 13px;
      margin-top: 10px;
      cursor: pointer;
    }

    .quote-section {
      max-width: 800px;
      margin: 0 auto 3rem;
      padding: 0 2rem;
      text-align: center;
    }

    .quote-section p {
      font-family: 'Fredoka', sans-serif;
      font-weight: 600;
      font-size: 16px;
      line-height: 1.8;
      color: #2B190F;
    }
  </style>
</head>
<body>
  <x-header />

  <section class="hero">
  <div class="container hero-content">
    <div class="hero-text">
      <h1 class="hero-title">Sediakan waktu sejenak<br>untuk dirimu.</h1>
      <p>
        Dengarkan, rasakan, dan pulihkan pikiranmu di ruang ini. Temukan kembali ketenangan lewat suara alam, audio meditasi, dan visual relaksasi yang kami sediakan. Tarik napas perlahan, lepaskan beban harimu semua dimulai dari langkah kecil untuk kembali merasa utuh.
      </p>
    </div>
    <div class="hero-img" style="position: relative;">
      <img src="img/Meditasi-2-1.png" alt="Meditasi" style="max-width: 400px; border-radius: 12px;" />
    </div>
  </div>
</section>


  <div class="section-divider"></div>

  <div class="audio-grid">
    <div class="audio-card">
      <img src="img/hujan.png" alt="Suara Hujan">
      <div class="audio-info">
        <div class="audio-title">Suara Hujan <span class="audio-duration">2:00</span></div>
        <div class="audio-controls">
          <button class="play-button">▶</button>
          <div class="waveform"></div>
        </div>
      </div>
    </div>
    <div class="audio-card">
      <img src="img/ombak.png" alt="Suara Ombak">
      <div class="audio-info">
        <div class="audio-title">Suara Ombak <span class="audio-duration">2:00</span></div>
        <div class="audio-controls">
          <button class="play-button">▶</button>
          <div class="waveform"></div>
        </div>
      </div>
    </div>
    <div class="audio-card">
      <img src="img/daun.png" alt="Suara Dedaunan">
      <div class="audio-info">
        <div class="audio-title">Suara Dedaunan <span class="audio-duration">2:00</span></div>
        <div class="audio-controls">
          <button class="play-button">▶</button>
          <div class="waveform"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="section-divider"></div>

  <div class="video-grid">
    <div class="video-card">
      <div class="video-thumbnail">
        <img src="img/v-ombak.png" alt="Video Ombak">
        <div class="play-overlay">▶</div>
      </div>
      <div class="video-info">
        <div class="video-title">Video Ombak pantai <span class="video-duration">2:00</span></div>
        <div class="video-description">Nikmati visual ombak di tepi pantai yang menenangkan untuk meredakan stres dan memulihkan pikiranmu.</div>
      </div>
    </div>
    <div class="video-card">
      <div class="video-thumbnail">
        <img src="img/v-hujan.png" alt="Video Hujan">
        <div class="play-overlay">▶</div>
      </div>
      <div class="video-info">
        <div class="video-title">Suara Hujan <span class="video-duration">2:00</span></div>
        <div class="video-description">Nikmati visual hujan dan dedaunan yang menenangkan untuk meredakan stres dan memulihkan pikiranmu.</div>
      </div>
    </div>
  </div>

  <div class="section-divider"></div>

  <div class="podcast-grid">
    <div class="podcast-card">
      <img src="img/p1.png" alt="Podcast 1">
      <div class="podcast-info">
        <div class="podcast-title">Buat yang lagi stres <span class="podcast-duration">53:39</span></div>
        <div class="podcast-author">By Realitya Dika</div>
        <button class="listen-button">Tonton</button>
      </div>
    </div>
    <div class="podcast-card">
      <img src="img/p2.png" alt="Podcast 2">
      <div class="podcast-info">
        <div class="podcast-title">Bahas mental health <span class="podcast-duration">44:58</span></div>
        <div class="podcast-author">By by.U</div>
        <button class="listen-button">Tonton</button>
      </div>
    </div>
    <div class="podcast-card">
      <img src="img/p3.png" alt="Podcast 3">
      <div class="podcast-info">
        <div class="podcast-title">Hilang arah? <span class="podcast-duration">48:50</span></div>
        <div class="podcast-author">By SUARA BERKELAS</div>
        <button class="listen-button">Tonton</button>
      </div>
    </div>
    <div class="podcast-card">
      <img src="img/p4.png" alt="Podcast 4">
      <div class="podcast-info">
        <div class="podcast-title">Obat malas genZ <span class="podcast-duration">38:42</span></div>
        <div class="podcast-author">By Dr. Indrawan N</div>
        <button class="listen-button">Tonton</button>
      </div>
    </div>
  </div>

  <section class="quote-section">
    <p>"Ketenangan bukanlah sebuah tujuan, melainkan sebuah perjalanan indah yang dimulai dari keberanian untuk berhenti sejenak dan menyatu dengan keheningan."</p>
  </section>

  <x-footer />
</body>
</html>
