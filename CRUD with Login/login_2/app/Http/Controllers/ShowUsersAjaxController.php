<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;
use Storage;


use Datatables;

class ShowUsersAjaxController extends Controller
{

    public function index()
    {
        if(request()->ajax('#show_users_datatable')) {
            return datatables()->of(User::select('*')->where('status',1))
            ->editColumn('created_at', function ($request) {
                return $request->created_at->diffForHumans();
                // human readable format
            })->editColumn('status', function ($request) {
                if($request->status==1){
                    return "Active";
                }else{
                    return "InActives";
                }
            })->editColumn('role_id', function ($request) {
                if($request->role_id==1){
                    return "Admin";
                }else{
                    return "User";
                }
            })
            ->editColumn('created_by', function ($request) {
                return User::findOrFail($request['created_by'])->first_name." ".User::findOrFail($request['created_by'])->last_name;
                // human readable format
            })->editColumn('updated_at', function ($request) {
                return $request->updated_at->diffForHumans();
                // human readable format
            })
            ->editColumn('updated_by', function ($request) {
                return User::findOrFail($request['updated_by'])->first_name." ".User::findOrFail($request['updated_by'])->last_name;
                // human readable format
            })
            ->addColumn('action', 'admin_dashboard_show_users_action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('dashboard');
    }

    public function store(Request $request)
    {
        $userId = $request->id;

        if($request->edit_or_add != "edit"){
            $validated = $request->validate([
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|unique:users,email',
                'password' => 'required',
                'status' => 'required',
                'role_id' => 'required',
            ]);
        }else{

        }

        if($get = User::find($userId)){
            $created_by = $get->created_by;
        }else{
            $created_by = Auth::user()->id;
        }
        $file = $request->picture;

        $destinationPath = 'uploads';

        $filename = "user-picture-".rand()."-".$file->hashName();

        $path = $destinationPath."/".$filename;
        if($file->move($destinationPath,$filename)){
            $user   =   User::updateOrCreate(
                [
                 'id' => $userId
                ],
                [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'role_id' => $request->role_id,
                'created_by' => $created_by,
                'updated_by' => Auth::user()->id ,
                'profile_picture_path' => $path,
                ]);

                return Response()->json($user);
        }else{
            return Response()->json();
        }

    }


    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $user  = User::where($where)->first();

        return Response()->json($user);
    }


    public function destroy(Request $request)
    {
        $user = User::where('id',$request->id) ->update(['status' => 0]);

        return Response()->json($user);
    }
}
