<?php

namespace App\Jobs;

use App\Mail\VerifyMail;
use App\Models\VerifyCode;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendVerification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private VerifyCode $verify) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->verify->user->email)->send(
            new VerifyMail($this->verify)
        );
    }
}
