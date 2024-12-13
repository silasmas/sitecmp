<?php

namespace App\Livewire;

use Livewire\Component;

class TestSearch extends Component
{
    public $name = 'silas';

    public function render()
    {
        return view('livewire.test-search');
    }
}
