<?php

namespace App\Http\Controllers\Admin\Users;
use DB;
use App\User;
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
        $users= DB::table('users')->where('user_role','2')->get();
        return view('admin.users.index')->with('page_title', "Admin Dashboard Users")->with('users',$users);
    }
    
    //----------------------------create new user form---------------------------
    public function create()
    {
        $user_role= DB::table('user_role')->where('name','author')->get();
        return view('admin.users.create')->with('page_title', "Admin Dashboard Users Create")->with('user_role', $user_role);
    }
    
    //-----------------------Save Author in databae-------------------------------
    
    public function addAuthor(Request $request)
    {
       $user_role       = $request->input('user_role'); 
       $first_name      = $request->input('f_name');
       $last_name       = $request->input('email');
       $email            = $request->input('l_name');
       $password         = $request->input('password');
       $phone            = $request->input('phone');
       $company_name     = $request->input('company_name');
       $about_company    = $request->input('about_company');
       $company_address  = $request->input('company_address');
       $company_phone  = $request->input('company_phone');
       $website_url      = $request->input('website_url');
       $created_at = date("Y-m-d H:i:s");       
       $is_active = '1';
       $check = DB::select("select * from users where email='" . $email . "'");
       if (count($check) > 0) {
           return Redirect::back()->withMessage('Email address already exists.');           
        } else {
            $last_id = DB::table('users')->insertGetId(
                    ['f_name' => $first_name, 'l_name' => $last_name, 'email' => $email, 'password' => bcrypt($password), 'is_active' => $is_active, 'user_role' => $user_role, 'created_at' => $created_at,'updated_at'=> $created_at,'phone' => $phone]
        );
            DB::insert("insert into client_info (user_id,company_name,about_company,company_address,company_phone,site_url,create_at,updated_at) values ($last_id,'" . $company_name . "','" . $about_company . "','" .$company_address. "','" . $company_phone . "','" . $website_url . "','" . $created_at . "','" . $created_at . "')");
            return Redirect::back()->withMessage('Author User Crated Successfully.');  
            
        }
       
       
    }
}
