<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Master_booking;
use App\Models\User;

class HONApproval extends Component
{ 
    public $ptitle, $program_topic, $team_leader, $producer, $operation_crew, $bookingdate, $recordingtime, $settingtime, $rehearsal_time, $location, $designer, $guests, $equiments, $presenters, $remarks,$bookingid;
    
    public function render()
    {
        $userBoking = Master_booking::where('approval_level1', '=', 'Pending')->get();
        return view('livewire.h-o-n-approval', ['userBoking' => $userBoking])->layout('livewire.layouts.base');
    }
    public function takeAction($bookingid)    
    {
        $approve='Approved';
        $rejecte='Rejected';

        $listBokings = Master_booking::find($bookingid);
        if($listBokings){

            $this->$bookingid=$listBokings->booking_id;
            $this->items_booked = $listBokings->equiments;
            $this->date_booked = $listBokings->bookingdate;
            $this->program_title = $listBokings->ptitle;
            $this->program_topic = $listBokings->program_topic;
            $this->producer = $listBokings->producer;
            $this->location = $listBokings->location;
            $this->recording_time = $listBokings->recordingtime;
            $this->setting_time = $listBokings->settingtime;
            $this->rehearsal_time = $listBokings->rehearsal_time;
            $this->designer = $listBokings->designer;
            $this->guests = $listBokings->guests;
            $this->presenters = $listBokings->presenters;
            $this->remarks = $listBokings->remarks;
            $this->operation_crew = $listBokings->operation_crew;
            $this->shift_leader = $listBokings->team_leader;
            $this->$approve=$listBokings->approval_level1;
        }
        else{
            return redirect()->to('/hon');
        }

        // return view('livewire.h-o-n-approval', ['listBokings' => $listBokings])->layout('livewire.layouts.base');

        // $this->dispatchBrowserEvent('close-modal');
        // $this->dispatchBrowserEvent('viewDatal');
    }
} 