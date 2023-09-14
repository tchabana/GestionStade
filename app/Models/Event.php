<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Matche,Comment;
use App\Models\Other,Ticket;
use App\Models\User,Reclamation;
use Illuminate\Support\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['id','title','description','date_start','date_end','start_at','end_at','authors','user_id','nbr_participant','nbr_ticket_gen_local','nbr_ticket_gen_online','nbr_likes',"image_path"];
    protected $primaryKey = 'id';
    public function matche(): HasOne
    {
        return $this->hasOne(Matche::class);
    }

    public function other(): HasOne
    {
        return $this->hasOne(Other::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reclamations()
    {
        return $this->hasMany(Reclamation::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
//pour determiner le status d'un event
    public function status(){
        $dateHeureCourante = Carbon::now();
        $debutEvent = Carbon::parse($this->date_start.' '.$this->start_at);
        $finEvent = Carbon::parse($this->date_end.' '.$this->end_at);
    
        if($dateHeureCourante < $debutEvent){
            return '<strong>À venir</strong>';
        }elseif($dateHeureCourante >= $debutEvent && $dateHeureCourante <= $finEvent){
            return '<strong>En cours</strong>';
        }else{
            return '<strong>Terminé</strong>';
        }
    }
    
}
