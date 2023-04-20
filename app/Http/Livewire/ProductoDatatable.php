<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Producto;

class ProductoDatatable extends DataTableComponent
{
    protected $model = Producto::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Codigo barras", "codigo_barras")
                ->sortable(),
            Column::make("Descripcion", "descripcion")
                ->sortable(),
            Column::make("Precio compra", "precio_compra")
                ->sortable(),
            Column::make("Precio venta", "precio_venta")
                ->sortable(),
            Column::make("Existencia", "existencia")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            ButtonGroupColumn::make('Acciones')
                ->attributes(function($row) {
                return ['class' => 'space-x-3',];
            })    
            ->buttons([
                LinkColumn::make('edit')
                ->title(fn($row) =>'Editar')
                ->location(fn($row) => route('productos.edit',$row))
                ->attributes(function($row){
                     return[
                       'target' => '_blank',
                       'class' => 'px-3 py-2 bg-blue-500 hover:bg-blue-700 rounded-lg text-white text-xs font-bold hover:no-underline',
                     ];
                }),   
                LinkColumn::make('delete')
                     ->title(fn($row) =>'Eliminar')
                     ->location(fn($row) => route('productos.destroy',$row))
                     ->attributes(function($row){
                          return[
                            'class' => 'px-3 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white text-xs font-bold hover:no-underline',
                          ];
                     }),  
            ])
        ];
    }
}
