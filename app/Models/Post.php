<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function index()
    {
        $posts = Post::orderBy('created_at','DESC')->get();
        $data = ['posts'=>$posts];
        return view('admin.posts.index',$data);
    }

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
    ];

    protected $casts = [
        'title' => 'string',
        'content' => 'string',
    ];
}
