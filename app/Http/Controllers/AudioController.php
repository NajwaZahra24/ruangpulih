<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function index()
    {
        $audios = Audio::paginate(10); // Gunakan paginate agar bisa pakai links()
        return view('audios.index', compact('audios'));
    }

    public function create()
    {
        return view('audios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_lagu' => 'required',
            'durasi_lagu' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'audio_file' => 'required|mimes:mp3,wav,ogg|max:10000',
        ]);

        // Debug: Lihat semua data request dulu
        dd($request->all());

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $audioPath = $request->file('audio_file')->store('audios', 'public');

        Audio::create([
            'judul_lagu' => $request->judul_lagu,
            'durasi_lagu' => $request->durasi_lagu,
            'thumbnail' => $thumbnailPath,
            'audio_file' => $audioPath,
        ]);

        return redirect()->route('audios.index')->with('success', 'Audio berhasil ditambahkan!');
    }
}