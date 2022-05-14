<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FoloSupportTeam extends Mailable
{
    use Queueable, SerializesModels;

    private $customer_name;
    private $customer_email;
    private $customer_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer_name, $customer_email, $customer_message)
    {
        $this->customer_name = $customer_name;
        $this->customer_email = $customer_email;
        $this->customer_message = $customer_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // View to display in the mail
        $this->view('emails.customer-message')->with([
            'customer_name' => $this->customer_name,
            'customer_email' => $this->customer_email,
            'customer_message' => $this->customer_message,
        ]);
        // Build the message
        return $this;
    }
}
