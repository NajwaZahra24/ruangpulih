<!-- resources/views/audios/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Audio Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Audio Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('audios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="judul_lagu" class="form-label">Judul Lagu</label>
                        <input type="text" class="form-control" id="judul_lagu" name="judul_lagu" required>
                    </div>

                    <div class="mb-3">
                        <label for="durasi_lagu" class="form-label">Durasi Lagu</label>
                        <input type="text" class="form-control" id="durasi_lagu" name="durasi_lagu" required>
                    </div>

                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Thumbnail Lagu</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label for="audio_file" class="form-label">File Audio</label>
                        <input type="file" class="form-control" id="audio_file" name="audio_file" accept="audio/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('audios.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
