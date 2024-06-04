<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $primaryKey = "post_id";

    function comment()
    {
        return $this->hasMany(Comment::class, 'post_id', 'post_id');
    }
}
