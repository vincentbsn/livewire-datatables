<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UsersTable extends LivewireDatatable
{
    public $hideable = 'select';
    public $exportable = true;

    public function builder()
    {
        return User::query();
    }

    public function columns()
    {
        return [
            Column::checkbox(),

            NumberColumn::name('id')
                ->label('ID')
                ->filterable()
                ->linkTo('user', 6),

            Column::name('name')
                ->filterable()
                ->searchable()
                ->editable(),

            BooleanColumn::name('email_verified_at')
                ->label('Email Verified')
                ->filterable(),

            Column::name('email')
                ->searchable()
                ->filterable(),
                // ->view('components.email'),
        ];
    }
}
