<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Livewire\Component;
use App\Models\Master_booking;

class TPMPage extends Component
{
    public function render()
    {
        $userBoking = Master_booking::where('approval_level1', '=', 'Approved')->where('approval_level2', '=', 'Pending')->get();
        $userBooking = EditingFac::where('approval_level1', '=', 'Approved')->where('approval_level2', '=', 'Pending')->get();
        return view('livewire.t-p-m-page',compact('userBoking','userBooking'))->layout('livewire.layouts.base');
    }
}
