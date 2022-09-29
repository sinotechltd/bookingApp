<?php

namespace App\Http\Livewire;

use App\Models\ProgramsTable;
use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminAddPromme extends Component
{
    public $rec;

    public function submitprogramdetails(Request $request)
    {
        $request->validate([
            'program_info' => 'required',
            'pname' => 'required',
        ]);

        $program = new ProgramsTable();
        $program->program_name = $request->pname;
        $program->program_description = $request->program_info;
        $program->save();
        if ($program) {
            return back()->with('message', 'You have added a program');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
            return redirect()->back();
        }

    }
    public function delete(int $id)
    {
        $delete =ProgramsTable::where('id', $id)->first()->delete();
        if ($delete) {
            return back()->with('Failed', 'Record deleted');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
            return redirect()->back();
        }
    }
    public function render()
    {
        $programms = ProgramsTable::select('*')->paginate($this->rec);
        return view('livewire.admin-add-promme', compact('programms'))->layout('livewire.layouts.base');
    }
}
