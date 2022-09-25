<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use App\Models\Master_booking;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class HONApproved extends Component
{
    public $viewBookingid, $viewUserid, $viewProgram, $viewItemsBooked, $viewlocation, $viewRecordingTime, $viewGuests, $viewLeader, $viewBookedDate, $viewApprovalTime, $viewRemarks, $viewapprovalComments;
    // public function console_log($output, $with_script_tags = true)
    // {
    //     $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
    //         ');';
    //     if ($with_script_tags) {
    //         $js_code = '<script>' . $js_code . '</script>';
    //     }
    //     echo $js_code;
    // }

    public function viewDetails($id)
    {
        $booking = Master_booking::where('id', $id)->first();

        $this->viewBookingid = $booking->id;
        $this->viewUserid = $booking->user_id;
        $this->viewProgram = $booking->program_title;
        $this->viewItemsBooked = $booking->items_booked;
        $this->viewlocation = $booking->location;
        $this->viewRecordingTime = $booking->recording_time;
        $this->viewGuests = $booking->guests;
        $this->viewLeader = $booking->shift_leader;
        $this->viewBookedDate = $booking->date_booked;
        $this->viewApprovalTime = $booking->approval1_time;
        $this->viewRemarks = $booking->remarks;
        // $this->viewapprovalComments =$booking->comments;
        $this->dispatchBrowserEvent('view-close-modal');
    }
    // public function closeViewmodal(){
    //     $this->viewBookingid ='';
    //     $this->viewUserid ='';
    //     $this->viewProgram ='';
    //     $this->viewItemsBooked ='';
    //     $this->viewlocation ='';
    //     $this->viewRecordingTime ='';
    //     $this->viewGuests ='';
    //     $this->viewLeader ='';
    //     $this->viewBookedDate ='';
    //     $this->viewApprovalTime ='';
    //     $this->viewRemarks ='';

    // }

    public function render()
    {
        $userApprovalSuccess = Master_booking::select('master_bookings.*', 'users.name')
            ->where('approver1_id', '=', session('LoggedUser'))->where('approval_level1', '=', 'Approved')
            ->join('users', 'master_bookings.user_id', 'users.id')
            ->get();
        $userBookings = EditingFac::select('editing_facs.*', 'suits.suitName', 'users.name', 'programs_tables.program_name', 'inventories.equipname')
            ->where('approver1_id', '=', session('LoggedUser'))->where('approval_level1', '=', 'Approved')
            ->join('suits', 'editing_facs.suitID', 'suits.id')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->join('inventories', 'editing_facs.requirements', 'inventories.id')
            ->get();
        //Log:: message($userBookings);
        return view('livewire.h-o-n-approved', ['userApproval' => $userApprovalSuccess], ['userBooking' => $userBookings])->layout('livewire.layouts.client');
    }
}
