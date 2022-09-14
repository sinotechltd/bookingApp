<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminConsole extends Component
{
    public function render()
    {
        $userUsers= User::all();
        return view('livewire.admin-console', ['systenUsers' => $userUsers])->layout('livewire.layouts.base');
    }
}
