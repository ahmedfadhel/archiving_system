<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Testing\MimeType;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard(){
        $users  = User::get()->all();
        $roles  = Role::get()->all();
        $permissions = Permission::get()->all();
        //get file path
        $path = 'text/test.pdf';
       
        //check if file exists
        if (!Storage::exists($path)) {
            abort(404);
        }
        //Retrieve the file
        $file = Storage::disk('local')->get($path);
        // get file mime type
        $type = MimeType::from($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
       
        // dd($response);
        // dd($permissions);
        // return view('dashboard.dashboard')
        //             ->withUsers($users)
        //             ->withRoles($roles)
        //             ->withPermissions($permissions)
        //             ->withResponse($response);
        // return  response()
        //         ->view('dashboard.dashboard',['users'=>$users,'roles'=>$roles,'permissions'=>$permissions]);
        return $response;
    }
}
