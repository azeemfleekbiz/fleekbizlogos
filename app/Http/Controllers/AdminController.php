<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    
    
    public function dashboard()
    {
        $user_role = Auth::user()->user_role;
        if($user_role==1)
        {
            print_r($user_role);
        return view("admin/dashboard")->with('page_title', "Admin Dashboard");
        }else
        {
            print_r("Azeem");
            return view("index")->with('page_title', "Admin Dashboard");
        }
    }
}
