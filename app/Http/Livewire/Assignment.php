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

        $nextMon = date('Y-m-d', strtotime('monday next week'));

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

        //suit A monday morning
        $approvalSuccess = EditingFac::select('editing_facs.*', 'users.name', 'programs_tables.program_name')
            ->where('editing_facs.editing_date', $nextMon)
            ->where('editing_facs.suitID', '=', '1')->where('editing_facs.approval_level3', '=', 'Approved')
            ->where('editing_facs.endtime_time', '<=', '17:00:00')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->first();
        //suit A tuesday morning
        $tueApprovalSuccess = EditingFac::select('editing_facs.*', 'users.name', 'programs_tables.program_name')
            ->where('editing_facs.editing_date', $this->tue)
            ->where('editing_facs.suitID', '=', '1')->where('editing_facs.approval_level3', '=', 'Approved')
            ->where('editing_facs.endtime_time', '<=', '17:00:00')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->first();
        //suit A wednesday morning
        $wedApprovalSuccess = EditingFac::select('editing_facs.*', 'users.name', 'programs_tables.program_name')
            ->where('editing_facs.editing_date', $this->wed)
            ->where('editing_facs.suitID', '=', '1')->where('editing_facs.approval_level3', '=', 'Approved')
            ->where('editing_facs.endtime_time', '<=', '17:00:00')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->first();
        //suit A thursday morning
        $thursApprovalSuccess = EditingFac::select('editing_facs.*', 'users.name', 'programs_tables.program_name')
            ->where('editing_facs.editing_date', $this->thurs)
            ->where('editing_facs.suitID', '=', '1')->where('editing_facs.approval_level3', '=', 'Approved')
            ->where('editing_facs.endtime_time', '<=', '17:00:00')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->first();
        //suit A friday morning
        $friApprovalSuccess = EditingFac::select('editing_facs.*', 'users.name', 'programs_tables.program_name')
            ->where('editing_facs.editing_date', $this->friday)
            ->where('editing_facs.suitID', '=', '1')->where('editing_facs.approval_level3', '=', 'Approved')
            ->where('editing_facs.endtime_time', '<=', '17:00:00')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->first();
        $satApprovalSuccess = EditingFac::select('editing_facs.*', 'users.name', 'programs_tables.program_name')
            ->where('editing_facs.editing_date', $this->sat)
            ->where('editing_facs.suitID', '=', '1')->where('editing_facs.approval_level3', '=', 'Approved')
            ->where('editing_facs.endtime_time', '<=', '17:00:00')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->first();
        $sunApprovalSuccess = EditingFac::select('editing_facs.*', 'users.name', 'programs_tables.program_name')
            ->where('editing_facs.editing_date', $this->sun)
            ->where('editing_facs.suitID', '=', '1')->where('editing_facs.approval_level3', '=', 'Approved')
            ->where('editing_facs.endtime_time', '<=', '17:00:00')
            ->join('users', 'editing_facs.user_id', 'users.id')
            ->join('programs_tables', 'editing_facs.program_title', 'programs_tables.id')
            ->first();

        $editor = EmployeeTable::where('duties', '=', 'Presenter')->get();
        return view('livewire.assignment', compact('editor', 'approvalSuccess', 'tueApprovalSuccess', 'wedApprovalSuccess', 'thursApprovalSuccess', 'friApprovalSuccess', 'satApprovalSuccess', 'sunApprovalSuccess'))->layout('livewire.layouts.base');
    }
}
