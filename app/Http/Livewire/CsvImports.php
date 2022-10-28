<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class CsvImports extends Component
{
    public string $model;

    public function getImportsProperty(): Collection
    {
        return auth()->user()->imports()->oldest()->get();
    }
    public function render()
    {
        return view('livewire.csv-imports');
    }
}
