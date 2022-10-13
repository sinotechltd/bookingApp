<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use App\Models\Master_booking;
use Livewire\Component;
use Illuminate\Http\Request;

class HonconfirmApprove extends Component
{
    public function veiwline(int $id)
    {
        $record = Master_booking::select('master_bookings.*', 'users.name', 'programs_tables.program_name')
            ->where('master_bookings.id', $id)
            ->join('users', 'master_bookings.user_id', 'users.id')
            ->join('programs_tables', 'master_bookings.program_title', 'programs_tables.id')
            //->join('inventories', 'master_bookings.items_booked', 'inventories.id')
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
        return view('livewire.honconfirm-approve', compact('record','itemName'));
    }
    public function aproveline(Request $request)
    {
        $userId = session('LoggedUser');
        //validate comment
        $request->validate([
            'comments' => 'required',
        ]);

        $bookingline = Master_booking::where('id', $request->recordid)->first();
        $bookingline->approval_level1 = 'Approved';
        $bookingline->approver1_id = $userId;
        $bookingline->approval1_time = now();
        $bookingline->comments = $request->comments;
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Approved');
            return redirect('/');
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }
    }
    public function render()
    {
        return view('livewire.honconfirm-approve');
    }
}
