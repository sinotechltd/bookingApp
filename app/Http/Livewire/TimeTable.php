<?php

namespace App\Http\Livewire;

// use App\Models\Suits;
use Livewire\Component;
use PhpParser\Node\Expr\ArrayItem;

class TimeTable extends Component
{
    public function render()
    {
        $mondayDate=now();
        $TuesdayDate=now();
        $wednesdayDate=now();
        $thursdayDate=now();
        $fridayDate=now();
        $saturdayDate=now();
        $sundayDate=now();        
     return view('livewire.time-table')->layout('livewire.layouts.client');
    }
}
