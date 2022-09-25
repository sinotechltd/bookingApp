<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Livewire\Component;
use App\Models\Master_booking;

class TPMPrejected extends Component
{
    public function index()
    {
        $userBooking = EditingFac::select('editing_facs.*', 'suits.suitName', 'users.name')
            ->where('approver3_id', '=', session('LoggedUser'))->where('approval_level3', '=', 'Rejected')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->get();
        $userApproval = Master_booking::select('master_bookings.*', 'programs_tables.program_name', 'inventories.equipname', 'users.name')
            ->where('master_bookings.approver2_id', '=', session('LoggedUser'))->where('master_bookings.approval_level2', '=', 'Rejected')
            ->join('users', 'master_bookings.user_id', 'users.id')
            ->join('programs_tables', 'master_bookings.program_title', 'programs_tables.id')
            ->join('inventories', 'master_bookings.items_booked', 'inventories.id')
            ->get();
        return view('livewire.t-p-m-prejected', compact('userBooking', 'userApproval'))->layout('livewire.layouts.base');
    }
    public function render()
    {
        $userApprovalSuccess = Master_booking::where('approver2_id', '=', session('LoggedUser'))->where('approval_level2', '=', 'Rejected')->get();
        return view('livewire.t-p-m-prejected', compact('userBookings', 'userApproval'))->layout('livewire.layouts.base');
    }
}
