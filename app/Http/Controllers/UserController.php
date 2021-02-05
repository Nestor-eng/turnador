<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\cat_role; 

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }
    public function usercreate()
    {
        $roles= DB::select('select * from cat_roles');
        return view('users.create',compact('roles'));
    }
    public function create(ProfileRequest $request){
        
        $request->validate([
            'name' => 'required',
            'apellidoP' => 'required',
            'username' => 'required',
            'email'=> 'required|unique:users',
            'rol'=>'required',
            'password'=> 'required',
        ]);
    
        User::create([
            'name' => $request['name'],
            'apellidoP' => $request['apellidoP'],
            'apellidoM'=> $request['apellidoM'],
            'username'=>$request['username'],
            'email'=> $request['email'],
            'rol'=>$request['rol'],
            'password'=> bcrypt($request['password']),
        ]);
    
        return redirect('home')->withSuccess('Agregado Correctamente');

    }
}
