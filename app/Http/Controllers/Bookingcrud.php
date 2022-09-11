<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\Master_booking;

class Bookingcrud extends Controller
{
    function index(){
        //return view('crud.bookform');
    }
    function addrecord(Request $request){
        $session_id = session('LoggedUser');
        $request ->validate([
            'ptitle' => 'required',
            'program_topic' => 'required',            
            'team_leader' => 'required',            
            'producer' => 'required',
            'operation_crew' => 'required',
            'bookingdate' => 'required',
            'recordingtime' => 'required',
            'settingtime' => 'required',
            'rehearsal_time' => 'required',
            'location' => 'required',
            'designer' => 'required',
            'guests' => 'required',
            'equiments' => 'required',
            'presenters' => 'required',
            // 'remarks' => 'required' 
         ]);

         $query = DB::table('master_bookings')->insert([
            'items_booked'=>$request->input('equiments'),
            'date_booked'=>$request->input('bookingdate'),
            'program_title'=>$request->input('ptitle'),
            'program_topic'=>$request->input('program_topic'),
            'producer'=>$request->input('producer'),
            'location'=>$request->input('location'),
            'recording_time'=>$request->input('recordingtime'),
            'setting_time'=>$request->input('settingtime'),
            'rehearsal_time'=>$request->input('rehearsal_time'),
            'designer'=>$request->input('designer'),
            'guests'=>$request->input('guests'),
            'presenters'=>$request->input('presenters'),
            'remarks'=>$request->input('remarks'),
            'operation_crew'=>$request->input('operation_crew'),
            'shift_leader'=>$request->input('team_leader'),
            'user_id'=>$session_id

         ]);
         
         if($query){
            return back() -> with('success','Production booked succesfuly');
         }
         else{
            return back() -> with('fail','Something went wrong');
         }

    }
}
