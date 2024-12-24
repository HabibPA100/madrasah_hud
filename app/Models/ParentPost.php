<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentPost extends Model
{
    use HasFactory;
    protected $table = 'parent_posts';
    protected $fillable = ['title', 'description','image','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
