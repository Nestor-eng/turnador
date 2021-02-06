<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use App\Models\TurnadorEspecial; 
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $cuenta= DB::select('select count(*) from turnador_especials where estatus = ?',[0]);
       $contador = $cuenta[0];
        if (! $request->expectsJson()) {
            return route('login',compact('contador'));
        }
    }
}
