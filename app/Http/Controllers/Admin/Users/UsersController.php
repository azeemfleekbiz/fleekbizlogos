<?php

namespace App\Http\Controllers\Admin\Users;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
     
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    
    public function index()
    {               
        return view('admin.users.index')->with('page_title', "Admin Dashboard Users");
    }
    
    //----------------------------create new user form---------------------------
    public function create()
    {
        $user_role= DB::table('user_role')->where('name','author')->get();
        return view('admin.users.create')->with('page_title', "Admin Dashboard Users Create")->with('user_role', $user_role);
    }
    
    
}
