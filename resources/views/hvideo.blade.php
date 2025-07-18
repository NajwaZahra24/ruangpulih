<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Video Relaksasi - Ruang Pulih</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Positive+Forward&display=swap" rel="stylesheet" />

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
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: var(--cream);
      color: var(--dark);
      font-size: 16px;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      display: inline-flex;
      align-items: center;
      background-color: var(--orange);
      color: var(--light);
      padding: 8px 15px;
      border-radius: 30px;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      font-size: 0.9rem;
      z-index: 10;
    }

    .back-button:hover {
      background-color: var(--dark);
      transform: translateY(-2px);
    }

    .back-button svg {
      margin-right: 5px;
      width: 12px;
      height: 12px;
    }

    .main-content {
      padding: 70px 20px 20px;
      flex: 1;
    }

    .header {
      text-align: center;
      margin-bottom: 30px;
      position: relative;
    }

    h1 {
      font-family: 'Positive Forward', sans-serif;
      color: var(--dark);
      font-size: 2.5rem;
      margin-bottom: 15px;
    }

    .search-container {
      max-width: 500px;
      margin: 0 auto 30px;
      position: relative;
    }

    .search-input {
      width: 100%;
      padding: 12px 20px;
      border-radius: 30px;
      border: 2px solid var(--orange);
      font-size: 1rem;
      outline: none;
      transition: all 0.3s;
    }

    .search-input:focus {
      box-shadow: 0 0 0 3px rgba(252, 130, 61, 0.3);
    }

    .video-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .video-card {
      background-color: var(--light);
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .video-card:hover {
      transform: translateY(-5px);
    }

    video {
      width: 100%;
      display: block;
      border-bottom: 3px solid var(--orange);
    }

    .video-info {
      padding: 15px;
      text-align: center;
    }

    .video-info p {
      color: var(--dark);
      font-size: 1rem;
      margin-top: 5px;
    }

    .video-title {
      font-weight: 600;
      color: var(--dark);
      font-size: 1.1rem;
    }

  </style>
</head>
<body>
  <a href="{{ url('/ruangmeditasi') }}" class="back-button">
    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15 18L9 12L15 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
        Kembali
    </a>

  <div class="main-content">
    <div class="header">
      <h1>Video Relaksasi</h1>
      <div class="search-container">
        <input type="text" class="search-input" placeholder="Cari video relaksasi..." id="searchInput">
      </div>
    </div>

    <div class="video-grid" id="videoGrid">
      <!-- Video cards tetap sama seperti sebelumnya -->
      <div class="video-card" data-title="ombak pantai">
        <video controls poster="img/v-ombak.png" src="video/ombak.mp4"></video>
        <div class="video-info">
          <p class="video-title">Ombak Pantai</p>
          <p>Durasi: 2:00</p>
        </div>
      </div>

      <div class="video-card" data-title="suara hujan">
        <video controls poster="img/v-hujan.png" src="video/ombak.mp4"></video>
        <div class="video-info">
          <p class="video-title">Suara Hujan</p>
          <p>Durasi: 2:00</p>
        </div>
      </div>

      <div class="video-card" data-title="hutan tenang">
        <video controls poster="img/v-hutan.png" src="video/hutan.mp4"></video>
        <div class="video-info">
          <p class="video-title">Hutan yang Tenang</p>
          <p>Durasi: 2:00</p>
        </div>
      </div>

      <div class="video-card" data-title="aliransungai">
        <video controls poster="img/sungai.png" src="video/sungai.mp4"></video>
        <div class="video-info">
          <p class="video-title">Danau yang tenang</p>
          <p>Durasi: 2:00</p>
        </div>
      </div>

      <div class="video-card" data-title="burung berkicau">
        <video controls poster="img/sungai.png" src="video/sungai.mp4"></video>
        <div class="video-info">
          <p class="video-title">Burung Berkicau</p>
          <p>Durasi: 2:00</p>
        </div>
      </div>

      <div class="video-card" data-title="air terjun">
        <video controls poster="img/v-airterjun.png" src="video/ombak.mp4"></video>
        <div class="video-info">
          <p class="video-title">Air Terjun</p>
          <p>Durasi: 2:00</p>
        </div>
      </div>

      <div class="video-card" data-title="pantai sunset">
        <video controls poster="img/v-sunset.png" src="video/hutan.mp4"></video>
        <div class="video-info">
          <p class="video-title">Pantai Sunset</p>
          <p>Durasi: 2:00</p>
        </div>
      </div>

      <div class="video-card" data-title="kebun teh">
        <video controls poster="img/v-hujan.png" src="video/hutan.mp4"></video>
        <div class="video-info">
          <p class="video-title">Kebun Teh</p>
          <p>Durasi: 2:00</p>
        </div>
      </div>

      <div class="video-card" data-title="sawah">
        <video controls poster="img/sungai.png" src="video/sungai.mp4"></video>
        <div class="video-info">
          <p class="video-title">Pemandangan Sawah</p>
          <p>Durasi: 2:00</p>
        </div>
      </div>
    </div>
  </div>

  <x-footer />

  <script>
    // Script untuk menghentikan video lain ketika satu video diputar
    const videos = document.querySelectorAll('video');
    videos.forEach(video => {
      video.addEventListener('play', () => {
        videos.forEach(otherVideo => {
          if (otherVideo !== video && !otherVideo.paused) {
            otherVideo.pause();
          }
        });
      });
    });

    // Script untuk fitur pencarian
    const searchInput = document.getElementById('searchInput');
    const videoCards = document.querySelectorAll('.video-card');

    searchInput.addEventListener('input', () => {
      const searchTerm = searchInput.value.toLowerCase();
      
      videoCards.forEach(card => {
        const title = card.getAttribute('data-title');
        if (title.includes(searchTerm)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  </script>
</body>
</html>