<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Event;

class Other extends Model
{
    use HasFactory;
    protected $fillable = ['designation','info_suplementaire','event_id'];
    
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
