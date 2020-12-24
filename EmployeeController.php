<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tasks;
use Illuminate\Support\Facades\DB;



use Auth;

class EmployeeController extends Controller
{
    public function create()
    {
        //$user = new User;
        $user = User::get()->where('name',Auth::user()->name); 
        
      return view('dashboard',['user'=>$user]);
    }
    public function show()
    {
    	 $user =  User::find(Auth::user()->id);
    	  //$task = tasks::find(1);

    	return view('tasks',['user'=>$user]);


    	// return DB::table('users')->join('tasks', 'tasks.user_id', 'user_id')->get();


//     	$user = User::get()->with('tasks');
// return view('tasks',["user"=>$user]);
    	        // $user = User::all(); 
    	        // return view('tasks',['user'=>$user]);



    }
     

}
