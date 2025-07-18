<!-- Footer Component -->
<footer>
  <style>
    footer {
      background-color: #FF8C4B;
      color: white;
      padding: 40px 0 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      box-sizing: border-box;
    }

    .footer-content {
      display: grid;
      grid-template-columns: 1fr 1px 1.5fr 1px 1fr;
      align-items: start;
      width: 90%;
      max-width: 1200px;
      padding: 0 20px;
      margin-bottom: 40px;
      box-sizing: border-box;
      gap: 30px;
    }

    .vertical-line {
      background-color: white;
      width: 2px;
      height: 100%;
    }

    .footer-section {
      padding: 0 10px;
      box-sizing: border-box;
    }

    .nav-links ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .nav-links ul li {
      margin-bottom: 15px;
    }

    .nav-links ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 1.05em;
    }

    .center-text h3 {
      font-family: 'Fredoka One', cursive;
      font-size: 1.7em;
      line-height: 1.4;
      font-weight: normal;
      margin-bottom: 20px;
      text-align: center;
    }

    .login-admin {
      max-width: 400px;
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .login-admin p {
      font-style: italic;
      margin: 0 0 5px 5px;
      font-size: 0.95em;
    }

    .email-input,
    .password-input {
      width: 100%;
      padding: 12px 15px;
      border-radius: 8px;
      border: none;
      font-size: 1em;
      box-sizing: border-box;
    }

    .password-group {
      display: flex;
      gap: 10px;
      align-items: center;
    }

    .login-admin button {
      background-color: white;
      color: #FF8C4B;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      font-size: 1.1em;
      font-weight: bold;
      cursor: pointer;
      white-space: nowrap;
      transition: background 0.3s ease;
    }

    .login-admin button:hover {
      background-color: #f1f1f1;
    }

    .contact-info h3 {
      font-size: 1.1em;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .contact-info p {
      line-height: 1.6;
      font-size: 1em;
      margin: 5px 0;
    }

    .footer-bottom {
      background-color: #FF671F;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 5%;
      width: 100%;
      box-sizing: border-box;
    }

    .footer-bottom p {
      font-size: 0.95em;
      font-style: italic;
    }

    .footer-logo {
      height: 50px;
    }

    @media (max-width: 768px) {
      .footer-content {
        flex-direction: column;
        display: flex;
        align-items: center;
        gap: 30px;
      }

      .vertical-line {
        display: none;
      }

      .password-group {
        flex-direction: column;
      }

      .footer-bottom {
        flex-direction: column;
        gap: 10px;
        text-align: center;
      }
    }
  </style>

  <div class="footer-content">
    <!-- Kiri -->
    <div class="footer-section nav-links">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/edukasi') }}">Edukasi</a></li>
        <li><a href="{{ url('/dokter') }}">Dokter</a></li>
        <li><a href="{{ url('/ruangmeditasi') }}">Ruang Meditasi</a></li>
        <li><a href="#">Ruang Cerita</a></li>
      </ul>
    </div>

    <div class="vertical-line"></div>

    <!-- Tengah -->
    <div class="footer-section center-content">
      <div class="center-text">
        <h3>Tempat Aman Untuk Pulih<br>Satu Hari Sekali</h3>
      </div>
      <div class="login-admin">
        <p>Login Admin</p>
        <input type="email" placeholder="*Email" class="email-input" />
        <div class="password-group">
          <input type="password" placeholder="*Password" class="password-input" />
          <button>Sign In</button>
        </div>
      </div>
    </div>

    <div class="vertical-line"></div>

    <!-- Kanan -->
    <div class="footer-section contact-info">
      <h3>Send Us Message</h3>
      <p>0877–0000–0000</p>
      <p>Jln Raya Pecantingan,<br>Sekardangan Indah<br>Candi Sidoarjo</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>@2025_Copyright_Kelompok-7</p>
    <img src="{{ asset('img/Ruang Peduli Logo Putih.png') }}" alt="Ruang Pulih Logo" class="footer-logo">
  </div>
</footer>
