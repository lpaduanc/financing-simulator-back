<?php

namespace App\Jobs;

use App\Mail\SimulationEmail as MailSimulationEmail;
use App\Models\Simulation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SimulationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 5;
    
    private $simulation;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Simulation $simulation)
    {
        $this->simulation = $simulation;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send((new MailSimulationEmail($this->simulation)));
    }
}
