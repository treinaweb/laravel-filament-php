<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * Uma categoria possui muitos produtos
     * 
     * @return HasMany 
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
