<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{
    public $check;
    public function update(Request $request)
    {
        $user = User::where('id', '=', session('LoggedUser'))->first();
        if (!$user) {
            return back()->with('Success', 'No records with this email');
        } else {
            if ($request->name == $user->name) {
                return back()->with('Success', '');
            } else {
                $user->name = $request->name;
                $save = $user->save();
                if ($save) {
                    return back()->with('Success', 'You have succesfully updated your profile name');
                } else {
                    return back()->with('Failed', 'something went wrong, try again');
                }
            }
            if ($request->oldPassword) {
                if (Hash::check($request->oldPassword, $user->password)) {
                    $user->password = Hash::make($request->newPassword);
                    $save = $user->save();
                    if ($save) {
                        return back()->with('Success', 'You have succesfully updated your password');
                    } else {
                        return back()->with('Failed', 'something went wrong, try again');
                    }
                } else {
                    return back()->with('Failed', 'You have entered incorrect Old password');
                }
            }
        }
    }
    public function render()
    {
        $profileData = User::where('id', session('LoggedUser'))->first();
        return view('livewire.profile', compact('profileData'))->layout('livewire.layouts.base');
    }
}
