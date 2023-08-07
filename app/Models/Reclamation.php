<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event,User;

class Reclamation extends Model
{
    use HasFactory;
    protected $fillable = ['message','event_id','user_id'];

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
