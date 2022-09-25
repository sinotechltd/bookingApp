<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Livewire\Component;

class FclientView extends Component
{
    
    public function viewRecord($id)
    {
        $record = EditingFac::select('editing_facs.*', 'programs_tables.program_name', 'inventories.equipname','suits.suitName','users.name')
            ->where('editing_facs.id', '=', $id)
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->join('inventories', 'editing_facs.requirements', 'inventories.id')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->first();       
            return view('livewire.fclient-view', compact('record'));
    }
    public function render()
    {
        return view('livewire.fclient-view');
    }
}
