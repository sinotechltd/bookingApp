<?php

namespace App\Http\Livewire;

use App\Models\Master_booking;
use App\Models\User;
use Livewire\Component;

class Reportview extends Component
{
    public function veiwline(int $id)
    {
        $record = Master_booking::select('master_bookings.*', 'users.name', 'programs_tables.program_name')
        ->where('master_bookings.id', $id)
        ->join('users', 'master_bookings.user_id', 'users.id')
        ->join('programs_tables', 'master_bookings.program_title', 'programs_tables.id')
       // ->join('inventories', 'master_bookings.items_booked', 'inventories.id')           
        ->first();
        //pass name to the front-end
        $approver1name=User::where('id',$record->approver1_id);
        $approver2name=User::where('id',$record->approver2_id);
        $approver3name=User::where('id',$record->approver3_id);
        return view('livewire.reportview', compact('record','approver1name','approver2name','approver3name'));
    }
    public function render()
    {
        return vIew('livewire.reportview')->layout('livewire.layouts.base');
    }
}
