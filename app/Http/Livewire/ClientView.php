<?php

namespace App\Http\Livewire;

use App\Models\Master_booking;
use Livewire\Component;

class ClientView extends Component
{
    public function viewRecord($id)
    {
        $record = Master_booking::select('master_bookings.*', 'programs_tables.program_name', 'inventories.equipname','users.name')
            ->where('master_bookings.id', '=', $id)
            ->join('programs_tables', 'master_bookings.program_title', 'programs_tables.id')
            ->join('inventories', 'master_bookings.items_booked', 'inventories.id')
            ->join('users', 'master_bookings.user_id', 'users.id')
            //->join('suits', 'master_bookings.suitID', 'suits.id')
            ->first();       
            return view('livewire.client-view', compact('record'));
    }
    public function render()
    {
        return view('livewire.client-view');
    }
}
