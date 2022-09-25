<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Livewire\Component;
use App\Models\Master_booking;

class TPMPage extends Component
{
    public function render()
    {
        $userBoking = Master_booking::select('master_bookings.*', 'users.name')
            ->where('approval_level1', '=', 'Approved')->where('approval_level2', '=', 'Pending')
            ->join('users', 'master_bookings.user_id', 'users.id')
            ->get();
        $userBooking = EditingFac::select('editing_facs.*', 'suits.suitName', 'users.name', 'programs_tables.program_name', 'inventories.equipname')
            ->where('approval_level1', '=', 'Approved')->where('approval_level2', '=', 'Pending')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->join('inventories', 'editing_facs.requirements', 'inventories.id')
            ->get();
        return view('livewire.t-p-m-page', compact('userBoking', 'userBooking'))->layout('livewire.layouts.base');
    }
}
