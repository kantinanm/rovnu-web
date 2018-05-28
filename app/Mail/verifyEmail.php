<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class verifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public $pass;
    public function __construct(User $user,$pass)
    {
        //
        $this->user=$user;
        $this->pass=$pass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        //dd($this->user);
        //dd($this->pass);
        //return $this->view('email.sendView');
       /*return $this->view('email.sendView')->with(compact('user',$this->user))
            ->with(compact('password',$this->pass));*/

        return $this->subject("Verify Your Email โปรดทำการยืนยัน email ที่สมัคร จากกิจกรรม NU e-Sport ROV Tournament ")
            ->from('ecpe-software@nu.ac.th')
            ->view('email.sendView')->with(compact('user',$this->user)) ->with(compact('password',$this->pass));

    }
}
