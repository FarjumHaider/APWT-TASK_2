<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function Registration(){
        return view('pages.registration');
    }

    public function CheckRegistration(Request $request){

        $this->validate(
            $request,
            [
                'fname'=>'required|min:5|max:50',
                'lname'=>'required|min:5|max:50',
                'address'=>'required|min:5|max:50',
                'email'=>'email',
                'username'=>'required|min:5|max:20',
                'password'=>'required',
                'conpassword'=>'required',
                'dob'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'fname.required'=>'First name required',
                'fname.min'=>'First name should be more than 5 charcters',
                'fname.max'=>'First name should be less than 50 charcters',
                'lname.required'=>'last name required',
                'lname.min'=>'Fast name should be more than 5 charcters',
                'lname.max'=>'Fast name should be less than 50 charcters',
                'address.required'=>'Address name required',
                'email.required'=>'Email required',
                'username.required'=>'Username required',
                'password.required'=>'Password required',
                'conpassword.required'=>'Confirm password required',
                'dob.required'=>'DOB required',
                'phone.required'=>'Phone number required'
            ]
            );

        return "First name:".$request->fname."<br>Last name:".$request->lname."<br>Address:".$request->address."<br>Email:".$request->email."<br>Phone:".$request->phone."<br>username:".$request->username.
               "<br>Password:".$request->password."<br>DOB:".$request->dob ;      
    }
}
