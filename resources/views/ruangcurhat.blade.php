<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ruang Curhat - Ruang Pulih</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    @font-face {
      font-family: 'Positive Forward';
      src: url('fonts/PositiveForward.woff2') format('woff2'),
           url('fonts/PositiveForward.woff') format('woff');
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* ======= HERO ======= */
    .hero {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 60px 5%;
      background-color: #fff;
    }

    .hero-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      width: 100%;
      gap: 40px;
    }

    .hero-text {
      flex: 1 1 50%;
      max-width: 520px;
    }

    .hero-title,
    .hero-subtitle {
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

    .hero-img {
      flex: 1 1 40%;
      text-align: center;
    }

    .hero-img img {
      max-width: 100%;
      height: auto;
    }

    @media (max-width: 800px) {
      .hero-content {
        flex-direction: column;
        text-align: center;
      }

      .hero-text, .hero-img {
        max-width: 100%;
      }
    }

    .choice-buttons {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 40px auto;
      gap: 30px;
    }

    .choice-btn {
      padding: 12px 24px;
      background-color: #ffe4d2;
      border-radius: 12px;
      border: none;
      font-style: italic;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
      text-decoration: none;
      color: #ff6b00;
    }

    .or-text {
      font-size: 28px;
      font-weight: bold;
      color: #ff6b00;
    }

    .form-section {
      padding: 30px 5%;
      background-color: #fff;
    }

    .form-section h2 {
      margin-bottom: 10px;
      font-weight: 600;
    }

    .form-input {
      width: 100%;
      border: none;
      padding: 20px;
      border-radius: 10px;
      font-size: 16px;
      background-color: #ffe9dd;
      resize: none;
      height: 200px;
    }

    .submit-btn {
      background-color: #ff6b00;
      color: white;
      padding: 8px 18px;
      border: none;
      border-radius: 8px;
      font-style: italic;
      font-weight: bold;
      cursor: pointer;
    }

    .curhatan-section {
      padding: 40px 5%;
      background-color: #fdf6f2;
    }

    .curhatan-section h3 {
      text-align: center;
      font-size: 18px;
      margin-bottom: 20px;
      color: #333;
    }

    .curhat-card {
      background-color: #ffeede;
      border-radius: 10px;
      padding: 20px;
      margin: 10px;
      flex: 1 1 30%;
    }

    .curhat-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 16px;
    }

    .quote-section {
      max-width: 700px;
      margin: 60px auto;
      background-color: #fff1e6;
      padding: 40px;
      border-radius: 20px;
      text-align: center;
    }

    .quote-wayne {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 30px;
      padding: 40px 5%;
    }

    .quote-wayne img {
      width: 150px;
      border-radius: 20px;
    }

    .quote-wayne blockquote {
      font-size: 18px;
      font-style: italic;
      max-width: 500px;
    }

    .success-message {
      background-color: #d4edda;
      color: #155724;
      padding: 12px;
      margin-top: 20px;
      border-radius: 6px;
      text-align: center;
    }

    @media (max-width: 768px) {
      .quote-wayne {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <x-header />

  <!-- HERO -->
  <section class="hero" id="home">
    <div class="container hero-content">
      <div class="hero-text">
        <h1 class="hero-title">Sediakan Waktu Sejenak</h1>
        <h1 class="hero-subtitle">untuk dirimu.</h1>
        <p>
          Temukan ruangmu di sini. Bagikan cerita, curhatan, dan 
          inspirasimu. Tulis apa yang ada di hati, tanpa batasan.  
          Jelajahi dunia kata-kata, dan temukan kenyamanan dalam berbagi.
        </p>
      </div>
      <div class="hero-img">
        <img src="img/Biru 2.png" alt="Ilustrasi Hero" />
      </div>
    </div>
  </section>

  <!-- Tombol Pilihan -->
  <div class="choice-buttons">
    <a href="#read-messages" class="choice-btn">READ A MESSAGE</a>
    <span class="or-text">OR</span>
    <a href="#form" class="choice-btn">FEELING DOWN?</a>
  </div>

  <!-- Form Curhat -->
  <section class="form-section" id="form">
    <h2>DEAR :</h2>
    <form id="curhatForm">
      <div style="position: relative;">
        <textarea class="form-input" id="message" placeholder="Tulis curhatanmu di sini..."></textarea>
        <button type="submit" class="submit-btn" id="submitBtn" style="position: absolute; bottom: 15px; right: 15px;">Kirim</button>
      </div>
    </form>
  </section>

  <!-- Curhatan Sobat -->
  <section class="curhatan-section" id="read-messages">
    <h3>Lihat curhatan sobat pulih lainnya</h3>
    <div class="curhat-grid messages-container">
      <div class="curhat-card">Hidup memang cape ga masalah kalau kalian berhenti sejenak, cape boleh nyerah jangan.</div>
      <div class="curhat-card">Hari ini mungkin berat, tapi kamu sudah sampai sejauh ini. Itu bukti betapa kuatnya dirimu.</div>
      <div class="curhat-card">Tidak apa-apa untuk berhenti sejenak. Istirahat bukan berarti menyerah, itu bagian dari perjalananmu.</div>
      <div class="curhat-card">Jalan masih panjang, masih banyak harapan harapan yang masih harus di perjuangkan, siapkan kekuatan dan ketangguhan, aku yakin kalian bisa memnggapai semua harapan yang kalian inginkan.</div>
      <div class="curhat-card">Mengakhiri hidup bukan pilihan tapi mengusahakan hidup yang lebih baik adalah keharusan, meskipun harus bersusah payah saat dalam perjalanan.</div>
      <div class="curhat-card">Kamu tidak harus selalu kuat. Menangis pun adalah tanda keberanianmu menghadapi dunia.</div>
    </div>
  </section>

  <!-- Kutipan Min Pulih -->
  <section class="quote-section">
    <p style="font-size: 20px; font-weight: bold;">
      “Kamu tidak sendirian. Banyak orang peduli padamu, meskipun kamu belum menyadarinya.”
    </p>
    <p style="margin-top: 10px; font-style: italic;">- Min Pulih</p>
  </section>

  <!-- Kutipan Wayne Dyer -->
  <section class="quote-wayne">
    <img src="img/gambar1.png" alt="Wayne Dyer">
    <blockquote>
      “Apa yang kita pikirkan menentukan apa yang akan terjadi pada kita. Jadi jika kita ingin mengubah hidup, kita perlu sedikit mengubah pikiran kita.”<br><br>
      <span style="font-style: normal; font-weight: bold;">- Wayne Dyer</span>
    </blockquote>
  </section>

  <!-- Footer -->
  <x-footer />

  <!-- Script -->
  <script>
    document.getElementById('curhatForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const messageField = document.getElementById('message');
      const submitBtn = document.getElementById('submitBtn');

      if (messageField.value.trim() === '') {
        alert('Pesan tidak boleh kosong!');
        return;
      }

      submitBtn.disabled = true;
      submitBtn.textContent = 'Mengirim...';

      setTimeout(() => {
        const messagesContainer = document.querySelector('.messages-container');
        const newMessage = document.createElement('div');
        newMessage.className = 'curhat-card';
        newMessage.textContent = messageField.value;

        messagesContainer.insertBefore(newMessage, messagesContainer.firstChild);

        messageField.value = '';
        submitBtn.disabled = false;
        submitBtn.textContent = 'Kirim';

        const successDiv = document.createElement('div');
        successDiv.className = 'success-message';
        successDiv.textContent = 'Pesan berhasil dikirim! Terima kasih telah berbagi.';

        const form = document.getElementById('curhatForm');
        form.parentNode.insertBefore(successDiv, form.nextSibling);

        setTimeout(() => {
          successDiv.remove();
        }, 5000);

        document.getElementById('read-messages').scrollIntoView({ behavior: 'smooth' });
      }, 1000);
    });
  </script>
</body>
</html>
