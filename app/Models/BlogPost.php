<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $guarded =['title', 'blog_image','multiple_blog_image','description','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
