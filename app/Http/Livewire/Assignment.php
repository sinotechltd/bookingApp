<?php

namespace App\Http\Livewire;

use App\Models\EditingFac;
use App\Models\EmployeeTable;
use DateInterval;
use DateTime;
use Livewire\Component;

class Assignment extends Component
{
    public $mon, $tue, $wed, $thurs, $friday, $sat, $sun;
    public function render()
    {
        $add1 = 1;
        $add2 = 2;
        $add3 = 3;
        $add1 = 1;
        $add1 = 1;
        $add1 = 1;

        $nextMon = date('d-m-Y', strtotime('monday next week'));
        
        $this->mon = $nextMon;
        $this->tue = new DateTime($nextMon);
        $this->tue->add(new DateInterval('P1D'));
        //WED
        $this->wed = new DateTime($nextMon);
        $this->wed->add(new DateInterval('P2D'));
        //thurs
        $this->thurs = new DateTime($nextMon);
        $this->thurs->add(new DateInterval('P3D'));
        //friday
        $this->friday = new DateTime($nextMon);
        $this->friday->add(new DateInterval('P4D'));
        //saturday
        $this->sat = new DateTime($nextMon);
        $this->sat->add(new DateInterval('P5D'));
        //WED
        $this->sun = new DateTime($nextMon);
        $this->sun->add(new DateInterval('P6D'));
        
        $ApprovalSuccess= EditingFac::where('booking_date', '=', $this->mon)->where('suitID', '=', '1')->where('approval_level3', '=', 'Approved')->where('endtime_time', '<=', '17:00:00')->get();
        $editor = EmployeeTable::where('duties', '=', 'Presenter')->get();
        return view('livewire.assignment', compact('editor','ApprovalSuccess'))->layout('livewire.layouts.base');
    }
}
