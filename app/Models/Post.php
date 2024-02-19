<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'title', 'slug', 'body', 'image', 'category_id'
    ];

    public function categories()
    {
        $this->belongsTo(Post::class);
    }
}