<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Recipe;

class Category extends Model
{
    protected $fillable = [
        'category_name',
    ];

    public function recipes() {
        return $this->belongsToMany(Recipe::class, 'recipe_category')->withTimestamps();
    }
}