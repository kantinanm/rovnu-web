<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\SendConfirmationMailable;
use Mail;
use Illuminate\Mail\Mailer;
use App\User;
use Config;
use Illuminate\Support\Facades\Log;

class SendComfirmEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $user;

    // The number of times the job may be attempted.
    public $tries = 10;
    // The number of seconds the job can run before timing out.
    public $timeout = 120;


    public function __construct(User $user)
    {
        //
        $this->user=$user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Mail::to($this->user->email)
            ->send(new SendConfirmationMailable($this->user));
    }

    //Determine the time at which the job should timeout.
    public function retryUntil()
    {
        return now()->addSeconds(10);
    }

    public function failed(Exception $exception)
    {
        // Send user notification of failure, etc...
        $message=" Job failed ";
        Log::info($message);
        Log::error($exception->getMessage());
    }
}
