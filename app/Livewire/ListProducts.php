<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class ListProducts extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(Product::query())
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('slug')
                    ->icon('heroicon-o-key')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->label('Categoria'),
                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y h:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime('d/m/Y h:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }

    public function render()
    {
        return view('livewire.list-products');
    }
}
