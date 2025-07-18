<!-- Header Component -->
<header class="main-header">
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
    /* ======= NAVBAR ======= */
    header.main-header {
      background-color: #FFEDE6;
      padding: 20px 0;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .logo img {
      height: 50px;
    }

    .main-nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
      padding: 0;
      margin: 0;
    }

    .main-nav ul li a {
      text-decoration: none;
      color: var(--text-dark, #333);
      font-weight: 500;
      font-size: 0.95em;
      transition: color 0.3s;
    }

    .main-nav ul li a:hover {
      color: var(--primary-orange, #fc823d);
    }

    .btn-primary {
      background-color: var(--primary-orange, #fc823d);
      color: white;
      padding: 8px 18px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: 600;
    }

    .mobile-nav-toggle {
      display: none;
      background: none;
      border: none;
      font-size: 24px;
      color: var(--text-dark, #333);
      cursor: pointer;
    }

    @media (max-width: 992px) {
      .main-nav {
        display: none;
        width: 100%;
        margin-top: 15px;
        text-align: center;
      }

      .main-nav.active {
        display: block;
      }

      .main-nav ul {
        flex-direction: column;
      }

      .mobile-nav-toggle {
        display: block;
      }

      .header-content {
        justify-content: center;
        text-align: center;
      }

      .btn-primary {
        margin-top: 10px;
      }
    }
  </style>

  <div class="container header-content">
    <div class="logo">
      <img src="{{ asset('img/logo ruangpeduli.png') }}" alt="Logo Ruang Pulih">
    </div>
    <nav class="main-nav" id="mainNav">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/edukasi') }}">Edukasi</a></li>
        <li><a href="{{ url('/ruangmeditasi') }}">Ruang Meditasi</a></li>
        <li><a href="{{ url('/dokter') }}">Dokter</a></li>
      </ul>
    </nav>
    <a href="/ruangcurhat" class="btn-primary">Ruang Curhat</a>
    <button class="mobile-nav-toggle" onclick="document.getElementById('mainNav').classList.toggle('active')">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</header>
