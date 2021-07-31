<?php

namespace App\Listeners;

use App\Events\GeneratePrimesEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendMailPrimes
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
        return Mail::to('arojast95@gmail.com')->send(new SendMail());
    }
}
