<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hero Section - Ruang Pulih</title>

  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />

  <!-- Font Lokal: Positive Forward -->
  <style>
    @font-face {
      font-family: 'Positive Forward';
      src: url('fonts/PositiveForward.woff2') format('woff2'),
           url('fonts/PositiveForward.woff') format('woff');
      font-weight: normal;
      font-style: normal;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #FFF7F2;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .hero {
      padding: 80px 0;
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

    .hero-title {
      font-family: 'Positive Forward', cursive;
      font-size: 42px;
      font-weight: bold;
      color: #2B190F;
      line-height: 1.3;
      margin: 0 0 10px 0;
    }

    .hero-subtitle {
      font-family: 'Positive Forward', cursive;
      font-size: 42px;
      font-weight: bold;
      color: #2B190F;
      margin: 0 0 25px 0;
    }

    .hero-text p {
      font-family: 'Poppins', sans-serif;
      font-size: 17,8px;
      line-height: 1.8;
      color: #3B3B3B;
    }

    .hero-img img {
      max-width: 520px;
      height: auto;
      display: block;
    }

    @media (max-width: 768px) {
      .hero-content {
        flex-direction: column;
        text-align: center;
      }

      .hero-text, .hero-img {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

  <section class="hero">
    <div class="container hero-content">
      <div class="hero-text">
        <h1 class="hero-title">Tempat Aman untuk Pulih</h1>
        <h1 class="hero-subtitle">Satu Hari Sekali.</h1>
        <p>
          Kami percaya bahwa setiap orang berhak merasa utuh, didengar, dan dipahami. 
          Rumah Pulih hadir sebagai ruang aman bagi siapa pun yang ingin mengenal dirinya, 
          memahami luka, dan belajar perlahan untuk sembuh.
        </p>
      </div>
      <div class="hero-img">
        <img src="AssetUtamaAtas.png" alt="Ilustrasi hero section" />
      </div>
    </div>
  </section>

</body>
</html>