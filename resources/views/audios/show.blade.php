<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $post->title }}</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      padding: 20px;
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .card {
      margin-top: 20px;
      border: none;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .card-img-top {
      max-height: 400px;
      object-fit: cover;
      border-bottom: 1px solid #dee2e6;
    }
    .card-text img {
      max-width: 100%;
      height: auto;
    }
    .btn-outline-secondary:hover {
      background-color: #e2e6ea;
    }
    .published-info {
      font-size: 0.9rem;
      color: #6c757d;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="card">
      @if($post->thumbnail)
        <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top" alt="{{ $post->title }}">
      @endif

      <div class="card-body">
        <div class="published-info mb-3">
          Dipublikasikan: {{ $post->published_at ? $post->published_at->format('d M Y H:i') : 'Belum dipublikasikan' }}
        </div>

        <h1 class="card-title fw-bold">{{ $post->title }}</h1>

        <div class="card-text mt-4">
          {!! $post->content !!}
        </div>
      </div>

      <div class="card-footer bg-white border-top-0">
        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">
          <i class="fas fa-arrow-left me-1"></i> Kembali ke Daftar Post
        </a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
