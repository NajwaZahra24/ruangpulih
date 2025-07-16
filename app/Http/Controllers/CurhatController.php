<?php

namespace App\Http\Controllers;

use App\Models\Curhat;
use Illuminate\Http\Request;

class CurhatController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'pesan' => 'required|string',
        ]);

        Curhat::create([
            'pesan' => $request->pesan,
        ]);

        return redirect()->route('curhat.curhat');
    }

    public function curhat()
    {
        $curhats = Curhat::latest()->get();
        return view('curhat.curhat', compact('curhats'));
    }
}

