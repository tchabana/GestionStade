<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Payement extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id','info_suplementaire'];

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
}
