<?php

namespace App\Http\Controllers;

use App\Models\EditingFac;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Master_booking;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function viewRecord(int $id)
    {
        $record = Master_booking::where('id',$id)->first();
        return view('livewire.hon-fac-approved-view',compact('record'))->layout('livewire.layouts.base');
    }
    //public $editorMonMorningA;
    public function assignEditorMonMoA(int $id,Request $request)
    {
        $request->validate([
            'editorMonMorning'=> 'required'
        ]);
        $assign = EditingFac::where('id', $id)->first();
        $assign->editor_id = $request->editorMonMorning;
        $assign->save();
        if ($assign) {
            return back()->with('Success', 'Editor assigned successfully');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }
    }
    function login()
    {
        return view('auth.login');
    }
    function register()
    {
        return view('auth.register');
    }
    function save(Request $request)
    {
        //return $request->input();
        $request->validate([
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

        if ($save) {
            return back()->with('Success', 'You have succesfully created an account proceed to login');
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }
    }
    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //retrieve from database
        // return $request->input();
        $userInfo = User::where('email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'User with this email does not exist');
        } else {
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                $request->session()->put('LoggedUserName', $userInfo->name);
                $request->session()->put('LoggedUserRole', $userInfo->role);

                //check user level and redirect
                if ($userInfo->role === 'Admin') {
                    return redirect('/admin');
                } else if ($userInfo->role === 'HON') {
                    return redirect('/hon');
                } else if ($userInfo->role === 'TPM') {
                    return redirect('/tpm');
                } else if ($userInfo->role === 'CSTO') {
                    return redirect('/csto');
                } else {
                    return redirect('/');
                }
            } else {
                return back()->with('fail', 'Incorrect password,try again');
            }
        }
    }
    //logout function
    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    function homepage()
    {
        $activeUser = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('navbar', compact('activeUser'));
    }
    function userbookings()
    {
    }

    function book(Request $request)
    {
        //return $request->input();    

        $session_id = session('LoggedUser');
        $request->validate([
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

        if ($ubook) {
            return back()->with('Success', 'New user added successfully');
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }
    }
    public function aproveline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = Master_booking::where('id', $id)->first();
        $bookingline->approval_level1 = 'Approved';
        $bookingline->approver1_id = $userId;
        $bookingline->approval1_time = now();
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Approved');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }

        // return redirect()->back();

    }
    public function rejectline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = Master_booking::where('id', $id)->first();
        $bookingline->approval_level1 = 'Rejected';
        $bookingline->approval1_time = now();
        $bookingline->approval2_time = now();
        $bookingline->approval3_time = now();
        $bookingline->approval_level2 = 'Rejected';
        $bookingline->approval_level3 = 'Rejected';
        $bookingline->approver1_id = $userId;
        $bookingline->save();

        if ($bookingline) {
            return back()->with('Success', 'Record Rejected');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }
    }
    public function faproveline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = EditingFac::where('id', $id)->first();
        $bookingline->approval_level1 = 'Approved';
        $bookingline->approver1_id = $userId;
        $bookingline->approval1_time = now();
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Approved');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }

        //return redirect()->back();

    }
    public function frejectline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = EditingFac::where('id', $id)->first();
        $bookingline->approval_level1 = 'Rejected';
        $bookingline->approval_level2 = 'Rejected';
        $bookingline->approval_level3 = 'Rejected';
        $bookingline->approval1_time = now();
        $bookingline->approval2_time = now();
        $bookingline->approval3_time = now();
        $bookingline->approver1_id = $userId;
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Rejected');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }
    }
    //tpm approval and reject actions
    public function tpmaproveline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = Master_booking::where('id', $id)->first();
        $bookingline->approval_level2 = 'Approved';
        $bookingline->approver2_id = $userId;
        $bookingline->approval2_time = now();
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Approved');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }

        //return redirect()->back();

    }
    public function tpmrejectline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = Master_booking::where('id', $id)->first();
        $bookingline->approval_level2 = 'Rejected';
        $bookingline->approver2_id = $userId;
        $bookingline->approval2_time = now();
        $bookingline->approval_level3 = 'Rejected';
        $bookingline->save();

        if ($bookingline) {
            return back()->with('Success', 'Record Rejected');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }
    }
    public function ftpmaproveline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = EditingFac::where('id', $id)->first();
        $bookingline->approval_level2 = 'Approved';
        $bookingline->approver2_id = $userId;
        $bookingline->approval2_time = now();
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Approved');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }

        //return redirect()->back();

    }
    public function ftpmrejectline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = EditingFac::where('id', $id)->first();
        $bookingline->approval_level2 = 'Rejected';
        $bookingline->approver2_id = $userId;
        $bookingline->approval2_time = now();
        $bookingline->approval_level3 = 'Rejected';
        $bookingline->save();

        if ($bookingline) {
            return back()->with('Success', 'Record Rejected');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }
    }

    public function cstoaproveline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = Master_booking::where('id', $id)->first();
        $bookingline->approval_level3 = 'Approved';
        $bookingline->approver3_id = $userId;
        $bookingline->approval3_time = now();
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Approved');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }

        // return redirect()->back();

    }
    public function cstorejectline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = Master_booking::where('id', $id)->first();
        $bookingline->approval_level3 = 'Rejected';
        $bookingline->approver3_id = $userId;
        $bookingline->approval3_time = now();
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Approved');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }

        return redirect()->back();
    }
    public function fcstoaproveline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = EditingFac::where('id', $id)->first();
        $bookingline->approval_level3 = 'Approved';
        $bookingline->approver3_id = $userId;
        $bookingline->approval3_time = now();
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Approved');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }

        // return redirect()->back();

    }
    public function fcstorejectline(int $id)
    {
        $userId = session('LoggedUser');
        $bookingline = EditingFac::where('id', $id)->first();
        $bookingline->approval_level3 = 'Rejected';
        $bookingline->approver3_id = $userId;
        $bookingline->approval3_time = now();
        $bookingline->save();
        if ($bookingline) {
            return back()->with('Success', 'Record Approved');
            return redirect()->back();
        } else {
            return back()->with('Failed', 'something went wrong, try again');
        }

        return redirect()->back();
    }
}
