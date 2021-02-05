<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\turnador;
use RealRashid\SweetAlert\Facades\Alert;
class TurnadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos = DB::table('turnadors')->max('folio');
        $turnos = $turnos +1 ;
        return view('turnador.index',compact('turnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $turnos = DB::table('turnadors')->max('folio');
      $turnos = $turnos + 1;
      $estatus = 0;
      $descripcion = "Normal";
      echo $descripcion;
      DB::insert('insert into turnadors(folio,descripcion,estatus) values(?,?,?)',[$turnos,$descripcion,$estatus]);
      
      return back()->withSuccess('Turno asignado correctamente, espere un momento y nos comunicaremos con usted su número de folio es '.$turnos);
    }

    public function store(ProfileRequest $request)
    {
      
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
        //
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
