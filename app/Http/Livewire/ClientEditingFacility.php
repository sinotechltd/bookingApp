<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use App\Models\EmployeeTable;
use App\Models\Inventory;
use App\Models\ProgramsTable;
use App\Models\Suits;
use Livewire\Component;

class ClientEditingFacility extends Component
{
    public $ptitle, $program_topic, $producer, $esuit, $editing_date, $start_time, $end_time, $equiments,  $remarks;
    public function submibookingdetails()
    {
        $session_id = session('LoggedUser');       

        $this->validate([
            'ptitle' => 'required',
            'program_topic' => 'required',
            'producer' => 'required',
            'esuit' => 'required',
            'editing_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'equiments' => 'required',
        ]);

        //add valid records todatabase
        $book = new EditingFac();
        $book->suitID = $this->esuit;
        $book-> program_title = $this->ptitle;
        $book-> program_topic = $this->program_topic;
        $book-> producer = $this->producer;
        $book-> booking_date = now();
        $book-> requirements = $this->equiments;
        $book-> editing_date = $this->editing_date;
        $book-> start_time = $this->start_time;
        $book-> endtime_time = $this->end_time;
        $book-> remarks = $this->remarks;
        $book-> user_id = $session_id;
        $book->save();
        if($book){
            return back()->with('Success','Successfully booked',$this->esuit);

         }else {
            return back()->with('Failed', 'something went wrong, try again');
         }

        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $getproducer =EmployeeTable::where('duties', '=','Producer')->get();
        $userBooking = EditingFac::select('editing_facs.*','suits.suitName','programs_tables.program_name','employee_tables.full_name')
        ->where('user_id', '=', session('LoggedUser'))
        ->join('suits','editing_facs.suitID','suits.id')
        ->join('users','editing_facs.user_id','users.id')
        ->join('programs_tables','editing_facs.program_title','programs_tables.id')
        ->join('inventories','editing_facs.producer','inventories.id')
        ->join('employee_tables','editing_facs.requirements','employee_tables.id')
        ->get();
        $getequipments = Inventory::all();
        $geteSuits = Suits::all();
        $getProgramTitle = ProgramsTable::all();
        return view('livewire.client-editing-facility',['userBooking' => $userBooking],compact('getproducer','getequipments','geteSuits','getProgramTitle'))->layout('livewire.layouts.client');
    }
}
