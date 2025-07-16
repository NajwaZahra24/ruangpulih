<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postingan Ruang Pulih</title>
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
        
        /* Modern Navbar */
        .navbar-ruangpulih {
            background: var(--light);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            padding: 0.8rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--orange) !important;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }
        
        .nav-link {
            color: var(--dark) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            position: relative;
            padding: 0.5rem 0;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--orange) !important;
        }
        
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--orange);
            border-radius: 3px;
        }
        
        .btn-ruangpulih {
            background: var(--orange);
            color: white;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
            border: none;
        }
        
        .btn-ruangpulih:hover {
            background: #e5722a;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(252, 130, 61, 0.3);
        }
        
        /* CRUD Table Styles */
        .crud-container {
            background: var(--cream);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            padding: 2rem;
            margin-top: 1rem;
        }
        
        .table-header {
            background: var(--orange);
            color: white;
        }
        
        .table-header th {
            border: none;
            padding: 1rem;
            font-weight: 600;
        }
        
        .table > :not(:first-child) {
            border-top: none;
        }
        
        .table tbody tr {
            transition: all 0.2s;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .table tbody tr:hover {
            background: rgba(255,255,255,0.7);
            transform: translateX(4px);
        }
        
        .badge-category {
            background: var(--blue);
            color: white;
        }
        
        .badge-published {
            background: var(--green);
            color: var(--dark);
        }
        
        .badge-draft {
            background: var(--yellow);
            color: var(--dark);
        }
        
        .thumbnail-img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .thumbnail-img:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .action-btn {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 3px;
            transition: all 0.2s;
        }
        
        .btn-view {
            background: rgba(136, 180, 255, 0.2);
            color: var(--blue);
        }
        
        .btn-edit {
            background: rgba(244, 195, 71, 0.2);
            color: #d6a01c;
        }
        
        .btn-delete {
            background: rgba(255, 0, 0, 0.1);
            color: #ff4444;
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.3rem;
            }
            
            .crud-container {
                padding: 1rem;
                margin: 0 -15px;
                border-radius: 0;
            }
            
            .table-responsive {
                margin-bottom: 1rem;
            }
            
            .thumbnail-img {
                width: 50px;
                height: 40px;
            }
        }
    </style>
</head>
<body>
    <!-- Modern Navbar -->
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
                        <a class="nav-link active" href="#">Postingan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Edukasi</a>
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
                    <a href="#" class="btn btn-outline-secondary">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CRUD Content -->
    <div class="container crud-container">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0" style="color: var(--dark); font-weight: 600;">
                <i class="fas fa-newspaper me-2" style="color: var(--orange);"></i> Manajemen Postingan
            </h2>
            <a href="{{ route('posts.create') }}" class="btn btn-ruangpulih">
                <i class="fas fa-plus me-1"></i> Tambah Baru
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-header">
                    <tr>
                        <th width="50">No</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Kategori</th>
                        <th>Thumbnail</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $index => $post)
                    <tr>
                        <td class="fw-bold">{{ $index + 1 }}</td>
                        <td class="fw-semibold">{{ $post->title }}</td>
                        <td class="text-muted small">{{ Str::limit(strip_tags($post->content), 50) }}</td>
                        <td><span class="badge badge-category">{{ $post->category_name }}</span></td>
                        <td>
                            @if($post->thumbnail)
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" class="thumbnail-img" alt="Thumbnail">
                            @else
                                <span class="text-muted small">No image</span>
                            @endif
                        </td>
                        <td>
                            @if($post->published_at)
                                <span class="badge badge-published">Published</span>
                            @else
                                <span class="badge badge-draft">Draft</span>
                            @endif
                        </td>
                        <td class="small">
                            {{ $post->published_at ? $post->published_at->format('d M Y') : '-' }}
                        </td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="action-btn btn-view" title="Lihat">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="action-btn btn-edit" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn btn-delete" title="Hapus" onclick="return confirm('Hapus postingan ini?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-ruangpulih');
            if (window.scrollY > 10) {
                navbar.style.boxShadow = '0 4px 15px rgba(0,0,0,0.1)';
            } else {
                navbar.style.boxShadow = '0 2px 15px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>
</html>