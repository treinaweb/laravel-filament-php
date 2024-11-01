<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ProductResource;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable(),
            ])->label('Exportar para Excel')
        ];
    }
}
