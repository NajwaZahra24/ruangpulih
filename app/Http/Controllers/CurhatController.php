<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curhat;
use Illuminate\Support\Facades\Validator;

class CurhatController extends Controller
{
    /**
     * Display the ruang curhat page with all messages
     */
    public function index()
    {
        // Get latest 10 user messages, ordered by newest first
        $userMessages = Curhat::latest()->take(10)->get();
        
        return view('ruangcurhat', compact('userMessages'));
    }
    
    /**
     * Store a new curhat message
     */
    public function store(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:100',
            'message' => 'required|string|max:1000|min:10',
        ], [
            'message.required' => 'Pesan tidak boleh kosong.',
            'message.max' => 'Pesan tidak boleh lebih dari 1000 karakter.',
            'message.min' => 'Pesan minimal 10 karakter.',
            'name.max' => 'Nama tidak boleh lebih dari 100 karakter.',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Create new curhat entry
        Curhat::create([
            'name' => $request->name ?: 'Anonim',
            'message' => $request->message,
            'is_approved' => true, // Auto approve, or you can set to false for manual approval
        ]);
        
        return redirect()->route('ruangcurhat.index')
            ->with('success', 'Curhatanmu berhasil dikirim! Terima kasih telah berbagi.');
    }
    
    /**
     * Get all messages for API (if needed)
     */
    public function getMessages()
    {
        $messages = Curhat::where('is_approved', true)
            ->latest()
            ->take(20)
            ->get();
            
        return response()->json($messages);
    }
}