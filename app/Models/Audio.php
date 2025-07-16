<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;

    // Tambahkan ini:
    protected $table = 'audios';

    protected $fillable = [
        'judul_lagu',
        'durasi_lagu',
        'thumbnail',
        'audio_file',
    ];
}
