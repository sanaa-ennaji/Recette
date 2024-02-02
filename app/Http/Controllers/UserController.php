<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
// use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{

    public function logout (){
        auth()->logout();
        return redirect('/user') ;
    }

    public function  register (Request $request){
        $data = $request->validate([
            'name'=>['required' , 'min:3','max:10', Rule::unique('users','name')],
            'email'=>['required', 'email' , Rule::unique('users','email')],
            'password'=>['required', 'min:8' ,'max:200']

        ]);
         $data['password']= bcrypt($data['password']);
     $user =  User::create($data);
     auth()->login($user);
     return redirect('/user');
        // return 'hello world';
    }
    public function login(Request $request){
        $data = $request->validate([
         'logname'=> 'required',
         'logpassword'=>'required'
        ]);
        if(auth()->attempt(['name'=>$data['logname'],'password'=>$data['logpassword']])){
         $request->session()->regenerate();
       
        }
        return redirect('/user');
          }
}
