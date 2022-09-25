<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use Livewire\Component;
use App\Models\Master_booking;
use App\Models\User;

class HONApproval extends Component
{
    public $ptitle, $program_topic, $team_leader, $producer, $operation_crew, $bookingdate, $recordingtime, $settingtime, $rehearsal_time, $location, $designer, $guests, $equiments, $presenters, $remarks, $bookin_id;
    public $comments, $reject_bookingId;


    public function rejectReason($id)
    {

        $id =
            $this->dispatchBrowserEvent('show-modal');
        $this->validate([
            'comments' => 'required',
        ]);
        $userId = session('LoggedUser');
        $reject = EditingFac::where('id', $id)->first();
        $reject->approval_level1 = 'Rejected';
        $reject->approval1_time = now();
        $reject->approval2_time = now();
        $reject->approval3_time = now();
        $reject->approval_level2 = 'Rejected';
        $reject->approval_level3 = 'Rejected';
        $reject->comments = $this->comments;
        $reject->approver1_id = $userId;
        $reject->save();
    }
    public function render()
    {
        $userBoking = Master_booking::select('master_bookings.*', 'users.name')
            ->where('approval_level1', '=', 'Pending')
            ->join('users', 'master_bookings.user_id', 'users.id')
            ->get();
        $userBookings = EditingFac::select('editing_facs.*', 'suits.suitName', 'users.name', 'programs_tables.program_name', 'inventories.equipname')
            ->where('approval_level1', '=', 'Pending')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->join('inventories', 'editing_facs.requirements', 'inventories.id')
            ->get();
        return view('livewire.h-o-n-approval', ['userBoking' => $userBoking], ['userBooking' => $userBookings])->layout('livewire.layouts.base');
    }
    public function resetInput()
    {
        $this->bookingid = '';
        $this->equiments = '';
        $this->bookingdate = '';
        $this->ptitle = '';
        $this->program_topic = '';
        $this->producer = '';
        $this->location = '';
        $this->recordingtime = '';
        $this->settingtime = '';
        $this->rehearsal_time = '';
        $this->designer = '';
        $this->guests = '';
        $this->presenters = '';
        $this->remarks = '';
        $this->operation_crew = '';
        $this->team_leader = '';
    }
}
