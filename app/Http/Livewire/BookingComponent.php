<?php

namespace App\Http\Livewire;

use App\Models\Master_booking;
use Livewire\Component;
use DateTime;

class BookingComponent extends Component
{
    public $ptitle, $program_topic, $team_leader, $producer, $operation_crew, $bookingdate, $recordingtime, $settingtime, $rehearsal_time, $location, $designer, $guests, $equiments, $presenters, $remarks, $booking_id_edit;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'ptitle' => 'required',
            'program_topic' => 'required',
            'team_leader' => 'required',
            'producer' => 'required',
            'operation_crew' => 'required',
            'bookingdate' => 'required',
            'recordingtime' => 'required',
            'settingtime' => 'required',
            'rehearsal_time' => 'required',
            'location' => 'required',
            'designer' => 'required',
            'guests' => 'required',
            'equiments' => 'required',
            'presenters' => 'required',
        ]);
    }
    public function submibookingdetails()
    {
        $session_id = session('LoggedUser');
        $now = new DateTime();

        $this->validate([
            'ptitle' => 'required',
            'program_topic' => 'required',
            'team_leader' => 'required',
            'producer' => 'required',
            'operation_crew' => 'required',
            'bookingdate' => 'required',
            'recordingtime' => 'required',
            'settingtime' => 'required',
            'rehearsal_time' => 'required',
            'location' => 'required',
            'designer' => 'required',
            'guests' => 'required',
            'equiments' => 'required',
            'presenters' => 'required',
        ]);

        //add valid records todatabase
        $book = new Master_booking();
        $book->items_booked = $this->equiments;
        $book->date_booked = $this->bookingdate;
        $book->program_title = $this->ptitle;
        $book->program_topic = $this->program_topic;
        $book->producer = $this->producer;
        $book->location = $this->location;
        $book->recording_time = $this->recordingtime;
        $book->setting_time = $this->settingtime;
        $book->rehearsal_time = $this->rehearsal_time;
        $book->designer = $this->designer;
        $book->guests = $this->guests;
        $book->presenters = $this->presenters;
        $book->remarks = $this->remarks;
        $book->operation_crew = $this->operation_crew;
        $book->shift_leader = $this->team_leader;
        $book->user_id = $session_id;
        $book->save();

        session()->flash('message', 'You have succesfully booked production');

        $this->dispatchBrowserEvent('close-modal');        
    }
    public function editbookingentry($booking_id)
    {
        $booking = Master_booking::where('booking_id', $booking_id)->first();

        $this->booking_id_edit = $booking->booking_id;
        $this->items_booked = $booking->equiments;
        $this->date_booked = $booking->bookingdate;
        $this->program_title = $booking->ptitle;
        $this->program_topic = $booking->program_topic;
        $this->producer = $booking->producer;
        $this->location = $booking->location;
        $this->recording_time = $booking->recordingtime;
        $this->setting_time = $booking->settingtime;
        $this->rehearsal_time = $booking->rehearsal_time;
        $this->designer = $booking->designer;
        $this->guests = $booking->guests;
        $this->presenters = $booking->presenters;
        $this->remarks = $booking->remarks;
        $this->operation_crew = $booking->operation_crew;
        $this->shift_leader = $booking->team_leader;
        $this->dispatchBrowserEvent('show-edit-modal');
    }
    public function editBookingData()
    {
        $this->validate([
            'ptitle' => 'required',
            'program_topic' => 'required',
            'team_leader' => 'required',
            'producer' => 'required',
            'operation_crew' => 'required',
            'bookingdate' => 'required',
            'recordingtime' => 'required',
            'settingtime' => 'required',
            'rehearsal_time' => 'required',
            'location' => 'required',
            'designer' => 'required',
            'guests' => 'required',
            'equiments' => 'required',
            'presenters' => 'required',
        ]);
        $book = Master_booking::where('booking_id', $this->booking_id_edit)->first();
        $session_id = session('LoggedUser');

        //add valid records todatabase
        $book = new Master_booking();
        $book->items_booked = $this->equiments;
        $book->date_booked = $this->bookingdate;
        $book->program_title = $this->ptitle;
        $book->program_topic = $this->program_topic;
        $book->producer = $this->producer;
        $book->location = $this->location;
        $book->recording_time = $this->recordingtime;
        $book->setting_time = $this->settingtime;
        $book->rehearsal_time = $this->rehearsal_time;
        $book->designer = $this->designer;
        $book->guests = $this->guests;
        $book->presenters = $this->presenters;
        $book->remarks = $this->remarks;
        $book->operation_crew = $this->operation_crew;
        $book->shift_leader = $this->team_leader; 
        $book->user_id = $session_id;        
        $book->save();

        session()->flash('message', 'You have succesfully booked production');

        $this->dispatchBrowserEvent('close-modal');        
         
    }
    public function render()
    {
        // $session_id = session('LoggedUser');
        $userBoking = Master_booking::where('user_id', '=', session('LoggedUser'))->get();
        return view('livewire.booking-component', ['userBoking' => $userBoking])->layout('livewire.layouts.base');
    }
}
