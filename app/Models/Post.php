<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'coin',
        'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image_path);
    }

    public function getAudioUrlAttribute()
    {
        return Storage::url($this->audio_path);
    }

    public function getImagePathAttribute()
    {
        return 'images/posts/' . $this->image;
    }

    public function getAudioPathAttribute()
    {
        return 'audios/posts/' . $this->audio;
    }
}
