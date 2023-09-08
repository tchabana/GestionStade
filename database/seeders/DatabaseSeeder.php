<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Event;
use App\Models\Score;
use App\Models\Matche;
use App\Models\Other;
use App\Models\Actuality;
use App\Models\Reclamation;
use App\Models\Comment;
use App\Models\Ticket;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // chargement des users
        $users = User::factory()->count(33)->create();

        //chargement des events

        $gerants = User::all()->where('role','gerant');
        foreach($gerants as $gerant){
            $events = Event::factory()->count(2)->create(['user_id' => $gerant->id]);
        }

        // chargement score
        $score = Score::factory()->create();

        // chargement matchs et others (sont des types de Event)
        $events = Event::all();
        foreach($events as $event){
            $matchs = Matche::factory()->create(['event_id'=>$event->id,'score_id'=>$score->id]);

            $otherEvents = Event::factory()->create(['user_id' => User::all()->where('role','gerant')->first->id]);
            $others = Other::factory()->create(['event_id'=>$otherEvents->id]); 
        }

         //chargement actuality
         $equipes = User::all()->where('role','equipe');
         foreach ($equipes as $equipe) {
             $actualities = Actuality::factory()->count(2)->create(['user_id'=>$equipe->id]);
         }


         // chargement reclamations
         $reclamations = Reclamation::factory()->count(10)->create();

          // chargement commentaire
          $comments = Comment::factory()->count(25)->create();
         
          // chargement des tickets
          $tickets = Ticket::factory()->count(115)->create();


        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
