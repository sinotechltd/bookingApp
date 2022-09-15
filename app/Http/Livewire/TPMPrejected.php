<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Master_booking;

class TPMPrejected extends Component
{
    public function render()
    {
        $userApprovalSuccess= Master_booking::where('approver2_id', '=', session('LoggedUser'))->where('approval_level2', '=', 'Rejected')->get();
        return view('livewire.t-p-m-prejected',['userApproval' => $userApprovalSuccess])->layout('livewire.layouts.client');  
    }
}
