<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Score;
use App\Models\Event;

class Matche extends Model
{
    use HasFactory;

    protected $fillable = ['equipe1_name','equipe2_name','event_id'];

    public function score()
    {
        return $this->belongsTo(Score::class);
    }


    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
