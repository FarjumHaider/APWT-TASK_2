<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function LoginShow(){
        return view('pages.login');
    }

    public function CheckLogin(Request $request){
        $UsersData = [
           
            'Farjum' => '123',
            'Haider' => '321',
            'Ayon' => '345',
            'Karim' => '333'

        
    ];

        $this->validate(
            $request,
            [
                'username'=>'required',
                'password'=>'required'

            ],
            [
                'username.required'=>'Username required',
                'password.required'=>'Password required'
            ]
            );

        foreach($UsersData as $username => $password)
        {
            
            if($username == $request->username && $password == $request->password )
            {
                return $username ." can login successfully";
            }
            
            
        }

       
        return "Invalid username and password";  
    }
    
}
