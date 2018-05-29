<?php

namespace App\Listeners;

use App\Events\TeamConfirmed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationListener
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
     * @param  TeamConfirmed  $event
     * @return void
     */
    public function handle(TeamConfirmed $event)
    {
        //
    }
}
