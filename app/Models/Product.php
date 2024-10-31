<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * Um produto pertence a uma categoria
     * 
     * @return BelongsTo 
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Um produto tem muitas variações
     * 
     * @return HasMany 
     */
    public function variations(): HasMany
    {
        return $this->hasMany(ProductVariation::class);
    }
}
