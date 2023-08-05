<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Actuality extends Model
{
    use HasFactory;

    protected $fillable = ['title','message','image_path'];
    protected $table = 'actualities';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
