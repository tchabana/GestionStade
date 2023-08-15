<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Actuality extends Model
{
    use HasFactory;

    protected $fillable = ['id','title','message','image_path', 'user_id'];
    protected $primaryKey = 'id';
    protected $table = 'actualities';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
