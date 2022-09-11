<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Master_booking;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        //return $request->input();
        $request ->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',            
            'role' => 'required',
            'rtoken' => 'required',
            'password' => 'required|min:5'

        ]);
        //insert data into users table
         $user = new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->role = $request->role;
         $user->remember_token = $request->rtoken;
         $user->password = Hash::make($request->password);
         $save = $user->save();

         if($save){
            return back()->with('Success','New user added successfully');

         }else {
            return back()->with('Failed', 'something went wrong, try again');
         }

    }
    function check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5 max:12'
        ]);
        //retrieve from database
        // return $request->input();
        $userInfo = User::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail','User with this email does not exist');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('homepage');
                
            }
            else{
                return back()->with('fail','Incorrect password,try again');
            }

        }
        
    }
//logout function
function logout(){
    if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('/auth/login');
    }
}
function homepage(){
        $activeUser = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first()];
        return view('navbar',compact('activeUser'));                   
    }
function userbookings(){
        // $bookings = ['LogggedUserBookings'=> Master_booking::where('user_id','=',session('LoggedUser'))->get()];
        // if(!$bookings){
        //     return back()->with('fail','No entries yet');
        // }else{            
        //     return view('homepage', 'LogggedUserBookings');
        // } 
    }
    
function book(Request $request){
        //return $request->input();    
        
        $session_id = session('LoggedUser');
        $request ->validate([
            'ptitle' => 'required',
            'program_topic' => 'required',            
            'producer' => 'required',
            'bookingdate' => 'required',
            'settingtime' => 'required',
            'rehearsal_time' => 'required',
            'location' => 'required',
            'designer' => 'required',
            'guests' => 'required',
            'equiments' => 'required',
            'presenters' => 'required',
            'remarks' => 'required',
            'operation_crew' => 'required',
            'recordingtime' => 'required',

        ]);
        $book = new Master_booking();
        $book->program_title = $request->ptitle;
        $book->program_topic = $request->program_topic;
        $book->producer = $request->producer;
        $book->date_booked = $request->bookingdate;
        $book->recording_time = $request->recordingtime;
        $book->setting_time = $request->settingtime;
        $book->rehearsal_time = $request->rehearsal_time;
        $book->location = $request->location;
        $book->designer = $request->designer;
        $book->guests = $request->guests;
        $book->items_booked = $request->equiments;
        $book->presenters = $request->presenters;
        $book->remarks = $request->remarks;
        $book->operation_crew = $request->operation_crew;
        $book->user_id = $session_id;
        $ubook = $book->save();

        if($ubook){
           return back()->with('Success','New user added successfully');

        }else {
           return back()->with('Failed', 'something went wrong, try again');
        }

    }

}
 