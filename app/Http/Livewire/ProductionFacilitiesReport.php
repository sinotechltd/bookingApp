<?php

namespace App\Http\Livewire;

use App\Models\Master_booking;
use App\Models\User;
use Illuminate\Http\Request;
//use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class ProductionFacilitiesReport extends Component
{
    public $title = "Production Booking Report";
    // public $today; 

    public function search(Request $request)
    {
        $get_data = $request->searchItem;
        $title = "Search Result Page";
        $bookings = Master_booking::select('master_bookings.*', 'programs_tables.program_name', 'users.name')
            ->where('date_booked', $get_data)
            ->orWhere('program_title', $get_data)
            ->orWhere('producer', $get_data)
            ->orWhere('location', $get_data)
            ->orWhere('shift_leader', $get_data)
            ->join('users', 'master_bookings.user_id', 'users.id')
            //->join('users', 'master_bookings.approver1_id', 'users.id')
            ->join('programs_tables', 'master_bookings.program_title', 'programs_tables.id')
            ->orderBy('date_booked')
            ->paginate(20);                  
        return view('livewire.reportSearchResult', compact('bookings', 'title', 'get_data'))->layout('livewire.layouts.base');
    }
    public function render()
    {
        $bookings = Master_booking::select('master_bookings.*', 'programs_tables.program_name', 'users.name')
            ->join('users', 'master_bookings.user_id', 'users.id')
            ->join('programs_tables', 'master_bookings.program_title', 'programs_tables.id')
            ->orderBy('date_booked')
            ->paginate(20);
        return view('livewire.production-facilities-report', compact('bookings'))->layout('livewire.layouts.base');
    }
}
