<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\Player;
use Config;

class SendConfirmationMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;

    public function __construct(User $user)
    {
        //
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        $admin_email =Config::get('app.admin_address');
        $manager_email =Config::get('app.manager_address');
        $emails = [$admin_email,$manager_email];

        $players=Player::where('team_id',$this->user->id)->get();

        return $this->subject("ยืนยันการส่งทีมเข้าร่วมแข่งขัน อีสปอร์ต กีฬาบุคลากร มหาวิทยาลัยนเรศวร ")
            ->from('esport@nu.ac.th')
            ->bcc($emails)
            ->view('email.confirmTeamView')->with(compact('user',$this->user)) ->with(compact('players',$players));

    }
}
