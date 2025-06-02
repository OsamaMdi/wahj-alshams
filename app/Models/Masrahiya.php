<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masrahiya extends Model
{
    protected $table = 'masrahiyat';

    protected $fillable = [
        'title',
        'author',
        'director',
        'assistant_director',
        'music_composer',
        'artistic_consultant',
        'collaborators',
        'number_participants',
        'performance_dates',
        'performance_locations',
        'play_type',
        'significance',
        'inspiration_source',
        'artistic_paragraph',
        'image_path',
        'youtube_url',
        'characters',
    ];

    protected $casts = [
        'characters' => 'array',
        'performance_dates' => 'date',
    ];
}
