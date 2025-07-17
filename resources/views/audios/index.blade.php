<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manajemen Lagu - Ruang Pulih</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
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
        body {
            background-color: var(--cream);
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar-ruangpulih {
            background-color: #feede0;
            color: var(--light);
        }
        .navbar-ruangpulih .nav-link,
        .navbar-ruangpulih .navbar-brand {
            color: #FFA673;
            font-weight: 500;
        }
        .navbar-ruangpulih .nav-link:hover {
            color: var(--dark);
        }
        .navbar-ruangpulih .btn-ruangpulih {
            background-color: var(--light);
            color: var(--orange);
            border: none;
        }
        .crud-container {
            padding: 2rem;
        }
        .table-header {
            background-color: var(--blue);
            color: white;
        }
        .btn-ruangpulih {
            background-color: var(--orange);
            color: white;
        }
        .btn-ruangpulih:hover {
            background-color: #e36d25;
        }
        .thumbnail-img {
            width: 50px;
            height: auto;
            border-radius: 5px;
        }
        .action-btn {
            border: none;
            background: transparent;
            font-size: 1rem;
        }
        .btn-view {
            color: #3498db;
        }
        .btn-edit {
            color: #f1c40f;
        }
        .btn-delete {
            color: #e74c3c;
        }
  </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-ruangpulih">
        <div class="container">
            <a class="navbar-brand" href="#">
                  <img src="../img/logo ruangpeduli.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('posts.index') }}">Postingan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('audios.index') }}">Audio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('videos.index') }}">Vidio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dokter</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-ruangpulih me-2">
                        <i class="fas fa-comment-dots me-1"></i> Ruang Curhat
                    </a>
                    <a href="#" class="btn btn-outline-light">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>


<div class="container py-5">
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
      {{ session('success') }}
      <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-dark">
      <i class="fas fa-headphones me-2 text-warning"></i> Manajemen Lagu
    </h3>
    <a href="{{ route('audios.create') }}" class="btn btn-ruangpulih">
      <i class="fas fa-plus me-1"></i> Tambah Lagu
    </a>
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead class="table-header">
        <tr>
          <th>#</th>
          <th>Judul Lagu</th>
          <th>Durasi</th>
          <th>Thumbnail</th>
          <th>Audio</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($audios as $index => $item)
          <tr>
            <td>{{ $index + $audios->firstItem() }}</td>
            <td class="fw-semibold">{{ $item->judul_lagu }}</td>
            <td>{{ $item->durasi_lagu ?? '-' }}</td>
            <td>
              @if($item->thumbnail)
                <img src="{{ asset('storage/' . $item->thumbnail) }}" class="thumbnail-img" alt="thumbnail">
              @else
                <span class="text-muted">-</span>
              @endif
            </td>
            <td>
              @if($item->audio_file)
                <audio controls class="audio-preview">
                  <source src="{{ asset('storage/' . $item->audio_file) }}" type="audio/mpeg">
                  Browser tidak mendukung audio.
                </audio>
              @else
                <span class="text-muted">Tidak ada</span>
              @endif
            </td>
            <td>
              <a href="{{ route('audios.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">
                <i class="fas fa-edit"></i>
              </a>
              <form action="{{ route('audios.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus lagu ini?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="text-center text-muted py-4">
              <i class="fas fa-music fa-2x mb-2"></i>
              <p>Belum ada lagu yang ditambahkan.</p>
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="d-flex justify-content-center mt-4">
    {{ $audios->links() }}
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
