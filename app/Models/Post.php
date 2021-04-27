<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillabel = [
      'title', 'body', 'is_public', 'published_at'
    ];

    protected $guarded = [];

    protected $casts = [
      'is_public' => 'bool',
      'published_at' => 'datetime'
    ];
}
