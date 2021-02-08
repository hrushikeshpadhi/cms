<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\CmRole;

class RoleController extends Controller
{
     public function fetchrole(Request $request){
		
		$user=User::where('email',$request->email)->first();
		if($user){
            $userrole=explode(',', $user->role_id);
            $roles=CmRole::select('role_id','role_name')->whereIn('role_id',$userrole)->get();
		}
		else{
            $roles=array();
		}

		return response()->json($roles);
		
	}
}
