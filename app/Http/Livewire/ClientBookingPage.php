<?php

namespace App\Http\Livewire;

use App\Models\EmployeeTable;
use App\Models\Inventory;
use Livewire\Component;

use App\Models\Master_booking;
use App\Models\ProgramsTable;
use DateTime;

class ClientBookingPage extends Component
{
    public $ptitle, $program_topic, $team_leader, $producer, $operation_crew, $bookingdate, $recordingtime, $settingtime, $rehearsal_time, $location, $designer, $guests, $presenters, $remarks, $booking_id_edit;
    public $equipments = [];

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
            'equipments' => 'required',
            'presenters' => 'required',
        ]);
        $serializedArr = serialize($this->equipments);

        //add valid records todatabase
        $book = new Master_booking();
        $book->items_booked = $serializedArr;
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

        $getProgramTitle = ProgramsTable::all();
        $userBooking = Master_booking::where('user_id', '=', session('LoggedUser'))->get();
        $employes = EmployeeTable::all();
        $getproducer = EmployeeTable::where('duties', '=', 'Producer')->get();
        $getPresenters = EmployeeTable::where('duties', '=', 'Presenters')->get();
        $getequipments = Inventory::all();

        return view('livewire.client-booking-page', ['userBooking' => $userBooking], compact('getProgramTitle', 'employes', 'getproducer', 'getequipments', 'getPresenters'))->layout('livewire.layouts.client');
    }
}
