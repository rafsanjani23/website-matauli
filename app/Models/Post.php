<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'categories',
        'title',
        'content',
        'image',
        'slug',
        'status',
        'published_at',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    protected static function booted()
    {
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }
}
