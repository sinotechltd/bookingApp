<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Master_booking;

class CSTOPApproved extends Component
{
    public function render()
    {
        $userApprovalSuccess= Master_booking::where('approver3_id', '=', session('LoggedUser'))->where('approval_level3', '=', 'Approved')->get();
        return view('livewire.c-s-t-o-p-approved', ['userApproval' => $userApprovalSuccess])->layout('livewire.layouts.base');
    }
}
