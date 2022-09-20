<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Master_booking;

class TPMPApproval extends Component
{
    public function render()
    {
        $userApprovalSuccess= Master_booking::where('approver2_id', '=', session('LoggedUser'))->where('approval_level2', '=', 'Approved')->get();
        return view('livewire.t-p-m-p-approval',['userApproval' => $userApprovalSuccess])->layout('livewire.layouts.base');
    }
}
