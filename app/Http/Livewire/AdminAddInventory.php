<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Livewire\Component;

class AdminAddInventory extends Component
{
    public function submitprogramdetails(Request $request)
    {
        $request->validate([
            'equipname' => 'required',
            'equipcost' => 'required',
            'equimpquantity' => 'required',

            'moreinfo' => 'required',
        ]);

        $inventory = new Inventory();
        $inventory->equipname = $request->equipname;
        $inventory->cost = $request->equipcost;
        $inventory->quantity = $request->equimpquantity;
        $inventory->date_received = $request->datedrecieved;
        $inventory->more_info = $request->moreinfo;
        $inventory->save();
        if ($inventory) {
            return back()->with('message', 'You have added an inventory');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
            return redirect()->back();
        }
    }
    public function delete(int $id)
    {
        $delete = Inventory::where('id', $id)->first()->delete();
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
        $inventorie = Inventory::select('*')->paginate(10);
        return view('livewire.admin-add-inventory', compact('inventorie'))->layout('livewire.layouts.base');
    }
}
