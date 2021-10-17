<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ContactShow(){
        return view('pages.contact');
    }

    public function CheckContact(Request $request){
        $this->validate(
            $request,
            [
                'email'=>'required|email',
                'msg'=>'required'

            ],
            [
                'email.required'=>'Email required',
                'msg.required'=>'Message required'
            ]
            );
        
        return "Email:".$request->email."<br>Message:".$request->msg ;      
    }
}
