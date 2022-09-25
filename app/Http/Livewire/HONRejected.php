<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use App\Models\Master_booking;
use Livewire\Component;

class HONRejected extends Component
{
    public function render()
    {
        $userBookings = EditingFac::select('editing_facs.*', 'suits.suitName', 'users.name')
            ->where('approver1_id', '=', session('LoggedUser'))->where('approval_level1', '=', 'Rejected')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->get();
        $userApprovalSuccess = Master_booking::select('master_bookings.*', 'programs_tables.program_name', 'inventories.equipname', 'users.name')
            ->where('approver1_id', '=', session('LoggedUser'))->where('approval_level1', '=', 'Rejected')
            ->join('users', 'master_bookings.user_id', 'users.id')
            ->join('programs_tables', 'master_bookings.program_title', 'programs_tables.id')
            ->join('inventories', 'master_bookings.items_booked', 'inventories.id')
            ->get();

        return view('livewire.h-o-n-rejected', ['userApproval' => $userApprovalSuccess], ['userBooking' => $userBookings])->layout('livewire.layouts.client');
    }
}
