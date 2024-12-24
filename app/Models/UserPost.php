<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPost extends Model
{
    use HasFactory;
    protected $table="user_posts";
    protected $fillable = ['title', 'description','image', 'user_id'];

    public function user()
        {
            return $this->belongsTo(User::class);
        }
}
