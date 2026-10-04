<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('post.makemyrecipe', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = Category::create([
            'category_name' => $request->input('category_name'),
        ]);

        return response()->json($category);
    }
}