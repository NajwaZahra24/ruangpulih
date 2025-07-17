<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Curhat extends Model
{
    use HasFactory;
    
    protected $table = 'curhats';
    
    protected $fillable = [
        'name',
        'message',
        'is_approved',
    ];
    
    protected $casts = [
        'is_approved' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    
    /**
     * Get the display name (show "Anonim" if name is empty)
     */
    public function getDisplayNameAttribute()
    {
        return $this->name ?: 'Anonim';
    }
    
    /**
     * Get formatted created date
     */
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d M Y');
    }
    
    /**
     * Get truncated message for preview
     */
    public function getTruncatedMessageAttribute()
    {
        return strlen($this->message) > 150 
            ? substr($this->message, 0, 150) . '...' 
            : $this->message;
    }
    
    /**
     * Scope for approved messages only
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }
    
    /**
     * Scope for recent messages
     */
    public function scopeRecent($query, $limit = 10)
    {
        return $query->latest()->take($limit);
    }
}