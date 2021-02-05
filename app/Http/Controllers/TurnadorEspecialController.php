<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TurnadorEspecial; 
use App\Models\turnador; 
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\DB;
class TurnadorEspecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $normales = turnador::all();
      $turnos = TurnadorEspecial::all();
      return view('TurnoEspecial.index',compact('turnos','normales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turnos = DB::table('turnador_especials')->max('folio');
        $turnos = $turnos +1;
        return view ('TurnoEspecial.create',compact('turnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'folio'=>'required',
            'usuario' => 'required',
            'telefono' => 'required',
            'asunto' => 'required',
            'descripcion'=> 'required',
            ]);
    $turnos = DB::table('turnador_especials')->max('folio');
        $turnos = $turnos +1;
        TurnadorEspecial::create([
            'folio'=>$request['folio'],
            'usuario' => $request['usuario'],
            'telefono' => $request['telefono'],
            'asunto' => $request['asunto'],
            'descripcion'=> $request['descripcion'],
            'estatus'=>$request=0,
           ]);
    
        return back()->withSuccess('Agregado Correctamente, su número de folio es: '.$turnos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
