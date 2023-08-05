<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Matche;

class Score extends Model
{
    use HasFactory;
    protected $fillable = ['equipe1_goal','equipe2_goal'];

    public function matche(): BelongsTo
    {
        return $this->belongsTo(Matche::class);
    }
}
