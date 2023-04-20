<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Models\User;

class UserDatatable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Fecha Creacion", "created_at")
                ->sortable(),
            Column::make("Fecha Actualizacion", "updated_at")
                ->sortable(),
            ButtonGroupColumn::make('Acciones')
                ->attributes(function($row) {
                return ['class' => 'space-x-2',];
            })    
            
        ];
    }
}
