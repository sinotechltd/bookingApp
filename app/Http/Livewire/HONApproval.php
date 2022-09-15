<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Master_booking;
use App\Models\User;

class HONApproval extends Component
{
    public $ptitle, $program_topic, $team_leader, $producer, $operation_crew, $bookingdate, $recordingtime, $settingtime, $rehearsal_time, $location, $designer, $guests, $equiments, $presenters, $remarks, $bookin_id;

    public function render()
    {
        $userBoking = Master_booking::where('approval_level1', '=', 'Pending')->get();
        return view('livewire.h-o-n-approval', ['userBoking' => $userBoking])->layout('livewire.layouts.base');
    }
    public function resetInput()
    {
        $this->bookingid = '';
        $this->equiments = '';
        $this->bookingdate ='';
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