<?php

namespace App\Http\Livewire;

use App\Models\Suits;
use Illuminate\Http\Request;
use Livewire\Component;

class AdminAddSuits extends Component
{
    public function submitprogramdetails(Request $request)
    {
        $request->validate([
            'sname' => 'required',
            'description' => 'required',
        ]);

        $suit = new Suits();
        $suit->suitName = $request->sname;
        $suit->Description = $request->description;
        $suit->save();
        if ($suit) {
            return back()->with('message', 'You have added an suit');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
            return redirect()->back();
        }
    }
    public function delete(int $id)
    {
        $delete = Suits::where('id', $id)->first()->delete();
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
        $warning = [
            "Failed" => "'Hi, only 3 suits are available for manipulation, no option for adding'",
        ];
        $suits = Suits::select('*')->paginate(10);
        return view('livewire.admin-add-suits', compact('suits', 'warning'))->layout('livewire.layouts.base');
    }
}
