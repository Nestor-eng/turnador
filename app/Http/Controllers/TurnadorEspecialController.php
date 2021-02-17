<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TurnadorEspecial; 
use App\Models\turnador; 
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;
use Carbon\Carbon;
class TurnadorEspecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      $turnos = DB::table('turnador_especials')->orderByDesc('folio', 'desc')->get();
      return view('TurnoEspecial.index',compact('turnos'));
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
        $prueba = Carbon::now();
        $prueba = Carbon::now('America/Mexico_City');
        $usuario = $request['usuario'];
        $datos = DB::table('users')
                ->where('username',$usuario)
                ->value('municipio');
        
        TurnadorEspecial::create([
            'folio'=>$turnos,
            'usuario' => $request['usuario'],
            'telefono' => $request['telefono'],
            'asunto' => $request['asunto'],
            'descripcion'=> $request['descripcion'],
            'created_at'=>$prueba,
            'estatus'=>$request=0,
            'municipio'=>$datos,
           ]);
    
        return back()->withSuccess('Agregado Correctamente, su número de folio es: '.$turnos.'<h3><font color="red">NOTA: SOLO SE LE ATENDERÁ CON SU NÚMERO DE FOLIO</h3>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($folio)
    {
        
        $turnos = TurnadorEspecial::where('folio','=', $folio)->firstOrFail();
       
        
      return view('TurnoEspecial.show',compact('turnos'));
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
    public function update($folio)
    {
        $turnador = DB::select('select estatus from turnador_especials where folio = ?',[$folio]);
        $opcion = $turnador[0]->estatus;
        echo $opcion;
        if($opcion == 0){

        DB::update('update turnador_especials set estatus = ?  where folio = ?', [1, $folio]);
        return back()->withSuccess('Gracias');
        
        }
        elseif ($opcion == 1) {
        DB::update('update turnador_especials set estatus = ?  where folio = ?', [2, $folio]);
        return redirect('TurnadorEspecial')->withSuccess('Gracias');
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
