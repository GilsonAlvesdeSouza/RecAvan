<?php

namespace LaraDev\Models;

use Illuminate\Database\Eloquent\Model;
use LaraDev\User;

class Post extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'author', 'slug'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
}
