<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'post',
    ];

    /**
     * The Realtionship functiion with user.
     *
     * @var array
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
