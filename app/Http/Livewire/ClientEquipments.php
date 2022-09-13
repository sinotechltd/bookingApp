<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClientEquipments extends Component
{
    public function render()
    {
        return view('livewire.client-equipments')->layout('livewire.layouts.client');
    }
}
