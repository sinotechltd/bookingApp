<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use App\Models\Inventory;
use Livewire\Component;

class FclientView extends Component
{
    
    public function viewRecord($id)
    {
        $record = EditingFac::select('editing_facs.*', 'programs_tables.program_name','suits.suitName','users.name')
            ->where('editing_facs.id', '=', $id)
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            //->join('inventories', 'editing_facs.requirements', 'inventories.id')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->first();       
           
            $itemname = EditingFac::select('editing_facs.requirements')->where('editing_facs.id', '=', $id);            
            $itemNameUnserial = unserialize($record->requirements);
           // $itemNameUnserialed = $itemNameUnserial->toArray();
    
            //then search fro records with the same records.
            $itemName = Inventory::where(function ($query) use ($itemNameUnserial) {
                foreach ($itemNameUnserial as $item) {
                    $query->where('id', '=', $item);
                }
            })->get();
            return view('livewire.fclient-view', compact('record', 'itemName'));
               
    }
    public function render()
    {
        return view('livewire.fclient-view');
    }
}
