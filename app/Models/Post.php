<?php

namespace LaraDev\Models;

use Illuminate\Database\Eloquent\Model;
use LaraDev\User;

class Post extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'author', 'slug'];

    public const RELATIONSHIP_POST_CATEGORY = 'post_category';

    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, self::RELATIONSHIP_POST_CATEGORY, 'post','category');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'item');
    }

    public function getDateFormatAttribute()
    {
        return date('d/m/Y H:i:s', strtotime($this->created_at));
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
