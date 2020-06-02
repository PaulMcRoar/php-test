<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Episode extends Model
{
    use Searchable;

    public $incrementing = false;

    protected $fillable = ['name','air_date','episode','url','created'];

    public function appearances()
    {
    	return $this->hasMany(Appearance::class);
    }

    public function characters()
    {
    	return $this->belongsToMany(Character::class,'appearances');
    }
    
}
