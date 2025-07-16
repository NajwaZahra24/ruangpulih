<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Video - Ruang Pulih</title>
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
        .btn-ruangpulih {
            background-color: var(--orange);
            color: white;
        }
        .btn-ruangpulih:hover {
            background-color: #e36d25;
        }
        .form-container {
            padding: 2rem;
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            margin-top: 2rem;
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
    </div>
</nav>

<!-- Konten Form Tambah Video -->
<div class="container">
    <div class="form-container">
        <h2 class="mb-4 text-center" style="color: var(--dark);">
            <i class="fas fa-video me-2" style="color: var(--orange);"></i> Tambah Video Baru
        </h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('videos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul Video</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul video" value="{{ old('title') }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Masukkan deskripsi video (opsional)">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="youtube_url" class="form-label">Link YouTube</label>
                <input type="url" class="form-control" id="youtube_url" name="youtube_url" placeholder="https://youtube.com/..." value="{{ old('youtube_url') }}" required>
            </div>

            <div class="text-end">
                <a href="{{ route('videos.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-ruangpulih">Simpan Video</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
