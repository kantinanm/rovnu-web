<?php

namespace App\Listeners;

use App\Events\VideoUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TeamValidationListener
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
     * @param  VideoUpdated  $event
     * @return void
     */
    public function handle(VideoUpdated $event)
    {
        //
    }
}
