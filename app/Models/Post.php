<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model {
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory, Notifiable;

    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'category'];

    public function category() {
        //
        return $this->belongsTo(Category::class);
    }
}
