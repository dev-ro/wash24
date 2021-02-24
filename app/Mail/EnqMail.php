<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnqMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $service;
    public $mobile;
    public $car_detail;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->service = $data['service'];
        $this->mobile = $data['mobile'];
        $this->car_detail = $data['car_detail'];
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sender@wash24.in')->view('mail.enq');
    }
}
