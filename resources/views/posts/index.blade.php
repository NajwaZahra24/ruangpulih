<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postingan Ruang Pulih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .table-responsive {
            margin-bottom: 40px;
        }
        .view-toggle {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- ini nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Ruang Pulih</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('posts.index') }}">Postingan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Postingan Ruang Pulih</h1>
            <div>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Post
                </a>
                <button id="toggleView" class="btn btn-outline-secondary ms-2">
                    <i class="fas fa-table"></i> Tampilan Tabel
                </button>
            </div>
        </div>

        <!-- Tampilan Tabel (Awalnya Disembunyikan) -->
        <div id="tableView" class="table-responsive" style="display: none;">
            <table class="table table-striped table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tanggal Publikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $index => $post)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <span class="badge bg-primary">{{ $post->category_name }}</span>
                        </td>
                        <td>
                            @if($post->published_at)
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-warning text-dark">Draft</span>
                            @endif
                        </td>
                        <td>
                            {{ $post->published_at ? $post->published_at->format('d M Y') : '-' }}
                        </td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus post ini?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tampilan Card (Default) -->
        <div id="cardView">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 mental-health-card">
                        @if($post->thumbnail)
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <span class="badge mental-health-badge">{{ $post->category_name }}</span>
                            <h5 class="card-title mt-2">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                            <p class="text-muted small">
                                Dipublikasikan: {{ $post->published_at ? $post->published_at->format('d M Y') : 'Belum dipublikasikan' }}
                            </p>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <div>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus post ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    </div>

    <footer class="bg-light text-center py-4 mt-5">
        <div class="container">
            <p>&copy; {{ date('Y') }} Ruang Pulih - Platform Edukasi Kesehatan Mental</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle antara tampilan tabel dan card
        document.getElementById('toggleView').addEventListener('click', function() {
            const tableView = document.getElementById('tableView');
            const cardView = document.getElementById('cardView');
            const toggleBtn = document.getElementById('toggleView');
            
            if (tableView.style.display === 'none') {
                tableView.style.display = 'block';
                cardView.style.display = 'none';
                toggleBtn.innerHTML = '<i class="fas fa-th-large"></i> Tampilan Card';
            } else {
                tableView.style.display = 'none';
                cardView.style.display = 'block';
                toggleBtn.innerHTML = '<i class="fas fa-table"></i> Tampilan Tabel';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            console.log('Halaman Postingan Ruang Pulih telah dimuat');
        });
    </script>
</body>
</html>