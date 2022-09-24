<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Livewire\Component;
use App\Models\Master_booking;

class CSTOPApproved extends Component
{
    public function render()
    {
        $userApproval = Master_booking::where('approver3_id', '=', session('LoggedUser'))->where('approval_level3', '=', 'Approved')->get();
        $FuserApprovalSuccess = EditingFac::select('editing_facs.*', 'suits.suitName', 'users.name', 'programs_tables.program_name', 'inventories.equipname')
            ->where('approver3_id', '=', session('LoggedUser'))
            ->where('approval_level3', '=', 'Approved')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->join('inventories', 'editing_facs.requirements', 'inventories.id')
            ->get();
        return view('livewire.c-s-t-o-p-approved', compact('userApproval', 'FuserApprovalSuccess'))->layout('livewire.layouts.base');
    }
}
