<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Events\GeneratePrimesEvent;
use App\Jobs\GeneratePrimes;


class GeneratePrimesController extends Controller
{
    public function Generate(Request $request){
        
        //print $request->num;
        
        //generando $num eventos
        //intento con colas
        //GeneratePrimes::dispatch($request->num);

        //ejecución del propio evento directo
        for($i=0;$i<$request->num;$i++){
            GeneratePrimesEvent::dispatch();
        }

        print "ejecutando";
    }
}