<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Master_booking;

class TPMPage extends Component
{
    public function render()
    {
        $userBoking = Master_booking::where('approval_level1', '=', 'Approved')->where('approval_level2', '=', 'Pending')->get();
        return view('livewire.t-p-m-page',['userBoking' => $userBoking])->layout('livewire.layouts.base');
    }
}
