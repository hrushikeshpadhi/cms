<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Auth;
use URL;
use Session;
use App\User;
use App\CmRole;

class RegistrationController extends Controller
{
    public function index()
    {
    	$roles=CmRole::all();
    	return view ('admin.userregistration')->with(compact('roles'));
    }

    public function adduser(Request $request) {
    	if($request->isMethod('post')){
         $data = $request->all();
         
    	   $user = [];
		   $user['name'] = $data['name'];
		   $user['lastname'] =  $data['lastname'];
		   $user['email'] = $data['email'];
		   $user['role_id'] = implode(',', request('role_id'));
		   $user['password'] = Hash::make($data['password']);
		   $user['password_token'] = base64_encode($data['password']);
		   $newuser = User::create($user);

                Mail::to($data['email'])
                ->send(new SendMail($data));
                
		    return redirect('/user-registration')->with('flash_message_success','User Registration Successfull!!');

    	}
    }
}
