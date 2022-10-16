<?php

namespace App\Http\Livewire;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class Profile extends Component
{
    public function update(Request $request){

    }
    public function render()
    {
        $profileData =User::where('id',session('LoggedUser'))->first();
        return view('livewire.profile',compact('profileData'))->layout('livewire.layouts.base');
    }
}
