<?php

namespace App\Listeners;

use App\Events\TeamConfirmed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Jobs\SendComfirmEmailJob;
use Carbon\Carbon;
use Config;
use Mail;
use Storage;

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
        $message = 'ทีม'.$event->user->teamname . ' ได้ยืนยันการส่งทีมเข้าร่วมแข่งขัน '.Carbon::now();
        //Storage::put('registeractivity.txt', $message);
        Storage::append('confirm_activity.txt', $message);
        dispatch((new SendComfirmEmailJob($event->user))->delay(Carbon::now()->addSeconds(5)));
    }
}
