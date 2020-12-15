<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Session;

class AuthController extends Controller
{
    //



    protected function username(){

        return "phone_number";
    }

    public function showReg(){

        return view ("pages.regForm");
    }


   

    public function dologin(Request $request){

        // request()->validate([
        //     'name' => 'required'| 'string'| 'max:255',
        //      'phone_number' => 'required'|'string'|'phone_number'| 'max:255'|'unique:users',
        //      'password' => 'required'|'string'| 'min:8'|'confirmed'
        //                ]);
     
        //     $credentials = $request->only('phone_number', 'password');
        //     if (Auth::attempt($credentials)) {
        //         // Authentication passed...
        //         return redirect()->intended('dashboard');
        //     }
        //     return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');

        
    }

    public function validation(Request $request){
       
        $data= $request->validate([
            'user_name' => 'required|string|max:255',
            'phone_number' => 'required |string | phone_number |max:255',
            'password' => 'required | string | min:6 |confirmed'   
    
            ]);
            var_dump($data);
            
    }

    public function reg(Request $request){

      // return response()->json(['msg'=>'your data'],200);
      var_dump( $request->all());
      //exit();
      $data= $request->validate([
        'user_name' => 'required|string|max:255',
        'phone_number' => 'required |string | phone_number |max:255',
        'password' => 'required | string | min:6 |confirmed'   

        ]);
        var_dump($data);
        exit();
      
      $this->validation($request);
     
      return $request->all();

        // request()->validate([
        //       'name' => 'required'| 'string'| 'max:255',
        //      'phone_number' => 'required'|'string'|'phone_number'| 'max:255'|'unique:users',
        //      'password' => 'required'|'string'| 'min:8'|'confirmed'
        //     ]);
             
        //     $data = $request->all();
     
        //     $check = $this->create($data);
           
        //     return Redirect::to("home")->withSuccess('Great! You have Successfully loggedin');
    }

    public function home()
    {
 
      if(Auth::check()){
        return view('home');
      }
       return Redirect::to("dologin")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
            'user_type'=>$data['user_type'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
