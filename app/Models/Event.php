<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Matche,Comment;
use App\Models\Other,Ticket;
use App\Models\User,Reclamation;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','date_on','start_at','end_at','authors','participants'];

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
}
