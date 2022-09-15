<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use App\Models\Master_booking;
use Livewire\Component;

class HONApproved extends Component
{
    public function render()
    {
        $userApprovalSuccess= Master_booking::where('approver1_id', '=', session('LoggedUser'))->where('approval_level1', '=', 'Approved')->get();
        $userBookings = EditingFac::where('approver1_id', '=', session('LoggedUser'))->where('approval_level1', '=', 'Approved')->get();
        return view('livewire.h-o-n-approved',['userApproval' => $userApprovalSuccess],['userBooking' => $userBookings])->layout('livewire.layouts.client');
    }
}
