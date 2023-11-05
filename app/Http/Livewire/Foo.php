<?php

namespace App\Http\Livewire;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Foo extends LivewireDatatable
{
    public function builder()
    {
        dd('toto');
    }

    public function columns()
    {
        //
    }
}
