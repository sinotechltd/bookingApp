<?php

namespace App\Http\Livewire;

use App\Models\Master_booking;
use Livewire\Component;

class HONRejected extends Component
{
    public function render()
    {
        
        $userApprovalSuccess= Master_booking::where('approver1_id', '=', session('LoggedUser'))->where('approval_level1', '=', 'Rejected')->get();
        return view('livewire.h-o-n-rejected',['userApproval' => $userApprovalSuccess])->layout('livewire.layouts.client');
    }
}
