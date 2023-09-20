<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event,User,Payement;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['type','price','event_id','user_id','used','image_path'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payement()
    {
        return $this->hasOne(Payement::class);
    }
}
