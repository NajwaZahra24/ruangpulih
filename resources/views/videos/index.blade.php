<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Video</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

        .badge-published {
            background-color: var(--green);
        }

        .badge-draft {
            background-color: var(--yellow);
        }

        .card {
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border: none;
        }

        .ratio iframe {
            border-radius: 6px;
        }

        h2 {
            color: var(--dark);
        }

        .table > :not(caption) > * > * {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container crud-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Video</h2>
            <a href="{{ route('videos.create') }}" class="btn btn-ruangpulih">
                <i class="fas fa-plus"></i> Tambah Video
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-header">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Preview YouTube</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($videos as $index => $video)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $video->title }}</td>
                                <td>{!! Str::limit(strip_tags($video->description), 100) !!}</td>
                                <td>
                                    @php
                                        preg_match('/(?:youtu\.be\/|youtube\.com\/(?:embed\/|watch\?v=))([\w\-]+)/', $video->youtube_url, $matches);
                                        $youtubeId = $matches[1] ?? null;
                                    @endphp
                                    @if($youtubeId)
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/{{ $youtubeId }}" allowfullscreen></iframe>
                                        </div>
                                    @else
                                        <small class="text-danger">URL tidak valid</small>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('videos.edit', $video->id) }}" class="action-btn btn-edit" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('videos.destroy', $video->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus video ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn btn-delete" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada video</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
