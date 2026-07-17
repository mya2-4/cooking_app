<?php

namespace App\Http\Controllers;

class PostController extends Controller {

    // ページ移行

    public function home() {
        return view('post.home');
    }
    
    public function login() {
        return view('post.login');
    }
    
    public function register() {
        return view('post.register');
    }
    
    public function welcomeback() {
        return view('post.welcomeback');
    }
    
    public function register2() {
        return view('post.register2');
    }
    
    public function nicetomeetyou() {
        return view('post.nicetomeetyou');
    }

    public function myrecipe() {
        return view('post.myrecipe');
    }

    public function changepassword() {
        return view('post.changepassword');
    }
    
    public function recipies() {
        return view('post.recipies');
    }

    public function updaterecipies() {
        return view('post.updaterecipies');
    }

    // ボタン機能
    
    }
//     public function index() {
//         $posts=Post::all();
//         // return view('posts.index',compact('post'));
    // }

//     public function store(Request $request) {
//         $post=Post::create([
//             'title'=>$request->title,
//             'content'=>$request->content,
//         ]);
        
//         return $post;
//     }

//     public function mylog() {
//     $posts=Post::all();
//     return view('post.index', compact('posts'));
// }

//     public function show($id) {
//         $post=Post::findOrFail($id);
//         return $post;
//     }

//     public function update(Request $request, $id) {
//         $post=Post::findOrFail($id);
//         $post->update([
//             'title'=>$request->title,
//             'content'=>$request->content,
//         ]);
//         return $post;
//     }

//     public function destory($id) {
//         $post=Post::findOrFail($id);
//         $post->delete();
//         return $post;
//     }

