<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {
//     public function index() {
//         $posts=Post::all();
//         // return view('posts.index',compact('post'));
    // }

    public function store(Request $request) {
        $post=Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        
        return $post;
    }

    public function index() {
    $posts=Post::all();
    return view('post.index', compact('posts'));
}

    public function show($id) {
        $post=Post::findOrFail($id);
        return $post;
    }

    public function update(Request $request, $id) {
        $post=Post::findOrFail($id);
        $post->update([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        return $post;
    }

    public function destory($id) {
        $post=Post::findOrFail($id);
        $post->delete();
        return $post;
    }
}