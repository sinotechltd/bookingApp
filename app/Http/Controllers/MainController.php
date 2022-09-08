<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
            'password' => 'required|min:5 max:12'

        ]);

        //insert data into users table
         $user = new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->role = $request->role;
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
                // if($userInfo->role = "Admin"){
                    
                // }
                // else  if($userInfo->role = "Approver1"){
                //     return redirect('admin/dashboard1');
                // }
                // else  if($userInfo->role = "Approver2"){
                //     return redirect('admin/dashboard2');
                // }
                // else  if($userInfo->role = "Approver3"){
                //     return redirect('admin/dashboard3');
                // }
                // else{
                //     return redirect('userpanel');
                // }

            }
            else{
                return back()->with('fail','Incorrect password,try again');
            }

        }
        
    }

}
