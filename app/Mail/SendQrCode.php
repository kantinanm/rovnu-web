<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Config;

class SendQrCode extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public $fullname;
    public $file_name;

    public function __construct($mail_to,$name,$name_of_file)
    {
        //
        $this->email=$mail_to;
        $this->fullname=$name;
        $this->file_name=$name_of_file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $admin_email =Config::get('app.admin_address');
        $manager_email =Config::get('app.manager_address');

        $emails = [$admin_email,$manager_email];
        /*
        $attachments = [
            // first attachment
            public_path('/download').'/infographic.pdf' => [
                'as' => 'infographic.pdf',
                'mime' => 'application/pdf',
            ],

            // second attachment
            public_path('/images/qrcode').'/'.$this->file_name => [
                'as' => $this->file_name,
                'mime' => 'image/png',
            ],

        ];
        */

        return $this->subject("ขอบคุณที่สนใจลงทะเบียนเพื่อเข้าร่วมงาน NU e-Sport ROV Tournament ในวันที่ 17 สิงหาคม 2561 ")
            ->from('ecpe-software@nu.ac.th')
            ->bcc($emails)
            ->attach(public_path('/images/qrcode').'/'.$this->file_name, [
                'as' => $this->file_name,
                'mime' => 'image/png',
            ])
            ->view('email.sendQrView')->with(compact('fullname',$this->fullname));
    }
}
