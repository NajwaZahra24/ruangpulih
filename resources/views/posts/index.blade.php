<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Lagu - Ruang Pulih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            background-color: var(--orange);
            color: var(--light);
        }
        .navbar-ruangpulih .nav-link,
        .navbar-ruangpulih .navbar-brand {
            color: var(--light);
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
                <img src="https://via.placeholder.com/40x40" alt="Logo Ruang Pulih">
                RUANG PULIH
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">Postingan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('songs.index') }}">Audio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Meditasi</a>
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

    <!-- Konten Lagu -->
    <div class="container crud-container">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0" style="color: var(--dark); font-weight: 600;">
                <i class="fas fa-music me-2" style="color: var(--orange);"></i> Manajemen Lagu
            </h2>
            <a href="{{ route('songs.create') }}" class="btn btn-ruangpulih">
                <i class="fas fa-plus me-1"></i> Tambah Lagu
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-header">
                    <tr>
                        <th width="50">No</th>
                        <th>Judul Lagu</th>
                        <th>Durasi</th>
                        <th>Thumbnail</th>
                        <th>File Audio</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($songs as $index => $song)
                    <tr>
                        <td class="fw-bold">{{ $index + 1 }}</td>
                        <td class="fw-semibold">{{ $song->title }}</td>
                        <td class="text-muted">{{ $song->duration }}</td>
                        <td>
                            @if($song->thumbnail)
                                <img src="{{ asset('storage/' . $song->thumbnail) }}" class="thumbnail-img" alt="Thumbnail Lagu">
                            @else
                                <span class="text-muted small">No image</span>
                            @endif
                        </td>
                        <td>
                            @if($song->audio_file)
                                <audio controls style="width: 120px;">
                                    <source src="{{ asset('storage/' . $song->audio_file) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            @else
                                <span class="text-muted small">No audio</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('songs.show', $song->id) }}" class="action-btn btn-view" title="Lihat">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('songs.edit', $song->id) }}" class="action-btn btn-edit" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('songs.destroy', $song->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn btn-delete" title="Hapus" onclick="return confirm('Hapus lagu ini?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            <i class="fas fa-music-slash fa-2x mb-3"></i>
                            <p>Belum ada lagu yang ditambahkan.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
