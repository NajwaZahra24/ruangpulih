<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ruang Meditasi - Ruang Pulih</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Positive+Forward&display=swap" rel="stylesheet" />

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
      font-family: 'Positive Forward', cursive;
      font-size: 42px;
      font-weight: bold;
      color: #2B190F;
      line-height: 1.3;
    }

    .hero-subtitel {
      margin-bottom: 25px;
    }

    .hero-text p {
      font-size: 0.95rem;
      line-height: 1.6;
    }

    .hero-image {
      flex: 1;
      max-width: 450px;
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

    .horizontal-scroll {
      display: flex;
      overflow-x: auto;
      gap: 1.5rem;
      padding: 1rem 0;
      scrollbar-width: thin;
      scrollbar-color: #ff823c #fff7f0;
    }

    .horizontal-scroll::-webkit-scrollbar {
      height: 8px;
    }

    .horizontal-scroll::-webkit-scrollbar-track {
      background: #fff7f0;
      border-radius: 10px;
    }

    .horizontal-scroll::-webkit-scrollbar-thumb {
      background-color: #ff823c;
      border-radius: 10px;
    }

    .card {
      background-color: #fff7f0;
      border-radius: 12px;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      min-width: 250px;
      flex-shrink: 0;
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

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      justify-items: center;
    }

    .podcast .grid {
      grid-template-columns: repeat(2, 1fr);
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

    .btn a {
      color: white;
      text-decoration: none;
    }

    blockquote {
      font-family: 'Poppins', cursive;
      font-size: 18px;
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

      .podcast .grid {
        grid-template-columns: 1fr;
      }

      .horizontal-scroll {
        padding-bottom: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <x-header />

  <section class="hero">
    <div class="hero-text">
      <h1 class="hero-text">Sediakan waktu sejenak</h1>
      <h1 class=hero-subtitle>untuk dirimu.</h1><br>
      <p>
        Dengarkan, rasakan, dan pulihkan pikiranmu di ruang ini.<br>
        Temukan kembali ketenangan lewat suara alam, audio <br>
        meditasi, dan visual relaksasi yang kami sediakan.<br>
        Tarik napas perlahan, lepaskan beban harimu semua <br>
        dimulai dari langkah kecil untuk kembali merasa utuh.<br>
      </p>
    </div>
    <img src="img/Meditasi-2 1.png" alt="Meditasi" class="hero-image" />
  </section>

  <section>
    <h2 class="section-title">Pilih Suara yang Menenangkan Pikiranmu</h2>
    <div class="section-underline"></div>
    <div class="horizontal-scroll">
      <div class="card">
        <img src="{{ asset('img/hujan.png') }}" alt="Suara Hujan">
        <p><strong>Suara Hujan</strong> - 2:00</p>
        <audio controls>
          <source src="{{ asset('audio/Suara_Hujan.mp3') }}" type="audio/mpeg">
          Browser tidak mendukung audio.
        </audio>
      </div>
      <div class="card">
        <img src="{{ asset('img/ombak.png') }}" alt="Suara Ombak">
        <p><strong>Suara Ombak</strong> - 2:00</p>
        <audio controls>
          <source src="{{ asset('audio/suara_gelombang.mp3') }}" type="audio/mpeg">
          Browser tidak mendukung audio.
        </audio>
      </div>
      <div class="card">
        <img src="{{ asset('img/daun.png') }}" alt="Suara Dedaunan">
        <p><strong>Suara Dedaunan</strong> - 2:00</p>
        <audio controls>
          <source src="{{ asset('audio/suara_dedaunan.mp3') }}" type="audio/mpeg">
          Browser tidak mendukung audio.
        </audio>
      </div>
    </div>
  </section>

  <section>
    <h2 class="section-title">Nikmati Visual yang Menenangkan</h2>
    <div class="section-underline"></div>
    <div class="horizontal-scroll">
      <div class="card">
        <a href="{{ url('/hvideo') }}"><video controls poster="img/v-ombak.png" src="ombak.mp4"></video>
        <p><i>Video Ombak pantai</i> - 2:00</p></a>
      </div>
      <div class="card">
        <a href="{{ url('/hvideo') }}"><video controls poster="img/v-hujan.png" src="hujan.mp4"></video>
        <p><i>Video Suara Hujan</i> - 2:00</p></a>
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
        <button class="btn"><a href="{{ url('https://youtu.be/q5x1SNjRQwY?si=ibefLY9etNtWPO-n') }}" class="cta-button">Tonton</a></button>
      </div>
      <div class="card">
        <img src="img/p2.png" alt="Bahas Mental Health">
        <p><strong>Bahas mental health</strong><br><small>by by.U</small><br>44:58</p>
        <button class="btn"><a href="{{ url('https://youtu.be/TaJxpUUC8S4?si=aKeD17fVtV-Qptje') }}" class="cta-button">Tonton</a></button>
      </div>
      <div class="card">
        <img src="img/p3.png" alt="Hilang arah?">
        <p><strong>Hilang arah?</strong><br><small>by SUARA BERKELAS</small><br>48:50</p>
        <button class="btn"><a href="{{ url('https://youtu.be/aPfxom-N1LM?si=n0-tueuz8dlkeEpF') }}" class="cta-button">Tonton</a></button>
      </div>
      <div class="card">
        <img src="img/p4.png" alt="Obat malas genz">
        <p><strong>Obat malas genz</strong><br><small>by Dr. Indrawan N</small><br>38:42</p>
        <button class="btn"><a href="{{ url('https://youtu.be/8dDx0Tkhb1w?si=WDQMC84dryzRW0Uh') }}" class="cta-button">Tonton</a></button>
      </div>
    </div>
  </section>

  <blockquote>
    "Ketenangan bukanlah sebuah tujuan, melainkan sebuah perjalanan indah yang dimulai dari keberanian untuk berhenti sejenak dan menyatu dengan keheningan."
  </blockquote>

  <script>
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