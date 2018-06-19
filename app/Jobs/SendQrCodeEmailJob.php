<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\SendQrCode;

class SendQrCodeEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */


    public $email;
    public $fullname;
    public $file_name;

    // The number of times the job may be attempted.
    public $tries = 5;
    // The number of seconds the job can run before timing out.
    public $timeout = 120;

    public function __construct($mail_to,$name,$name_of_file)
    {
        //
        $this->email=$mail_to;
        $this->fullname=$name;
        $this->file_name=$name_of_file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Mail::to($this->email)
            ->send(new SendQrCode($this->email,$this->fullname,$this->file_name));
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
