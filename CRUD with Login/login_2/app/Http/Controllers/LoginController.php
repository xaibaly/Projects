<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginCredentials;
use App\Http\Requests\LoginUserCheck;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Hash;
use Session;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }else{
            return view('index');
        }
    }

    public function login()
    {
        if (Auth::check()) {
            if(Auth::user()->role_id==1){
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('dashboard');
            }
        }else{
            return view('login');
        }
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }else{
            return view('register');
        }
    }

    public function dashboard()
    {
        if (Auth::check()) {
            if(Auth::user()->role_id!=1){
                return view('dashboard');
            }else{
                return view('admin_dashboard');
            }
        }else{
            return redirect()->route('login')->with('failed','Please Login First');
        }
    }

    public function login_user(Request $request)
    {
        $credenatials = $request->only('email','password');

        if(Auth::attempt($credenatials)){
            if(Auth::user()->status==1){
                if(Auth::user()->role_id==1){
                    return redirect()->intended('dashboard');
                }else{
                    return redirect()->intended('dashboard');
                }
            }else{
                Session::flush();
                Auth::logout();
                return redirect()->route('login')->with('failed',"Your Account's Status is InActive Can't Login ");
            }
        }else{
            return redirect()->route('login')->with('failed','Invalid user name or password Please put coreect Credenitals');
        }

    }

    public function register_user(Request $request)
    {

        $file = $request->profile_picture;

        $destinationPath = 'uploads';

        $request->validate([
        'first_name',
        'last_name',
        'email',
        'password',
        'profile_picture',
        ]);

        $filename = "user-picture-".rand()."-".$file->hashName();

        $path = $destinationPath."/".$filename;
        if($file->move($destinationPath,$filename)){
            User::create(array('first_name'=>$request->first_name,'last_name'=>$request->last_name,'email'=>$request->email, 'password' => Hash::make($request->password),'profile_picture_path'=>$path,'role_id'=>0,'status'=>1,'created_by'=>0,'updated_by'=>0));
            return redirect()->route('register')->with('success','Record has been created successfully.');
        }else{
            return redirect()->route('register')->with('failed','Could not create account.');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect()->route('login')->with('success','Logout Succesfully');
    }

    public function show($obj)
    {
        return view($obj);
    }
}
