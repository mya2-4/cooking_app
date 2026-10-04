<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\RecipeIngredient;
use App\Models\RecipeProcedure;

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
        $recipes = Recipe::all();
        return view('post.myrecipe',compact('recipes'));
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

    //投稿機能

    public function storeRecipe(Request $request)
    {
        $request->validate([
            'dish_name' => 'required',
            'memo' => 'nullable',
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id',
            'materials' => 'required|array',
            'quantities' => 'required|array',
        ]);

        // レシピを登録
        $recipe = Recipe::create([
            'user_id' => 1,
            'dish_name' => $request->input('dish_name'),
            'memo' => $request->input('memo'),
        ]);

        // カテゴリを登録
        $recipe->categories()->sync(
            $request->input('category_ids')
        );

        // 材料を登録
        foreach ($request->input('materials') as $index => $material) {

            RecipeIngredient::create([
                'recipe_id' => $recipe->id,
                'material' => $material,
                'quantity' => $request->input('quantities')[$index],
            ]);
        }

    foreach ($request->input('procedures') as $index => $procedure) {

        RecipeProcedure::create([
            'recipe_id' => $recipe->id,
            'procedure' => $procedure,
            'step' => $index + 1,
        ]);
    }
    return redirect('/myrecipe');
    }

}