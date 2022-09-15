<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Master_booking;

class CSTOPRejected extends Component
{
    public function render()
    {
        $userApprovalSuccess= Master_booking::where('approver3_id', '=', session('LoggedUser'))->where('approval_level3', '=', 'Rejected')->get();
        return view('livewire.c-s-t-o-p-rejected',['userApproval' => $userApprovalSuccess])->layout('livewire.layouts.client');        
    }
}
