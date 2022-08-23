<?php

namespace App\Models\Character;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable =['name', 'image'];

    public function animes(){
        return $this->belongsToMany(Anime::class);
    }

}
