<?php

namespace App\Http\Livewire;

use App\Models\EmployeeTable;
use Illuminate\Http\Request;
use Livewire\Component;

class AdminAddEmployee extends Component
{
    public function submitprogramdetails(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'department' => 'required',
            'duties' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $employee = new EmployeeTable();
        $employee->full_name = $request->fullname;
        $employee->department = $request->department;
        $employee->duties = $request->duties;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        if ($employee) {
            return back()->with('message', 'You have added an employee');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
            return redirect()->back();
        }

    }
    public function delete(int $id)
    {
        $delete =EmployeeTable::where('id', $id)->first()->delete();
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
        $employeess = EmployeeTable::select('*')->paginate(10);
        return view('livewire.admin-add-employee', compact('employeess'))->layout('livewire.layouts.base');
    }
}
