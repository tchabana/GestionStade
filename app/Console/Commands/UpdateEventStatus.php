<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Event;
use Carbon\Carbon;

class UpdateEventStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-event-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
          // Récupérez tous les événements
          $events = Event::all();

          foreach ($events as $event) {
              // Mettez à jour le statut de l'événement
              $status = $event->status();
  
              // Vous pouvez également enregistrer le statut dans la base de données si nécessaire
              // $event->statut = $status;
              // $event->save();
  
              $this->info("Event {$event->id}: {$status}");
          }
    }
}
