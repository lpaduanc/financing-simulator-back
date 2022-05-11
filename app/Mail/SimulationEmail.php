<?php

namespace App\Mail;

use App\Models\Simulation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SimulationEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $simulation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Simulation $simulation)
    {
        $this->simulation = $simulation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Simulação Financiamento.');
        $this->to('luiz.paduanit@gmail.com');

        return $this->markdown('mail.simulation', [
            'simulation' => $this->simulation,
        ]);
    }
}
