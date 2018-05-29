<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\verifyEmail;
use Mail;
use Illuminate\Mail\Mailer;
use App\User;
use Config;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $user;
    public $pass;

    public function __construct(User $user ,$pass)
    {
        //
        $this->user=$user;
        $this->pass=$pass;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        //$admin_email =Config::get('app.admin_address');
        //$manager_email =Config::get('app.manager_address');

        //
        //$emails = [$this->user->email,$admin_email];
        Mail::to($this->user->email)
            ->send(new verifyEmail($this->user,$this->pass));

        //$emails = ['tester@blahdomain.com', 'anotheremail@blahdomian.com'];
        /*Mail::send(new verifyEmail($this->user,$this->pass), function ($message) use ( $emails)
        {
            $message->from('no-reply@yourdomain.com', 'Joe Smoe');
            $message->to( $emails);
            //Add a subject
            $message->subject("New Email From Your site");
        });*/

    }
}
