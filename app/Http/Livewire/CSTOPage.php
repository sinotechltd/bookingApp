<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Master_booking;

class CSTOPage extends Component
{
    public function render()
    {
        $userBoking = Master_booking::where('approval_level2', '=', 'Approved')->where('approval_level3', '=', 'Pending')->get();
        return view('livewire.c-s-t-o-page', ['userBoking' => $userBoking])->layout('livewire.layouts.base');
    }
}
