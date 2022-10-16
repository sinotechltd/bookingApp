<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use App\Models\Master_booking;
use Livewire\Component;

class ClientView extends Component
{
    public function viewRecord($id)
    {
        $record = Master_booking::select('master_bookings.*', 'programs_tables.program_name','users.name')
            ->where('master_bookings.id', '=', $id)
            ->join('programs_tables', 'master_bookings.program_title', 'programs_tables.id')
            //->join('inventories', 'master_bookings.items_booked', 'inventories.id')
            ->join('users', 'master_bookings.user_id', 'users.id')
            ->first();
        $itemname = Master_booking::select('master_bookings.items_booked')->where('master_bookings.id', '=', $id);
        //unserialize database data \
        //$itemname = $itemnameC->attributesToArray();
        $itemNameUnserial = unserialize($record->items_booked);
       // $itemNameUnserialed = $itemNameUnserial->toArray();

        //then search fro records with the same records.
        $itemName = Inventory::where(function ($query) use ($itemNameUnserial) {
            foreach ($itemNameUnserial as $item) {
                $query->where('id', '=', $item);
            }})->get();
        //dd($results);
        //$itemName = Inventory::select('equipname')->where('id',"implode(',',$itemnameArray)")->get();

        return view('livewire.client-view', compact('record', 'itemName'));
    }
    public function render()
    {
        return view('livewire.client-view');
    }
}
