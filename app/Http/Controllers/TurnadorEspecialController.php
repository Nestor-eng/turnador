<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TurnadorEspecial; 
use App\Models\turnador; 
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
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
      
    }
    
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
    public function update($id)
    {
        $turnador = DB::select('select estatus from turnador_especials where id=?',[$id]);
        $opcion = $turnador[0]->estatus;
        if($opcion == 0){

        DB::update('update turnador_especials set estatus = ?  where id = ?', [1, $id]);
        return redirect('TurnadorEspecial')->withSuccess('Gracias');
        }
        elseif ($opcion == 1) {
        DB::update('update turnador_especials set estatus = ?  where id = ?', [2, $id]);
        return back()->withSuccess('Gracias');
    }
    }

   public function cambiar($id)
    {
   
      
        DB::update('update turnador_especials set estatus = ?  where id = ?', [2, $id]);
        return back()->withSuccess('Gracias'.$id);
    }


   public function destroy($folio)
    {
       
    }
}
