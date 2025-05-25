<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Masrahiya extends Model
{
    use SoftDeletes; 

    protected $fillable = [
        'title',
        'description',
        'video_url',
    ];
}

