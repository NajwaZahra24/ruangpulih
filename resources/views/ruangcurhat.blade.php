<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ruang Curhat - Ruang Pulih</title>

  <!-- Fonts & Styles -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Fredoka+One&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9f6f3;
    }

    .hero {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      padding: 60px 5%;
      background-color: #fff;
    }

    .hero-text {
      flex: 1 1 50%;
    }

    .hero-text h1 {
      font-family: 'Fredoka One', cursive;
      font-size: 32px;
      margin-bottom: 20px;
      color: #2e2e2e;
    }

    .hero-text p {
      font-size: 16px;
      color: #444;
    }

    .hero-img {
      flex: 1 1 40%;
      text-align: center;
    }

    .hero-img img {
      max-width: 100%;
      height: auto;
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
      .hero {
        flex-direction: column;
      }

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

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>Sediakan waktu sejenak untuk dirimu.</h1>
      <p>
        Temukan ruangmu di sini. Bagikan cerita, curhatan, dan inspirasimu.
        Tulis apa yang ada di hati, tanpa batasan. Jelajahi dunia kata-kata,
        dan temukan kenyamanan dalam berbagi.
      </p>
    </div>
    <div class="hero-img">
      <img src="/path/to/your/image.png" alt="Hero Image" />
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
      <div class="curhat-card">Hidup memang cape ga masalah kalau kalian berhenti sejenak, cape boleh nyerah jangan</div>
      <div class="curhat-card">Hari ini mungkin berat, tapi kamu sudah sampai sejauh ini. Itu bukti betapa kuatnya dirimu.</div>
      <div class="curhat-card">Jalan masih panjang, masih banyak harapan...</div>
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
