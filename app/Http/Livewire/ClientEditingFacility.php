<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClientEditingFacility extends Component
{
    public function render()
    {
        return view('livewire.client-editing-facility')->layout('livewire.layouts.client');
    }
}
