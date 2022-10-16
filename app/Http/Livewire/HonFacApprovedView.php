<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use App\Models\Master_booking;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HonFacApprovedView extends Component
{
    //public $record;
    public function viewRecord($id)
    {
        $record = Master_booking::select('master_bookings.*','programs_tables.program_name')
        ->where('master_bookings.id','=',$id)
        ->join('programs_tables','master_bookings.program_title','programs_tables.id')
       // ->join('inventories','master_bookings.items_booked','inventories.id')
        ->first();
        $recordname = Master_booking::select('master_bookings.user_id','users.name')
        ->where('master_bookings.id','=',$id)
        ->join('users','master_bookings.user_id','users.id')        
        ->first();
       // $this->record= $vrecord;
        return view('livewire.hon-fac-approved-view',compact('record','recordname'));
    }
    public function render(int $id, Request $request)
    {
        //$record = Master_booking::where('id',$id);
        return view('livewire.hon-fac-approved-view')->layout('livewire.layouts.base');
       
    }
}
