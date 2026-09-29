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

    public function mylogs() {
        return view('post.mylogs');
    }

    // モータル確認用画面

    public function modal() {
        return view('post.modal');
    }

    public function logs() {
        return view('post.logs');
    }

    public function makemyrecipe() {
        return view('post.makemyrecipe');
    }

}