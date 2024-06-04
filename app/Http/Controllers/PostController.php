<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $data = compact('posts');
        return view('index')->with($data);
    }

    public function detail($id)
    {
        $post = Post::with('comment')->find($id);
        $data = compact('post', 'id');
        return view('detail')->with($data);
    }

    public function create()
    {
        return view('new');
    }

    public function addComment(Request $request, $id)
    {
        $comment = new Comment;
        $comment->post_id = $id;
        $comment->content = $request->content;
        $comment->save();

        $post = Post::with('comment')->find($id);
        $data = compact('post', 'id');
        return view('detail')->with($data);
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('/');
    }
}
