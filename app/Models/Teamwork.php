<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teamwork extends Model
{
    use HasFactory;

    protected $table = 'teamwork';

    protected $fillable = [
        'name',
        'image_path',
        'description',
        'home',
    ];
}
