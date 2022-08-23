<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Anime extends Model
{
    use HasFactory;
    protected $fillable =['title', 'image', 'description', 'ratings'];

    public function characters(){
        return $this->belongsToMany(Character::class)->withPivot('role');
    }

    public function reviews(){
        return $this->hasMany(review::class);
    }

}
