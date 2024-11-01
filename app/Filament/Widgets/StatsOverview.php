<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariation;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Quantidade de produtos', Product::count()),
            Stat::make('Quantidade de Variações de produtos', ProductVariation::count()),
            Stat::make('Quantidade de categorias de produtos', Category::count()),
        ];
    }
}
