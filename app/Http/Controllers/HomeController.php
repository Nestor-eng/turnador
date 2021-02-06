<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\TurnadorEspecial; 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $cuenta= DB::select('select count(*) from turnador_especials where estatus = ?',[0]);
       $contador = $cuenta[0];
        $this->middleware('auth',compact('contador'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {  $cuenta= DB::select('select count(*) from turnador_especials where estatus = ?',[0]);
       $contador = $cuenta[0];
        return view('dashboard',compact('contador'));
    }
}
