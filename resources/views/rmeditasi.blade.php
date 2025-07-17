<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ruang Meditasi - Ruang Pulih</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #fff;
      color: #333;
      font-size: 16px;
    }

    section {
      padding: 2rem 1rem;
      max-width: 1200px;
      margin: auto;
    }

    .hero {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 2rem;
    }

    .hero-text {
      flex: 1;
    }

    .hero-text h1 {
      font-size: 1.8rem;
      font-weight: 800;
      color: #2d1c12;
      margin-bottom: 1rem;
    }

    .hero-text p {
      font-size: 0.95rem;
      line-height: 1.6;
    }

    .hero-image {
      flex: 1;
      max-width: 300px;
    }

    .section-title {
      text-align: center;
      font-size: 1.2rem;
      font-weight: 700;
      margin-top: 3rem;
      margin-bottom: 1rem;
    }

    .section-underline {
      width: 60px;
      height: 3px;
      background-color: #ff823c;
      margin: 0.5rem auto 2rem;
      border-radius: 4px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      justify-items: center;
    }

    .card {
      background-color: #fff7f0;
      border-radius: 12px;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .card img, .card video {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 0.5rem;
    }

    .card p {
      font-size: 0.9rem;
      margin-top: 0.2rem;
      color: #555;
    }

    audio {
      width: 100%;
      margin-top: 0.5rem;
    }

    .podcast .card {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .btn {
      margin-top: 0.5rem;
      background-color: #ff823c;
      color: white;
      padding: 0.4rem 1rem;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      font-size: 0.85rem;
    }

    blockquote {
      font-size: 0.95rem;
      text-align: center;
      font-weight: 600;
      color: #2d1c12;
      margin: 3rem auto 2rem;
      max-width: 700px;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
        text-align: center;
      }

      .hero-image {
        margin-top: 1rem;
      }
    }
  </style>
</head>
<body>

  <x-header />

  <section class="hero">
    <div class="hero-text">
      <h1>Sediakan waktu sejenak untuk dirimu.</h1>
      <p>
        Dengarkan, rasakan, dan pulihkan pikiranmu di ruang ini.<br>
        Temukan kembali ketenangan lewat suara alam, audio meditasi, dan visual relaksasi yang kami sediakan.
        Tarik napas perlahan, lepaskan beban harimu semua dimulai dari langkah kecil untuk kembali merasa utuh.
      </p>
    </div>
    <img src="img/Meditasi-2 1.png" alt="Meditasi" class="hero-image" />
  </section>

  <section>
  <h2 class="section-title">Pilih Suara yang Menenangkan Pikiranmu</h2>
  <div class="section-underline"></div>
  <div class="grid">
    <div class="card">
      <img src="{{ asset('img/hujan.png') }}" alt="Suara Hujan">
      <p><strong>Suara Hujan</strong> - 2:00</p>
      <audio controls>
        <source src="{{ asset('audio/suara-hujan.mp3') }}" type="audio/mpeg">
        Browser tidak mendukung audio.
      </audio>
    </div>
    <div class="card">
      <img src="{{ asset('img/ombak.png') }}" alt="Suara Ombak">
      <p><strong>Suara Ombak</strong> - 2:00</p>
      <audio controls>
        <source src="{{ asset('audio/suara-ombak.mp3') }}" type="audio/mpeg">
        Browser tidak mendukung audio.
      </audio>
    </div>
    <div class="card">
      <img src="{{ asset('img/daun.png') }}" alt="Suara Dedaunan">
      <p><strong>Suara Dedaunan</strong> - 2:00</p>
      <audio controls>
        <source src="{{ asset('audio/suara-dedaunan.mp3') }}" type="audio/mpeg">
        Browser tidak mendukung audio.
      </audio>
    </div>
  </div>
</section>


  <section>
    <h2 class="section-title">Nikmati Visual yang Menenangkan</h2>
    <div class="section-underline"></div>
    <div class="grid">
      <div class="card">
        <video controls poster="img/v-ombak.png" src="ombak.mp4"></video>
        <p><i>Video Ombak pantai</i> - 2:00</p>
      </div>
      <div class="card">
        <video controls poster="img/v-hujan.png" src="hujan.mp4"></video>
        <p><i>Suara Hujan</i> - 2:00</p>
      </div>
    </div>
  </section>

  <section class="podcast">
    <h2 class="section-title">Podcast tentang ketenangan</h2>
    <div class="section-underline"></div>
    <div class="grid">
      <div class="card">
        <img src="img/p1.png" alt="Buat yang Lagi Stress">
        <p><strong>Buat yang Lagi Stress</strong><br><small>by Realitya Dika</small><br>53:39</p>
        <button class="btn">Tonton</button>
      </div>
      <div class="card">
        <img src="img/p2.png" alt="Bahas Mental Health">
        <p><strong>Bahas mental health</strong><br><small>by by.U</small><br>44:58</p>
        <button class="btn">Tonton</button>
      </div>
      <div class="card">
        <img src="img/p3.png" alt="Hilang arah?">
        <p><strong>Hilang arah?</strong><br><small>by SUARA BERKELAS</small><br>48:50</p>
        <button class="btn">Tonton</button>
      </div>
      <div class="card">
        <img src="img/p4.png" alt="Obat malas genz">
        <p><strong>Obat malas genz</strong><br><small>by Dr. Indrawan N</small><br>38:42</p>
        <button class="btn">Tonton</button>
      </div>
    </div>
  </section>

  <blockquote>
    “Ketenangan bukanlah sebuah tujuan, melainkan sebuah perjalanan indah yang dimulai dari keberanian untuk berhenti sejenak dan menyatu dengan keheningan.”
  </blockquote>

  <script>
  // Dapatkan semua elemen audio dan video
  const mediaElements = document.querySelectorAll("audio, video");

  mediaElements.forEach(media => {
    media.addEventListener("play", () => {
      mediaElements.forEach(el => {
        if (el !== media) {
          el.pause();
        }
      });
    });
  });
</script>

  <x-footer />
</body>
</html>
