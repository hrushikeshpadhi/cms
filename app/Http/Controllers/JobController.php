<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use URL;
use Session;
use App\CmJob;
use App\User;

class JobController extends Controller
{
    public function index(){

    	$users=User::all();
    	return view ('admin.job')->with(compact('users'));
    }

     public function addjob(Request $request){

     	if($request->isMethod('post')){
     		$data = $request->all();
     		$job = new CmJob;

     		$job->compname = $data['compname'];
     		$job->assndate = $data['assndate'];
     		$job->exprenc = $data['exprenc'];
     		$job->ctc = $data['ctc'];
     		$job->noticperiod = $data['noticperiod'];
     		$job->locn = $data['locn'];
     		$job->userid = $data['userid'];
     		$job->description = $data['description'];

            $file = $request->file('file');
            $file_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $file_name);
            
            $job->file = $file_name;

     		$job->save();
			return redirect('/add-job')->with('flash_message_success','Job has been Added Successfully!!!'); 
     	}

     }
 public function viewuserJob(){
        $jobs = CmJob::select('cms_jobs.*','users.name as user_name')
                    ->leftJoin('users','cms_jobs.userid','=','users.id')
                    ->get();

        return view('admin.userjob')->with(compact('jobs')); 
 }

 public function viewJob(){
        $viewjobs = CmJob::select('cms_jobs.*','users.name as user_name')
                    ->leftJoin('users','cms_jobs.userid','=','users.id')
                    ->get();
        $users=User::all();
        return view('admin.viewjob')->with(compact('viewjobs','users')); 
 }

 public function search(Request $request){
        
        $username  = $request->username;
        $assigndate  = $request->assigndate;

        $app_lookup = CmJob::select('cms_jobs.*','users.name as user_name')
                    ->leftJoin('users','cms_jobs.userid','=','users.id')
                   
        ->when($username, function($query, $username) {
             $query->where('userid', $username);
        })
        ->when($assigndate, function($query, $assigndate) {
             $query->where('assndate', '=', $assigndate);
        });

        $appls = $app_lookup->get();
        $view = view("admin.viewsearchjob",compact('appls'))->renderSections()['content'];
        return response()->json(['html'=>$view]);
    }

}
