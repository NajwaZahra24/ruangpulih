<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::whereNotNull('published_at')
                    ->latest('published_at')
                    ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date'
        ]);

        if ($request->published_at) {
            $validated['published_at'] = Carbon::createFromFormat('Y-m-d\TH:i', $request->published_at);
        }

        $post = new Post($validated);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('post_thumbnails', 'public');
            $post->thumbnail = $path;
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post berhasil ditambahkan');
    }

    public function show(Post $post)
    {
        if (!$post->published_at) {
            abort(404); 
        }

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        if ($post->published_at) {
            $post->published_at = $post->published_at->format('Y-m-d\TH:i');
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date'
        ]);

        if ($request->published_at) {
            $validated['published_at'] = Carbon::createFromFormat('Y-m-d\TH:i', $request->published_at);
        } else {
            $validated['published_at'] = null;
        }

        $post->fill($validated);

        if ($request->hasFile('thumbnail')) {
            if ($post->thumbnail) {
                Storage::disk('public')->delete($post->thumbnail);
            }

            $path = $request->file('thumbnail')->store('post_thumbnails', 'public');
            $post->thumbnail = $path;
        } elseif ($request->has('remove_thumbnail')) {
            Storage::disk('public')->delete($post->thumbnail);
            $post->thumbnail = null;
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post berhasil diperbarui');
    }

    public function destroy(Post $post)
    {
        if ($post->thumbnail) {
            Storage::disk('public')->delete($post->thumbnail);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus');
    }
}
