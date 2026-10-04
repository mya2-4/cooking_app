<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Recipe;

class RecipeIngredient extends Model
{
    protected $fillable = [
        'recipe_id',
        'material',
        'quantity',
    ];

    public function recipe(): BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }
}