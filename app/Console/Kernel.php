<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use \App\Jobs\EnviarEmailCompromisso;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {   
            // $schedule->call(function () {
            // // Lógica para obter e enviar compromissos por e-mail
            // $compromissos = Compromisso::whereDate('data', now()->toDateString())->get();
            // // Lógica para enviar e-mails com os compromissos
            //     })->dailyAt('20:35');

            $schedule->job(new EnviarEmailCompromisso)->everyFiveMinutes();
        
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
