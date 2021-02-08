<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use URL;
use Session;
use App\User;
use App\CmRole;

class ViewuserController extends Controller
{
    public function viewUser(){
            $roleArr=array();
			$roles=CmRole::all();
			foreach ($roles as $key => $role) {
				$roleArr[$role->role_id]=$role->role_name;
			}
    	$users=User::all();
        return view('admin.viewuser')->with(compact('users','roleArr')); 
    }
}
