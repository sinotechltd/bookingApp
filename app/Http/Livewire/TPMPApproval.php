<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Livewire\Component;
use App\Models\Master_booking;

class TPMPApproval extends Component
{
    public function render()
    {
        $userApproval= Master_booking::where('approver2_id', '=', session('LoggedUser'))->where('approval_level2', '=', 'Approved')->get();
        $userBookings = EditingFac::select('editing_facs.*','suits.suitName','users.name','programs_tables.program_name','inventories.equipname')
        ->where('approver2_id', '=', session('LoggedUser'))
        ->where('approval_level2', '=', 'Approved')
        ->join('suits','editing_facs.suitID','suits.id')
        ->join('users','editing_facs.user_id','users.id')
        ->join('programs_tables','editing_facs.program_title','programs_tables.id')
        ->join('inventories','editing_facs.requirements','inventories.id')
        ->get();
        //Log:: message($userBookings);
        return view('livewire.t-p-m-p-approval',compact('userBookings','userApproval'))->layout('livewire.layouts.base');
    }
}
