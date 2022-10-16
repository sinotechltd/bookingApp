<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Illuminate\Http\Request;
use Livewire\Component;

class CstoApproveEditView extends Component
{
    public function veiwline(int $id)
    {
        $record = EditingFac::select('editing_facs.*', 'users.name', 'programs_tables.program_name','suits.suitName')
            ->where('editing_facs.id', $id)
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            //->join('inventories', 'editing_facs.requirements', 'inventories.id')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->first();
            return view('livewire.csto-approve-edit-view', compact('record'));
    }
    public function aproveline(Request $request)
    {
        $userId = session('LoggedUser');
        //validate comment
        $request->validate([
            'comments' => 'required',
        ]);

        $bookingline = EditingFac::where('id', $request->recordid)->first();
        $bookingline->approval_level3 = 'Approved';
        $bookingline->approver3_id = $userId;
        $bookingline->approval3_time = now();
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
        return view('livewire.csto-approve-edit-view');
    }
}
