<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use App\Models\Master_booking;
use Livewire\Component;

class HONRejected extends Component
{
    public function render()
    {
        $userBookings = EditingFac::where('approver1_id', '=', session('LoggedUser'))->where('approval_level1', '=', 'Rejected')->get();        
        $userApprovalSuccess= Master_booking::where('approver1_id', '=', session('LoggedUser'))->where('approval_level1', '=', 'Rejected')->get();
        return view('livewire.h-o-n-rejected',['userApproval' => $userApprovalSuccess],['userBooking' => $userBookings])->layout('livewire.layouts.client');
    }
}
