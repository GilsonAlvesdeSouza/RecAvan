<?php

namespace LaraDev\Models;

use Illuminate\Database\Eloquent\Model;
use LaraDev\User;

class Address extends Model
{
    protected $fillable = ['address', 'number', 'complement', 'zipcode', 'city', 'state'];

    public function user()
    {
        return $this->belongsTo(User::class,'user','id');
    }
}
