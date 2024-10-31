<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariation extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'name', 'description', 'image'];

    /**
     * Uma variação pertence a um produto
     * 
     * @return BelongsTo 
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
