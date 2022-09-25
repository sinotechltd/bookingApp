<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Livewire\Component;
use App\Models\Master_booking;

class CSTOPRejected extends Component
{
    public function render()
    {
        $userBooking = EditingFac::select('editing_facs.*', 'suits.suitName', 'users.name')
        ->where('approver3_id', '=', session('LoggedUser'))->where('approval_level3', '=', 'Rejected')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->get();
        $userApprovalSuccess = Master_booking::select('master_bookings.*', 'programs_tables.program_name', 'inventories.equipname', 'users.name')
            ->where('approver3_id', '=', session('LoggedUser'))->where('approval_level3', '=', 'Rejected')
            ->join('users', 'master_bookings.user_id', 'users.id')
            ->join('programs_tables', 'master_bookings.program_title', 'programs_tables.id')
            ->join('inventories', 'master_bookings.items_booked', 'inventories.id')
            ->get();
        return view('livewire.c-s-t-o-p-rejected', ['userApproval' => $userApprovalSuccess],compact('userBooking'))->layout('livewire.layouts.client');
    }
}
