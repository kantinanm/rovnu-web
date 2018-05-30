<?php

namespace App\Listeners;

use App\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use Config;
use Mail;
use Storage;
use File;

class MessageSendingListener
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
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        //
        $message = 'ทีม'.$event->user->teamname . ' ได้ทำการลงทะเบียน '.Carbon::now();
        //Storage::put('registeractivity.txt', $message);
        Storage::append('registeractivity.txt', $message);
        dispatch((new SendEmailJob($event->user,$event->pass))->delay(Carbon::now()->addSeconds(3)));
    }
}
