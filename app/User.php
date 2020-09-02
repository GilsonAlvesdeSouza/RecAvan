<?php

namespace LaraDev;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use LaraDev\Models\Address;
use LaraDev\Models\Comment;
use LaraDev\Models\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addressDelivery()
    {
        return $this->hasOne(Address::class, 'user', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class,'author','id');
    }

    public function commentesOnMyPost()
    {
        return $this->hasManyThrough(Comment::class,Post::class,'author','post','id', 'id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'item');
    }

    public function scopeStudents($query)
    {
        return $query->where('level', '<=', '5');
    }

    public function scopeAdms($query)
    {
        return $query->where('level', '>', '5');
    }
}
