<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\EditingFac;

class HonEditApprovedView extends Component
{
    public function viewRecord($id)
    {
        $record = EditingFac::select('editing_facs.*', 'programs_tables.program_name', 'inventories.equipname','suits.suitName')
            ->where('editing_facs.id', '=', $id)
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->join('inventories', 'editing_facs.requirements', 'inventories.id')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->first();
        $recordname = EditingFac::select('editing_facs.user_id', 'users.name')
            ->where('editing_facs.id', '=', $id)
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->first();
        // $this->record= $vrecord;
        return view('livewire.hon-edit-approved-view', compact('record', 'recordname'));
    }
    public function render()
    {
        return view('livewire.hon-edit-approved-view');
    }
}
