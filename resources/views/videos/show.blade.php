<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $video->title }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            max-height: 400px;
            object-fit: cover;
        }
        iframe {
            width: 100%;
            height: 400px;
            border: none;
            border-radius: 8px;
        }
        .card-text img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">

            {{-- Thumbnail --}}
            @if($video->thumbnail)
                <img src="{{ asset('storage/' . $video->thumbnail) }}" class="card-img-top" alt="{{ $video->title }}">
            @endif

            <div class="card-body">
                {{-- Tanggal --}}
                <div class="text-muted mb-3">
                    Dipublikasikan: {{ optional($video->published_at)->format('d M Y H:i') ?? 'Belum dipublikasikan' }}
                </div>

                {{-- Judul --}}
                <h1 class="card-title">{{ $video->title }}</h1>

                {{-- Deskripsi --}}
                <div class="card-text mt-4">
                    {!! $video->description !!}
                </div>

                {{-- Embed Video --}}
                @if($video->url)
                    <div class="mt-4">
                        <iframe src="{{ $video->url }}" allowfullscreen></iframe>
                    </div>
                @endif
            </div>

            <div class="card-footer bg-white">
                <a href="{{ route('videos.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar Video
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
