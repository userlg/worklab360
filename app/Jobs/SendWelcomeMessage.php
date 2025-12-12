<?php

namespace App\Jobs;

use App\Mail\WelcomeMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendWelcomeMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;

    public $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $name)
    {
        $this->email = $email;

        $this->data = new WelcomeMessage($name);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send($this->data);
    }
}
