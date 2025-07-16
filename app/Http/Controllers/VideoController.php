<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'youtube_url' => 'required|url'
        ]);

        Video::create($request->all());
        return redirect()->route('videos.index')->with('success', 'Video berhasil ditambahkan.');
    }

    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'youtube_url' => 'required|url'
        ]);

        $video->update($request->all());
        return redirect()->route('videos.index')->with('success', 'Video berhasil diupdate.');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video berhasil dihapus.');
    }
}
