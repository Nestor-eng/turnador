<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\cat_role; 
use App\Models\cat_municipio; 
use App\Models\TurnadorEspecial; 
use Illuminate\Foundation\Auth\User as Authenticatable;
class UserController extends Authenticatable
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $turnos = DB::select('select * from turnador_specials where estatus? =',[0]);
        return view('users.index', ['users','turnos' => $model->paginate(15)],compact('turnos'));
    }
    public function usercreate()
    {
        $roles= DB::select('select * from cat_roles');
        $municipios = DB::select('select * from cat_municipios');
        return view('users.create',compact('roles','municipios'));
    }
    public function create(ProfileRequest $request){
        
        $request->validate([
            'name' => 'required',
            'apellidoP' => 'required',
            'username' => 'required',
            'email'=> 'required|unique:users',
            'rol'=>'required',
            'municipio'=>'required',
            'password'=> 'required',
        ]);
    
        User::create([
            'name' => $request['name'],
            'apellidoP' => $request['apellidoP'],
            'apellidoM'=> $request['apellidoM'],
            'username'=>$request['username'],
            'email'=> $request['email'],
            'rol'=>$request['rol'],
            'municipio'=>$request['municipio'],
            'password'=> bcrypt($request['password']),
        ]);
    
        return redirect('home')->withSuccess('Agregado Correctamente');

    }
}
