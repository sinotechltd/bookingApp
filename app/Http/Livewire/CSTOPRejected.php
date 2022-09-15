<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Master_booking;

class CSTOPRejected extends Component
{
    public function render()
    {
        $userBoking = Master_booking::where('approval_level3', '=', 'Approved')->get();
        return view('livewire.c-s-t-o-p-rejected', ['userBoking' => $userBoking])->layout('livewire.layouts.base');        
    }
}
