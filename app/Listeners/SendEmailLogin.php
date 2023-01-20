<?php

namespace App\Listeners;

use App\Events\Logined;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailLogin
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
     * @param  \App\Events\Logined  $event
     * @return void
     */
    public function handle(Logined $event)
    {
        //
    }
}
