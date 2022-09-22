<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Livewire\Component;
use App\Models\Master_booking;

class CSTOPage extends Component
{
    public function render()
    {
        $userBoking = Master_booking::where('approval_level2', '=', 'Approved')->where('approval_level3', '=', 'Pending')->get();
        $userBooking = EditingFac::where('approval_level2', '=', 'Approved')->where('approval_level3', '=', 'Pending')->get();
        return view('livewire.c-s-t-o-page', compact('userBoking','userBooking'))->layout('livewire.layouts.base');
    }
}

