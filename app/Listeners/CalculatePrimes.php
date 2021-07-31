<?php

namespace App\Listeners;

use App\Events\GeneratePrimesEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CalculatePrimes
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  GeneratePrimesEvent  $event
     * @return void
     */
    public function handle(GeneratePrimesEvent $event)
    {
        $n = 1000000;
        
        return $this->primes($n);
    }

    public function primes($n){
        $arreglo = [FALSE,FALSE];
        for($i=2; $i<=$n;$i++){
            $arreglo[] = null;
        }
        
        for($i=2;$i<=$n;$i++){
            if(is_null($arreglo[$i])){
                $arreglo[$i] = TRUE;
                for($j=$i+$i;$j<=$n;$j+=$i){
                    $arreglo[$j] = FALSE;
                }	
            } 
        }
               
        return $arreglo;
    }
}
