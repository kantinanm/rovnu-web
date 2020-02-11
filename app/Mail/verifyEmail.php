<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use Config;

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
        //$emails = [$this->user->email,'tester@blahdomain.com', 'anotheremail@blahdomian.com'];
        $admin_email =Config::get('app.admin_address');
        $manager_email =Config::get('app.manager_address');

        $emails = [$admin_email,$manager_email];

        return $this->subject("Verify Your Email โปรดทำการยืนยัน email ที่สมัคร จากกิจกรรม อีสปอร์ต กีฬาบุคลากร มหาวิทยาลัยนเรศวร ")
            ->from('ecpe-software@nu.ac.th')
            ->bcc($emails)
            ->attach(public_path('/download').'/poster.pdf', [
                'as' => 'poster_preview.pdf',
                'mime' => 'application/pdf',
            ])
            ->view('email.sendView')->with(compact('user',$this->user)) ->with(compact('password',$this->pass));

    }
}
