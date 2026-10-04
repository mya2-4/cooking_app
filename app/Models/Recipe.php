<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\RecipeIngredient;
use App\Models\RecipeProcedure;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'dish_name',
        'memo',
    ];

    public function ingredients(): HasMany{
        return $this->hasMany(RecipeIngredient::class);//「1つのRecipeは、複数の材料を持っています」
    }

    public function procedures(): HasMany{
        return $this->hasMany(RecipeProcedure::class);//1つのRecipeは、複数の作り方を持っています」
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'recipe_category')->withTimestamps();
    }
}
