<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Events\GeneratePrimesEvent;

class GeneratePrimes implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $num;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($num)
    {
        $this->num = $num;
        //print "<br>entra en job";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //return GeneratePrimesEvent::dispatch();
        for($i=1;$i<=$this->num;$i++){
            GeneratePrimesEvent::dispatch();
        }
    }
}
